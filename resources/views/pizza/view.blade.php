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
    
    <div class="container">
        <div class="row-2">
            <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                         Pizza Detail
                        </div>
                        <div class="card-body">
                        <form action="{{ route('pizzas.show', $pizza->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                            <p>Pizza Name : <b>{{ $pizza->pizza_name }}</b></p><hr>
                            <p>Pizza Price : <b>{{ $pizza->price }}</b></p><hr>
                            @if($pizza->pizza_image)
                            <div class = "row">
                                <div class = "col-12">
                                    <img src="{{ asset('storage/'.$pizza->pizza_image) }}" class = "img-thumbnail">
                                </div>
                            </div>
                            @endif
                            <a href = "{{ route ('pizzas.index') }}">
                            <button type = "button" class = "btn btn-primary" >Back</button>
                            </a>
                        </form>
                        
                        </div>
                    </div>
            </div>
        </div>
    </div>

</body>
</html>