<?php

namespace B7\Configs\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConfigAuthResource extends JsonResource
{
    public static $wrap = 'codeConfirmationFallbacks';
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'codeLength' => $this->code_length,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'otherCodeTimerInSeconds' => $this->other_code_timer_in_seconds,
            'codeSendTitle' => $this->code_send_title,
            'tryOtherCodeTitle' => $this->try_other_code_title,
            'requestCodeUri' => $this->request_code_uri,
            'codeCheckUri' => $this->request_code_uri,
        ];
    }
}
