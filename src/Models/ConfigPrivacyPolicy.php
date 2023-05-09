<?php

namespace B7\Configs\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigPrivacyPolicy extends Model
{
    use HasFactory;

    protected $table = 'config_privacy_policy';

    protected $fillable = [
        'text',
    ];

}
