@extends ('layouts.master')@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">Add New Product</h1>

			<form id="add-frm" method="POST" action="{{route('products.store')}}" class="border p-3 mt-2">
			@csrf
				<div class="control-group col-6 text-left">
					<label for="title">Title</label>
					<div>
						<input type="text" id="title" class="form-control mb-4" name="title"
							placeholder="Enter Title" required>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="body">Short Notes</label>
					<div>
						<textarea id="short_notes" class="form-control mb-4" name="short_notes"
							placeholder="Enter Short Notes" rows="" required></textarea>
					</div>
				</div>
				<div class="control-group col-6 text-left mt-2">
					<label for="body">Price</label>
					<div>
						<input type="text" id="price" class="form-control mb-4" name="price"
							placeholder="Enter Price" required>
					</div>
				</div>

			

				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Add New</button></div>
			</form>
		</div>
	</div>
</div>
@endsection