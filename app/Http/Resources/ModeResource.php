<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ModeResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'link' => route('modes.show', $this->slug)
        ];
    }
}
