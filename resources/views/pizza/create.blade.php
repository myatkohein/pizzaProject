@extends("layouts.master")
@section("content")



<div class="container" style = "background-color:white">
    <div class="row">
        <div class="col-12">
        <table>
            <tr><td>
        <form action="{{ route('pizzas.store') }}" method="POST" enctype="multipart/form-data">
                
            @csrf
            <div class="form-group"><b>
                <label for="pizza_name">Name</label>
                <input type="text" name="pizza_name" value="{{ old('pizza_name') }}" class="form-control">
                @error('pizza_name')
                <small id="pizza_name" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>      
            <div class = "">
                <label for="pizza_image">Pizza Image</label><br>
                <input type="file" name="pizza_image" class="py-2" >
                @error('pizza_image')
                <small id="pizza_image" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div><br>
            <div class="form-group">
                <label for="price">Price(Ks)</label>
                <input type="text" name="price" value="{{ old('price') }}" class="form-control">
                @error('price')
                <small id="price" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Add Pizza</button>
        </form>
        </td></tr></table>
        </div>
    </div>
</div>




@endsection

@section("scripts")

@endsection 