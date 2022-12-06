<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\inventory;

class apicontroller extends Controller
{
    public function create( Request $request)
    {
        $inventory = new inventorymodel();

        $inventory -> id = $request->input('id');
        $inventory -> name = $request->input('name');
        $inventory -> quantity = $request->input('quantity');
        $inventory -> price = $request->input('price');
        $inventory -> category = $request->input('category');

        $inventory ->save();
        return response()->json($inventory);
    }
}
