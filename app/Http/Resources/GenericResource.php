<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GenericResource extends JsonResource
{
    public function toArray($request)
    {
        return $this->resource->toArray();
    }
}
