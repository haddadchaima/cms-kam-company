<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Media extends Model {

    protected $fillable = ['id', 'name_media', 'size_media', 'type_media', 'md5_media'];

}
