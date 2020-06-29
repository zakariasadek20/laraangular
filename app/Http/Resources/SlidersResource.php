<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SlidersResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'titre'=>$this->title,
            'description'=>$this->description,
            'contenu'=>$this->body,
            'image'=>secure_asset('storage/'.$this->image),
            'dateCreation'=>$this->created_at
        ];
    }
}
