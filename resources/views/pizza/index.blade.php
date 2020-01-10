@extends("layouts.master")
@section("content")

   <div  class="container">
       <div class="row">
           <div class="col">
           <br>
           <a class="btn btn-primary btn-large" href="{{ route('pizzas.create') }}">New Pizza</a>
           <br><hr>
           <table id="pizza-table" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pizza Name</th>
                        <th>Pizza Image</th>
                        <th>Price(Ks)</th>
                         <th>Action</th> 
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


@endsection
@section("scripts")
<script>
    $(document).ready(function() {
        $('#pizza-table').DataTable({
            serverSide: true,
            processing: true,
            responsive: true,
            ajax: "{{ route('pizzas.data') }}",
            columns: [
            { name: 'id',searchable: false },
            { name: 'pizza_name' },
            { name: 'pizza_image' },
            { name: 'price'},
            { name: 'action', orderable: false, searchable: false }
            
            ],
        });
    });
</script>
@endsection 