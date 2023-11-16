<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Item;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    // 
    
    public function index(){
        $clients=Client::all();
        $items=Item::all();
        return view('mypages.index',['clients'=>$clients],['items'=>$items]); //local page file path + pass clients sql rows to loop over in html page
       
    }

    public function create(){
        return view('mypages.create'); 
    }

    public function createitem(){
        return view('mypages.createitem'); 
    }

    public function store(Request $request){
        $data = $request->validate([

            'uname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'profilepicture'=>'required',
            'location'=>'required',
            'displayname'=>'required',

        ]);

        $newClient = Client::create($data);
        return redirect()->back()->with('message', 'New user registered');
    }

    public function storeitem(Request $request){
        $data = $request->validate([

            'client'=>'required',
            'iname'=>'required',
            'price'=>'required|decimal:0,2',
            'itemimage'=>'required',
            'itemsite'=>'required',
            'description'=>'required',
            

        ]);

        $newClient = Item::create($data);
        return redirect()->back()->with('message', 'Item added to list');
    }



    public function edit (Item $item){
        return view('mypages.edit',['item'=>$item]);
    }



    public function update(Item $item, Request $request){
        $data = $request->validate([

            'iname'=>'',
            'price'=>'numeric',
            'itemimage'=>'',
            'itemsite'=>'',
            'description'=>'',
            

        ]);
        
        $item->update($data);
        
        return redirect()->back()->with('message', 'Item updated');
    }

    public function destroy(Item $item){
        $item->delete();
        return redirect()->back()->with('message', 'Item deleted');
    }
}
