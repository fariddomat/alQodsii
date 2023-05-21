<?php

namespace App\Http\Controllers\Home;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Project;
use Illuminate\Http\Request;

class CategoryControlelr extends Controller
{
    //
    public function index()
    {

        $categories=Category::paginate(6);
        $category_list=Category::all();
        $max_price=Apartment::max('price');
        $max_room_count=Apartment::max('room_count');
        $max_area=Apartment::max('area');
        return view('home.categories', compact('categories', 'category_list', 'max_price', 'max_room_count', 'max_area'));
    }

   public function show($id)
   {

    $category=Category::find($id);
    if ($category) {

        $category_list=Category::all();
        $max_price=Apartment::max('price');
        $max_room_count=Apartment::max('room_count');
        $max_area=Apartment::max('area');
    $projects=Project::where('category_id',$id)->orderBy('sort_id', 'asc')->paginate(6);
    return view('home.category',compact('category','projects',  'category_list', 'max_price', 'max_room_count', 'max_area'));

    } else {
        # code...
        abort(404);
    }

   }
}
