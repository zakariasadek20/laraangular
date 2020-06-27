<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PostsResource extends Resource
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
            'id'            =>$this->id,
            'categoryId'    =>$this->category_id,
            'titre'         =>$this->title,
            'slug'          =>$this->slug,
            'contenu'       =>$this->body,
            'description'   =>$this->excerpt,
            'extrait'       =>str_limit($this->excerpt,400),
            'image'         =>asset('storage/'.$this->image),
            'dateCreation'  =>$this->created_at
        ];
    }
}


