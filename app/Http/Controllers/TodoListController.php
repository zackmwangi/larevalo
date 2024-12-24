<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\todoItem;
use League\CommonMark\Extension\CommonMark\Node\Block\ListItem;

//use Illuminate\Log;

class TodoListController extends Controller
{
    //
    public function index(){
        return view('welcome',['todoItems' => todoItem::where('is_complete',0)->get()]);
    }

    public function saveItem(Request $request){

        //Log::info(json_encode($request->all()));
        $newListItem = new todoItem;
        $newListItem->name = $request->get('listItem');
        $newListItem->is_complete = 0;

        $newListItem->save();

        return redirect('/');

    }

    public function deleteItem(Request $request){
        //
        //Log::info(json_encode($request->all()));
        //
        $itemdId = $request->get('itemId');
        $newListItem = todoItem::find($itemdId);
        $newListItem->delete();

        return  redirect('/');
    }

    public function markItemComplete(Request $request){
        //
        Log::info(json_encode($request->all()));
        //
        $itemdId = $request->get('itemId');
        $newListItem = todoItem::find($itemdId);
        $newListItem->is_complete = 1;

        $newListItem->save();

        return  redirect('/');
    }

}
