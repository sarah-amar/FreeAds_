<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdStore;
use App\Models\Ads;
use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $title = $request->input('title');
        $price = $request->input('price');
        $description = $request->input('description');
        $location = $request->input('location');
        $category = $request->input('category');

        $create = new Ads;
        $create->title = ucfirst($title);
        $create->price = $price;
        $create->description = ucfirst($description);
        $create->location = ucfirst($location);
        $create->category = ucfirst($category);
        $create->save();

        return redirect()->route('index')->with('success', 'Ad is online');

    }

}
