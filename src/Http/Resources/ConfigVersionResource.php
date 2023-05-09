<?php

namespace B7\Configs\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConfigVersionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'blockApp' => $this->block_app,
            'android' => $this->android,
            'androidCheck' => $this->android_check,
            'ios' => $this->ios,
            'iosCheck' => $this->ios_check,
            'message' => $this->message,
            'androidUrl' => $this->android_url,
            'iosUrl' => $this->ios_url,
        ];
    }
}
