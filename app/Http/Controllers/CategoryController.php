<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
	public function index()
	{
        $categories = 'App\Models\Category'::with("childs")->where('parent_id', 0)->get(); 
        $subcategories = 'App\Models\Category'::where('parent_id', '!=', 0)->get(); 
		$clients = DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, website, c1.name as category, c2.name as subcategory'))
			->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
			->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
			->get();
		return view("categories.index", ['categories' => $categories, 'subcategories' => $subcategories, 'clients' => $clients]);
	}

	public function subcategories($id)
	{
		$subcategories = 'App\Models\Category'::where('parent_id', '=', $id)->get();
		return $subcategories;
	}
}
