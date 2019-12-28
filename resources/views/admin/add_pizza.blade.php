@extends("layouts.master")
@section("content")



<div class="container">
    <div class="row">
        <div class="col-12">
            
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"> Create Pizza</h2>
                    </div>
                    <div class="card-body">
                    <form action = "" method="post" enctype="multipart/form-data">
                        <!-- <div class= "form-group">
                            <label for = "pizza_name" >Pizza Name</label>
                            <input type = "text" class="form-control" name = "pizza_name" value = "">
                        </div>
                        <div class="form-group">
                            <label for="pizza_image"> Image</label>
                            <input name="pizza_image" type="file" class="form-control-file" id="image" value = "">
                        </div>
                        <div class="form-group">
                            <label for="price"> Price</label>
                            <input name="price" type="text" class="form-control" id="price">
                        </div> -->
                        <label for="pizza_image">Image</label> 
                        <input type = "pizza_image " class="form-control-file" id="" >

                        </form>
                    </div>
                </div>
            
        </div>
    </div>
</div>




@endsection

@section("scripts")

@endsection 