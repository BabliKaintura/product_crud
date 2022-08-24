@extends('layouts.master')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products Details</h2>
            </div>
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered table-responsive" id="producttable">
        <tr>
            
            <th>Product Title</th>
            <th class="pr-5">Price (USD)</th>
            <th>Short Notes</th>
            
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->title }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->short_notes }}</td>
          
            <td>
                <form action="{{route('products.destroy',$product->id)}}" method="POST">
   <div class="d-flex">
                    <a class="btn btn-info" href="{{route('products.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{route('products.edit', $product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger show_confirm">Delete</button>
</div>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>

<script>
$(document).ready(function() {
    $('#producttable').DataTable();
});



$('.show_confirm').click(function(event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    swal({
            title: `Are you sure you want to delete this record?`,
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
});
</script>
      
@endsection