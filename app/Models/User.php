<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'encrypted_password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'encrypted_password',
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
            'password' => 'hashed',
        ];
    }

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'username';
    }

    /**
     * Encrypt password for display using Crypt facade
     */
    public function setEncryptedPassword($password)
    {
        try {
            // Validate encryption key
            if (!config('app.key')) {
                throw new \Exception('Encryption key not configured');
            }
            
            $this->encrypted_password = Crypt::encryptString($password);
        } catch (\Exception $e) {
            \Log::error('Password encryption failed: ' . $e->getMessage());
            throw new \Exception('Failed to encrypt password securely');
        }
    }

    /**
     * Decrypt password for display using Crypt facade
     */
    public function getDecryptedPassword()
    {
        if (!$this->encrypted_password) {
            return null;
        }

        try {
            // Validate encryption key
            if (!config('app.key')) {
                throw new \Exception('Encryption key not configured');
            }
            
            return Crypt::decryptString($this->encrypted_password);
        } catch (\Exception $e) {
            \Log::error('Password decryption failed: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Boot method to automatically encrypt password when saving
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($user) {
            // Only encrypt if password is being set and not already encrypted
            if ($user->isDirty('password') && !$user->isDirty('encrypted_password')) {
                // Get the original password before hashing
                $originalPassword = $user->getOriginal('password');
                if ($originalPassword && !Hash::check($originalPassword, $user->password)) {
                    // This means password was changed, encrypt the new one
                    $user->setEncryptedPassword($user->password);
                }
            }
        });
    }
} 