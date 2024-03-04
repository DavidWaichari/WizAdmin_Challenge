<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['date_of_birth', 'passport_photo', 'years_of_experience', 'phone_number', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
