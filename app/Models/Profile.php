<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['date_of_birth', 'passport_photo', 'years_of_experience', 'phone_number', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Accessor for calculating age
    public function getAgeAttribute()
    {
        $dob = new Carbon($this->attributes['date_of_birth']);
        $now = Carbon::now();
        return $dob->diffInYears($now) . ' years ' . $dob->diffInMonths($now) % 12 . ' months';
    }
}
