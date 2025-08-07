<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Find the user instance for the given username.
     *
     * @param  string  $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::where('name', $username)->first();
    }

    /**
     * Get the password histories for the user.
     */
    public function passwordHistories()
    {
        return $this->hasMany(PasswordHistory::class);
    }

    /**
     * Add password to history.
     *
     * @param string $password
     * @return void
     */
    public function addPasswordToHistory($password)
    {
        $this->passwordHistories()->create([
            'password_hash' => bcrypt($password),
        ]);
    }

    /**
     * Check if password exists in history.
     *
     * @param string $password
     * @return bool
     */
    public function isPasswordInHistory($password)
    {
        $histories = $this->passwordHistories()->get();
        
        foreach ($histories as $history) {
            if (Hash::check($password, $history->password_hash)) {
                return true;
            }
        }
        
        return false;
    }
} 