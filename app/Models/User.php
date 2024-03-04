<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['first_name', 'middle_name', 'last_name'];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Get the first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getFirstNameAttribute($value)
    {
        return ucfirst($value); // Optionally, capitalize the first letter
    }

    /**
     * Get the middle name.
     *
     * @param  string|null  $value
     * @return string|null
     */
    public function getMiddleNameAttribute($value)
    {
        return $value ? ucfirst($value) : null; // Optionally, capitalize the first letter
    }

    /**
     * Get the last name.
     *
     * @param  string  $value
     * @return string
     */
    public function getLastNameAttribute($value)
    {
        return ucfirst($value); // Optionally, capitalize the first letter
    }

    /**
     * Get the full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        $middleName = $this->middle_name ? ' ' . $this->middle_name . ' ' : '';
        return $this->first_name . $middleName . $this->last_name;
    }
}
