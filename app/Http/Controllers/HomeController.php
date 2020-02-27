<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    public function list ($slug = null) {

        if($slug == null) {
            $category = null;
            $products = Product::get();
          }
          else {
            $category = Category::where('id', $slug)->firstOrFail();
            $products = Product::where('category_id', $category->id)->get();
          }

        $categories = Category::get();

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $currentItems = array_slice($products->toArray(), $perPage * ($currentPage - 1), $perPage);
        $paginator = new LengthAwarePaginator($currentItems, count($products), $perPage, $currentPage);

        if($slug == null) {
            $paginator->withPath('list/');
        } else {
            $paginator->withPath('list/'.$category->id);
        }

        return view('index', compact('categories', 'category', 'paginator'));
    }

    public function search (Request $request) {
        $category = null;
        $categories = Category::get();
      
        $products = Product::where('name', 'LIKE', '%'.$request->string.'%')->get();
        
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $currentItems = array_slice($products->toArray(), $perPage * ($currentPage - 1), $perPage);
        $paginator = new LengthAwarePaginator($currentItems, count($products), $perPage, $currentPage);
        
        $paginator->withPath('search?string='.$request->string);
        
        return view('index', compact(['category','paginator', 'categories']));
    }
}
