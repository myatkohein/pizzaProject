@extends("layouts.master2")
@section("content")


<div class="container">
    <div class="row">
        <div class="col-12">
    
        
            @foreach($pizza as $piz)
            <div class = "card" style = "background-color:black; color:red; width:325px; text-align: center;" >
                       <div class = "card-body" style = "padding:10px">

                        <img class="" src = "{{ asset('storage/'.$piz->pizza_image) }}" style = "width:200px; height:200px; " >
                        <form>
                            
                        <p class="card-text">
                        <div class="form-group">
                            <label><b>Pizza Name: </label>{{ $piz->pizza_name }} <br>
                        </div>
                        <div class="form-group">
                            <label><b>Price(Ks)</t>: </label>{{ $piz->price }}
                        </p></div>

                        <a href="{{ route('orders.create', ['id' => $piz->id] )}}" class="btn btn-primary">Order</a>
                        
                    </div>
                            
            </div>
                
            @endforeach
        
        </div>
    </div>
</div>
        
    

@endsection

@section("scripts")

@endsection 