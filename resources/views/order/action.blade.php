<div class="btn-group btn-group-sm" role="group" >
 
    <form method="post" action="{{ route('orders.destroy',$order->id) }}">
        @method('delete')
        @csrf
    <button type="submit" class="btn btn-danger btn-sm" onclick = "return confirm('Are you sure to cancel?');">Cancel</button>

</form>
</div> 