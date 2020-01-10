<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
        <div class="container" style = "background-color:white">
            <div class="row">
                <div class="col-12">
                <table>
                <tr><td>
                <form action="{{ route('pizzas.update', $pizza->id) }}" method="POST" enctype="multipart/form-data">
                        
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="pizza_name">Name</label>
                        <input type="text" name="pizza_name" value="@if(old('pizza_name') == $pizza->pizza_name) {{ old('pizza_name') }} @else {{ $pizza->pizza_name }} @endif" class="form-control">
                        @error('pizza_name')
                        <small id="pizza_name" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class = "">
                        <label for="pizza_image">Pizza Image</label><br>
                        <input type="file" name="pizza_image" value = "" class="py-2">
                        @error('pizza_image')
                        <small id="pizza_image" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div><br>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" value="@if(old('price') == $pizza->price) {{ old('price') }} @else {{ $pizza->price }} @endif" class="form-control">
                        @error('price')
                        <small id="price" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                </td></tr></table>   
                </div>
            </div>
        </div>

</body>
</html>








