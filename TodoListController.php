<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;
use Illuminate\Support\Facades\Log;

class TodoListController extends Controller
{
    // List all items
    public function index()
    {
        return view('welcome', ['ListItems' => TodoList::all()]);
    }

    // Add a new Todo item
    public function saveItem(Request $request)
    {
        Log::info(json_encode($request->all()));

        $newTodoList = new TodoList;
        $newTodoList->name = $request->listItem;
        $newTodoList->is_complete = 0;
        $newTodoList->save();

        return back()->with('success', 'Item created successfully!');
    }

    // View a single Todo item
    public function viewItem($id)
    {
        $item = TodoList::findOrFail($id);
        return view('view-item', ['item' => $item]);
    }

    // Edit a Todo item
    public function editItem($id)
    {
        $item = TodoList::findOrFail($id);
        return view('edit-item', ['item' => $item]);
    }

    // Update a Todo item
    public function updateItem(Request $request, $id)
    {
        $item = TodoList::findOrFail($id);
        $item->name = $request->listItem;
        $item->is_complete = $request->is_complete ? 1 : 0;
        $item->save();

        // Example in TodoListController.php
        return back()->with('success', 'Item created successfully!');
    }

    // Delete a Todo item
    public function deleteItem($id)
    {
        $item = TodoList::findOrFail($id);
        $item->delete();

        return back()->with('success', 'Item deleted successfully!');
    }
}