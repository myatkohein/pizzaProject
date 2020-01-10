@extends("layouts.master2")
@section("content")



<div class="container" style = "background-color:white">
    <div class="row">
        <div class="col-12">
        <table>
            <tr><td>
        <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
                
            @csrf
            
            <div class="form-group"><br>
                        <label for = "pizza_id">Pizza Id</label>
                        <input type="text" name="pizza_id" class="form-control" id="pizza_id" value = "{{ $pizza->id }}" readonly>              
                        </div>

                        <div class="form-group"><br>
                        <label for = "pizza_name">Pizza Name</label>
                        <input type="text" name="pizza_name" class="form-control" id="pizza_name" value = "{{ $pizza->pizza_name }}" readonly>              
                        </div>

                        <div class="form-group">
                        <label for = "price">Price(Ks)</label>
                        <input type = "text" name="price" class="form-control" id="price"   value = "{{ $pizza->price }}" readonly>                              
                    </div>
                    
                    @if($pizza->pizza_image)
                    <div class = "form-group">
                        <label for="pizza_image">Image</label><br>
                            <img src="{{ asset('storage/'.$pizza->pizza_image) }}" class = "img-thumbnail" style = "width:200px; height:200px;">
                        </div>
                </div>
                     @endif
            


            <div class="form-group"><b><br>
            <label for="table_no">Select Table No</label><br>
                        <select name="table_no"  id="table_no" >
                            <?php for($i=1; $i<=10; $i++){ ?>
                                <option>{{ $i }} </option>
                            <?php } ?>
                        </select>
            </div>

            <div class="form-group"><br>
                        <label for="number">Number</label>
                        <input name="number" class="form-control" id = "number" type="text" value="{{ old('number') }}">
                        @error('number')
                        <small id="number" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>  
                    <div class = "form-group"><br>
                        <label for = "total_prce">Total Price(Ks)</label>
                        <input name = "total_price" id = "total_price" class = "form-control" type="text" readonly>
                    </div>

                    
            <div class = "form-group">
                       <br> <label for="size">Size</label></br>
                            </div>
                    <div class = "form-group" >
                    <div class="form-check form-check-inline">
                         <label class="form-check-label" for="size" >small</label>
                         <input class="form-check-input" type="radio" name="size" id="small" value="small" {{ old('size') == 'small' ? 'checked' : '' }} checked>
                        </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="size" >medium</label>
                        <input class="form-check-input" type="radio" name="size" id="medium" value="medium" {{ old('size') == 'medium' ? 'checked' : '' }}>
                    </div>
                    <div class="form-check form-check-inline">
                       <label class="form-check-label" for="size">large</label>
                        <input class="form-check-input" type="radio" name="size" id="large" value="large" {{ old('size') == 'large' ? 'checked' : '' }}>
                    </div>
                    </div>
            
                       
                    <button type="submit" name = "submit" id = "submit" onclick = "return confirm('Are you sure to confirm for order?');" class="btn btn-primary">Confirm</button>

                    <!-- calculate total_price -->
                    <?php
                        
                    //    if (isset($_POST["submit"])) {
                    //     if (isset($_POST["size"])) {
                    //     $answer = $_POST['size'];
                    //        if ($answer == "small") {
                    //         $total = isset($_POST["total_price"]);
                    //             $result = $total * 2;
                    //              return $result;
                    //        } else {
                    //            echo "male";
                    //        }    
                    //     }else{
                    //         echo "please select your gender";
                    //          }
                    //   }
                    
                    ?>
                        
 

            
        
            
        </form>
        </td></tr></table>
        </div>
    </div>
</div>




@endsection

@section("scripts")
<script> 
$(function() {
    
    $("#price, #number").on("keydown keyup", total_price);
	function total_price() {
        var total = $("#total_price").val(Number($("#price").val()) * Number($("#number").val()));
        return total;
        
	}
    // $('#submit').on('click', function() { 
    //       if($('input[name=small]:checked', '#size').val()){
    //           reurn total = total * 2;
    //       }

    
            

});
    // $(function() {
    // $('input[name="size"]').on("click",function() {
    //     $("#total_price").val((this.value*2).toFixed(2));
    // });
    // $('input[name="size"]:checked').click();
    // });

</script>

@endsection 