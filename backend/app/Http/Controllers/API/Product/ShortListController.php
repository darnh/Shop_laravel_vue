<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;

class ShortListController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $colors = Color::all();
        $tags = Tag::all();

        $maxPrice = Product::orderBy('new_price', 'DESC')->first()->new_price;
        $minPrice = Product::orderBy('new_price', 'ASC')->first()->new_price;

        $result = [
            'categories' => $categories,
            'colors' => $colors,
            'tags' => $tags,
            'new_price' => [
                'max' => $maxPrice,
                'min' => $minPrice
            ],
        ];

        return response()->json($result);
    }
}
