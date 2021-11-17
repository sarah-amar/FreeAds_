<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function uploadAvatar($image)
    {
        $filename = $image->getClientOriginalName();
        (new self())->deleteOldImage();
        $image->storeAs('images',$filename, 'public');
        $user = User::all();
        auth()->user()->update(['avatar' => $filename]);
    }

    protected function deleteOldImage()
    {
        if(auth()->user()->avatar)
        {
            Storage::delete('/public/images/'.auth()->user()->avatar);
        }
    }

//    public function setPasswordAttribute($password)
//    {
//        $this->attributes['password'] = bcrypt($password);
//    }
//
//    public function getNameAttribute($name)
//    {
//        return ucfirst($name);
//    }
}
