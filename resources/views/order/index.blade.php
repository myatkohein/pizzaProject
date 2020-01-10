@extends("layouts.master2")
@section("content")

   <div  class="container">
       <div class="row">
           <div class="col">
           <br>
           <hr>
           <table id="order-table" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Table No</th>
                        <th>Size </th>
                        <th>Number</th>
                        <th>Total Price(Ks)</th>
                        <th>Pizza ID</th>
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
        $('#order-table').DataTable({
            serverSide: true,
            processing: true,
            responsive: true,
            ajax: "{{ route('orders.data') }}",
            columns: [
            { name: 'id',searchable: false },
            { name: 'table_no' },
            { name: 'size' },
            { name: 'number' },
            { name: 'total_price'},
            { name: 'pizza_id'},
            { name: 'action', orderable: false, searchable: false }
            
            ],
        });
    });
</script>
@endsection 