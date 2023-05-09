<?php

namespace B7\Configs\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigVersion extends Model
{
    use HasFactory;

    protected $table = 'config_versions';

    protected $fillable = [
        'block_app', 'android', 'android_check', 'ios', 'ios_check', 'message', 'android_url', 'ios_url'
    ];
}
