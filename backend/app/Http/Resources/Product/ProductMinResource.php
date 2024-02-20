<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Color\OrderResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductMinResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $products = Product::where('group_id', $this->group_id)->get();

        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'content' => $this->content,
            'image_url' => $this->imageUrl,
            'old_price' => $this->old_price,
            'new_price' => $this->new_price,
            'count' => $this->count,
            'is_published' => $this->is_published,
            'category' => new CategoryResource($this->category),
            'colorsGroup' => OrderResource::collection($this->colorsGroup),

        ];
    }
}
