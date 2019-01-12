<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return ['path' => $this->path,
            'reply' => $this->body,
            'question' => $this->question->body,
            'user' => $this->user->name,
            'created_at' => $this->created_at->diffForHumans()

        ];
    }
}
