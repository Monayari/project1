<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
//   use HasFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\Blog as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Blog extends Model
{
        use HasFactory;

    protected $fillable = [
        'title',
        'body',
    'user_id',

    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
