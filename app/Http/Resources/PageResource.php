<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PageResource extends Resource
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

            'titre'         =>$this->title,
            'slug'          =>$this->slug,
            'contenu'       =>$this->body,
            'description'   =>$this->excerpt,
        ];
    }
}
