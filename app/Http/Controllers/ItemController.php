<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Carbon;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        dd($items);
        return "items";
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $item = new Item;
        $item->name = $request->item['name'];
        $item->save();

        return $item;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        if( $item ){
            $item->completed = $request->item['completed'] ? true : false;
            $item->completed_at = $request->item['completed'] ? now() : null;
            $item->save();

            return $item;
        }

        return "Item not found";
    }

    public function destroy($id)
    {
        $item = Item::find($id);
        if( $item ){
            $item->delete();
            return "Item successfully deleted";
        }

        return "Item not found";
    }
}
