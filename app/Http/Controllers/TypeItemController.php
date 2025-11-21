<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeItem;

class TypeItemController extends Controller
{
    public function index()
    {
        $types = TypeItem::all();
        return view('all_type_items', ['types' => $types]);
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function show($id)
    {

    }

    public function destroy($id)
    {
        $tItem = TypeItem::findOrFail($id);
        $tItem->delete();
        return redirect()->back();
    }
}
