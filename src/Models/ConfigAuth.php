<?php

namespace B7\Configs\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigAuth extends Model
{
    use HasFactory;

    protected $table = 'config_auth';

    protected $fillable = [
        'type', 'status', 'sort', 'code_length', 'title', 'subtitle',
        'other_code_timer_in_seconds', 'code_send_title',
        'try_other_code_title', 'request_code_uri', 'code_check_uri',
    ];
}
