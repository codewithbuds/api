<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;


class StockController extends Controller
{
    public function create( Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' =>'required|max:255',
        //     'quantity' =>'required',
        //     'price' =>'required',
        //     'category' =>'required',
        // ]);

        $inventory = new Stock();

        $inventory -> id = $request->input('id');
        $inventory -> name = $request->input('name');
        $inventory -> quantity = $request->input('quantity');
        $inventory -> price = $request->input('price');
        $inventory -> category = $request->input('category');

        $inventory ->save();
        return response()->json($inventory);
    }
    
    public function read()
    {
        $inventory= stock::all();
        return response()->json($inventory);
    }

    public function readbyId($id)
    {
        $inventory = stock::find($id);
        return response()->json($inventory);
    }

    public function updatebyId(request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'name' =>'required|max:255',
        //     'quantity' =>'required',
        //     'price' =>'required',
        //     'category' =>'required',
    
        // ]);
    
        $inventory = stock::find($id);

        $inventory->name =$request->input('name');
        $inventory->quantity =$request->input('quantity');
        $inventory->price =$request->input('price');
        $inventory->category =$request->input('category');

        $inventory->save();
        return response()->json($inventory); 
    }

    public function deletebyId(request $request, $id)
    {
        $inventory = stock::find($id);
        $inventory->delete();
        return response()->json($inventory);
        
    }
}
