<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PublicAPIController extends Controller
{
    private $categoryQuery;
    private $productQuery;
    public function __construct()
    {
        $this->categoryQuery = Category::whereNotNull('id');
        $this->productQuery = Product::whereNotNull('id');
    }

    public function getProducts()
    {
        return response()->json($this->productQuery->paginate());
    }

    public function getProductsWithRelations()
    {
        return response()->json($this->productQuery->with('category', 'detail')->get());
    }

    public function getProductsWithSortOrdering()
    {
        if (in_array(request('sort'), ['asc', 'desc']) && in_array(
            request('column'),
            ['id', 'name', 'category_id', 'unit', 'price', 'description', 'created_at', 'updated_at']
        )) {
            return response()->json($this->productQuery->orderBy(request('column'), request('sort'))->get());
        }
        return response()->json("Parameter Error");
    }

    public function getProductsGroupBy()
    {
        // pilih salah satu

        // group by category
        // return response()->json($this->productQuery->get()->groupBy('category_id'));


        // load category with products

        return response()->json($this->categoryQuery->with('products')->get());
    }
}
