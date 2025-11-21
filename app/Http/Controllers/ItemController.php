<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\TypeItem;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', ['items' => $items]);
    }

    public function create()
    {
        $typeItems = TypeItem::all();
        return view('items.create', compact('typeItems'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image_path' => 'nullable|string|max:255',
            'type_item_id' => 'required|integer|exists:type_items,id',
            'setting' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'season' => 'required|in:winter,summer,off-season,demi-season',
            'type' => 'required|in:component,object',
            'price' => 'nullable|numeric|min:0',
        ]);

        $item = Item::create($validatedData);

        return redirect()->route('items.index', $item->id);
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $typeItems = TypeItem::all();
        return view('items.edit', compact('item', 'typeItems'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image_path' => 'nullable|string|max:255',
            'type_item_id' => 'required|integer|exists:type_items,id',
            'setting' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'season' => 'required|in:winter,summer,off-season,demi-season',
            'type' => 'required|in:component,object',
            'price' => 'nullable|numeric|min:0',
        ]);

        $item = Item::findOrFail($id);
        $item->update($validatedData);

        $item->save();

        return redirect()->route('items.show', $item->id);
    }

    public function show(string $id)
    {
        return view('items.show', [
            'item' => Item::with('typeItem')->findOrFail($id)
        ]);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('items.index');
    }
}
