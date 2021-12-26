<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status', 'role', 'birthday', 'gender', 'firstname', 'lastname', 'image' , 'country', 'city', 'tel', 'mobile', 'address', 'postcode', 'email', 'password', 'block_description', 'year', 'month_number','header','sidebar','body'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	
	
	 public function Orders()
    {
        return $this->hasMany('App\Orders', 'customer_id');
    }
	
	
	
	public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }

    public function Uplodpics()
    {
        return $this->hasMany('App\Uploadpic', 'user_id');
    }
    public function Comments()
    {
        return $this->hasMany('App\Comment', 'user_id');
    }
    public function Likes()
    {
        return $this->hasMany('App\Like', 'user_id');
    }
    public function Historys()
    {
        return $this->hasMany('App\History', 'user_id');
    }
	
	
	
}
