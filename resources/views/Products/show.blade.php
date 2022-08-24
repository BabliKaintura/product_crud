@extends('layouts.master')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
 <table class="table table-bordered" id="producttable">
        <tr>
            
           
		<th>Product Title</th>
            <th class="pr-5">Price (USD)</th>
            <th>Short Notes</th>
            
    
        </tr>
    
        <tr>
            <td>{{ $product->title }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->short_notes }}</td>

</tr>


</table>
   
@endsection