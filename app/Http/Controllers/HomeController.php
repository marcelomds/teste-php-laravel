<?php

namespace App\Http\Controllers;

use App\Models\Category\Category;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $category;
    private $product;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $category, Product $product)
    {
        $this->middleware('auth');
        $this->category = $category;
        $this->product = $product;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countCategories = $this->category->count();
        $countProducts = $this->product->count();

        return view('home', compact('countCategories', 'countProducts'));
    }
}
