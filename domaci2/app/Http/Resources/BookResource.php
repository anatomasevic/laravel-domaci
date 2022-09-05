<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'book';
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'description' => $this->resource->category,
            'year' => $this->resource->year,
            'publisher' => $this->resource->publisher,
            'number_of_copy' => $this->resource->number_of_copy,
            'author' => new AuthorResource($this->resource->author)
        ];
    }
}
