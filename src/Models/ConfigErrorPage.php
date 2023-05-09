<?php

namespace B7\Configs\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigErrorPage extends Model
{
    use HasFactory;

    protected $table = 'config_error_pages';

    protected $fillable = [
        'title', 'subtitle', 'undertitle', 'image', 'phone_text', 'phone_uri', 'chat_uri',
    ];
}
