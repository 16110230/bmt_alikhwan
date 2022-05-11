<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\File;
class file extends Model
{
    protected $table = 'file';
        protected $fillable = [
            'user_id', 'name', 'url', 'is_active',
        ];
}
