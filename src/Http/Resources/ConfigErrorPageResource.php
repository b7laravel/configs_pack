<?php

namespace B7\Configs\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConfigErrorPageResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'undertitle' => $this->undertitle,
            'image_url' => $this->image,
            'phone_text' => $this->phone_text,
            'phone_uri' => $this->phone_uri,
            'chat_uri' => $this->chat_uri,
        ];
    }
}
