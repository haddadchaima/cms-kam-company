<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $fillable = [
        'status', 'role', 'birthday', 'gender', 'firstname', 'lastname', 'image' , 'country', 'city', 'tel', 'mobile', 'address', 'postcode', 'email', 'password', 'block_description', 'year', 'month_number'];

}