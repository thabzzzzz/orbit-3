<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Client;
use App\Models\Item;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    // 
    
    public function index(){
        $clients=Client::all();
        $items=Item::where('client', Auth::user()->name )->get();;
        $itemsprice=  number_format(Item::where('client', Auth::user()->name )->sum('price'), 2, ',', ' ');
      
        return view('mypages.index',['clients'=>$clients],['items'=>$items,'itemsprice'=>$itemsprice]); //local page file path + pass clients sql rows to loop over in html page
       
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
        
  
        
  


         // Validate the request - ensure it's an image and meets any other criteria
    $request->validate([
        'iname' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rules
    ]);

    $name = $request->input('iname');

    if ($request->hasFile('image')) {
        $image = $request->file('image');




     
        $imageName = time() . '_' . $image->getClientOriginalName();

        
        $image->move(public_path('uploads'), $imageName);

      
        $item = new Item;
        $item->iname=request('iname');
        $item->client = Auth::user()->name ;
      
        $item->price = request('price');
        
        $item->itemsite = request('itemsite');
        $item->description = request('description');

        $item->itemimage =$imageName;
        $item->save();
        return  redirect()->back()->with('message', 'Item created!');;
    }

    // Handle if no image file was found in the request
    return redirect()->back()->with('error', 'No image found to upload.');
    }



    public function edit (Item $item){
        return view('mypages.edit',['item'=>$item]);
    }



    public function update(Item $item, Request $request){
        $data = new Item;
        $data = $request->validate([

            'iname'=>'',
            'price'=>'numeric',
            
            'itemsite'=>'',
            'description'=>'',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);
       

        // Move the file to the desired directory within the public folder
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads'), $imageName);
        $data['itemimage'] =$imageName;
        $item->update($data);
        
        return redirect()->back()->with('message', 'Item updated');
    }

    public function destroy(Item $item){
        $item->delete();
        return redirect()->back()->with('message', 'Item deleted');
    }
}
