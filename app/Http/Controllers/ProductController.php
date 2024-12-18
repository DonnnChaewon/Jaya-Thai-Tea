<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        // Use the Eloquent ORM to retrieve all records from the 'products' table
        $products = Product::all();

        // Return the collection of products
        return $products;
    }

    public function getProductById($id)
    {
        // Use the Eloquent ORM to find a product by its 'product_id' field
        $product = Product::where('product_id', $id)->first();

        // Check if the product was not found
        if (!$product) {
            // Return a 404 JSON response if the product does not exist
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Return the product if found
        return $product;
    }
}
