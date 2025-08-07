<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\PasswordHistory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class PasswordHistoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_password_is_saved_to_history_on_login(): void
    {
        $user = User::create([
            'name' => 'testuser',
            'email' => 'test@example.com',
            'password' => Hash::make('password123')
        ]);

        $this->post('/login', [
            'username' => 'testuser',
            'password' => 'password123',
        ]);

        $this->assertAuthenticated();
        
        // Cek apakah password tersimpan di history
        $this->assertTrue($user->isPasswordInHistory('password123'));
        $this->assertEquals(1, $user->passwordHistories()->count());
    }

    public function test_password_is_saved_to_history_on_password_update(): void
    {
        $user = User::create([
            'name' => 'testuser',
            'email' => 'test@example.com',
            'password' => Hash::make('oldpassword')
        ]);

        $this->actingAs($user);

        $this->put('/password', [
            'current_password' => 'oldpassword',
            'password' => 'newpassword',
            'password_confirmation' => 'newpassword',
        ]);

        // Cek apakah password lama tersimpan di history
        $this->assertTrue($user->isPasswordInHistory('oldpassword'));
        $this->assertEquals(1, $user->passwordHistories()->count());
    }

    public function test_duplicate_password_not_saved_to_history(): void
    {
        $user = User::create([
            'name' => 'testuser',
            'email' => 'test@example.com',
            'password' => Hash::make('password123')
        ]);

        // Login pertama kali
        $this->post('/login', [
            'username' => 'testuser',
            'password' => 'password123',
        ]);

        $this->assertAuthenticated();
        $this->assertEquals(1, $user->passwordHistories()->count());

        // Logout
        $this->post('/logout');

        // Login lagi dengan password yang sama
        $this->post('/login', [
            'username' => 'testuser',
            'password' => 'password123',
        ]);

        $this->assertAuthenticated();
        
        // Password tidak boleh duplikat
        $this->assertEquals(1, $user->passwordHistories()->count());
    }

    public function test_password_history_page_is_accessible(): void
    {
        $user = User::create([
            'name' => 'testuser',
            'email' => 'test@example.com',
            'password' => Hash::make('password123')
        ]);

        $this->actingAs($user);

        $response = $this->get('/password-history');

        $response->assertStatus(200);
        $response->assertViewIs('profile.password-history');
    }

    public function test_session_password_is_saved_on_login(): void
    {
        $user = User::create([
            'name' => 'testuser',
            'email' => 'test@example.com',
            'password' => Hash::make('password123')
        ]);

        $this->post('/login', [
            'username' => 'testuser',
            'password' => 'password123',
        ]);

        $this->assertAuthenticated();
        
        // Cek apakah session password tersimpan
        $this->assertEquals('password123', session('saved_password'));
    }

    public function test_session_password_is_saved_on_password_update(): void
    {
        $user = User::create([
            'name' => 'testuser',
            'email' => 'test@example.com',
            'password' => Hash::make('oldpassword')
        ]);

        $this->actingAs($user);

        $this->put('/password', [
            'current_password' => 'oldpassword',
            'password' => 'newpassword',
            'password_confirmation' => 'newpassword',
        ]);

        // Cek apakah session password tersimpan
        $this->assertEquals('newpassword', session('saved_password'));
    }

    public function test_logout_redirects_to_login_page(): void
    {
        $user = User::create([
            'name' => 'testuser',
            'email' => 'test@example.com',
            'password' => Hash::make('password123')
        ]);

        $this->actingAs($user);

        $response = $this->post('/logout');

        $response->assertRedirect('/login');
        $this->assertGuest();
    }
}
