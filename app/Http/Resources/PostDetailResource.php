<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'news_id' => $this->id,
            'author' => $this->author,
            'news_content' => $this->news_content,
            'post_at' => date('Y-m-d', $this->created_at),
            'writer' => $this->whenLoaded('writer'),
        ];
    }
}
