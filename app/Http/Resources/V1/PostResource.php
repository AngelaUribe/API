<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->user->name,
            'phone' => $this->user->phone,
            'email' => $this->user->email,
            'bio' => $this->user->bio,
            'profile_picture' => $this->user->profile_picture,
        
            'album' => [
                'id' => $this->id,
                'title' => $this->title,
                'description' => $this->description,
                'img' => $this->img,
                'date' => $this->date,
                'featured' => $this->featured ? true : false,
            ],
        ];
    }
}
