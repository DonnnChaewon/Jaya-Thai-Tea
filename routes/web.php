<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

// Define the route for the home page
Route::get('/', function () {
    // Create an instance of ProductController
    $productsControl = new ProductController();
    
    // Fetch all products using the ProductController
    $products = $productsControl->getAllProducts();
    
    // Return the 'home' view, passing the products as data
    return view('home', [
        'products' => $products
    ]);
});

// Define the route for the menu page
Route::get('/menu', function () {
    // Create an instance of ProductController
    $productsControl = new ProductController();
    
    // Fetch all products using the ProductController
    $products = $productsControl->getAllProducts();
    
    // Return the 'menu' view, passing the products as data
    return view('menu', [
        'products' => $products
    ]);
});

// Define the route for a specific product's menu detail page
Route::get('/menu/{id}', function ($id) {
    // Create an instance of ProductController
    $productsControl = new ProductController();
    
    // Fetch the product details by ID using the ProductController
    $product = $productsControl->getProductById($id);

    // Create an instance of ReviewController
    $reviewsControl = new ReviewController();
    
    // Fetch the reviews for the product by ID using the ReviewController
    $reviews = $reviewsControl->getReviewById($id);

    // Return the 'menu-detail' view, passing the product and reviews as data
    return view('menu-detail', [
        'product' => $product,
        'reviews' => $reviews
    ]);
});

// Define the route for posting a new review via the API
Route::post('/api/review', [ReviewController::class, 'postReview']);
