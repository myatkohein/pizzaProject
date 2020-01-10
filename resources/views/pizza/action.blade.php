<div class="btn-group btn-group-sm" role="group" >
 
 <a href = "{{ route('pizzas.show',$pizza->id) }}"><button class = "btn btn-primary btn-sm">View</button></a>

 <a href= " {{ route('pizzas.edit',$pizza->id) }}"><button class="btn btn-primary btn-sm">Edit</button></a>
 
<form method="post" action="{{ route('pizzas.destroy',$pizza->id) }}">
    @method('delete')
    @csrf
<button type="submit" class="btn btn-danger btn-sm" onclick = "return confirm('Are you sure to delete?');">Delete</button>
</form>
</div> 