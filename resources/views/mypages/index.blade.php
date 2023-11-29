@extends('layouts.app')

@section('content')
    
<div class="container">
    <h1 class="content-heading">Your wishlist</h1>
    
    <div>
      
       
        <div> <span><strong>Balance: R{{$itemsprice}}</strong></span></div>
        <a href="{{route('client.createitem')}} " title="Add an item" class="add-item-text"><i class="bi bi-plus-circle-fill plus-icon"></i></a>
        <div class="row cards-row ">
        
            @foreach($items as $item)
            
                <div class="col-4">
                <div class="card rounded-0 mx-auto product-card" style="width: 21rem;">
                    <img src="uploads/{{$item->itemimage}}" class="card-img-top rounded-0 " alt="product image">
                    <div class="card-body product-card-body">
                      <h5 class="card-title">{{$item->iname}}</h5>
                     <div class="description-text"> <i class="card-text">{{$item->description}}</i></div>
                     <span><a href="{{$item->itemsite}}" class="btn my-btn-2" target="_blank" title="Visit site"><i class="bi bi-globe"></i></a></span> <span>   <a title="Edit" href="{{route('item.edit',['item'=>$item])}}"><button class="btn my-btn"><i class="bi bi-pencil button-icon"></i></button></a></span><span></span> <span  class="card-price">R {{number_format($item->price, 2, ',', ' ')}}</span>
                     <span> <form class="delete-form" method="post" action="{{route('item.destroy',['item'=>$item])}}">
                        @csrf
                        @method('delete')
                        
                        
                        <button title="Delete" type="submit" class="my-btn-2 btn"><i class="bi bi-trash"></i></button>
                       </form></span>
                      <div>
                      <br>
                        
                      </div>
                    </div>
                  </div>
                </div>

            @endforeach
           
        
        </div>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</div>
@include('mypages.my-footer')
    @endsection