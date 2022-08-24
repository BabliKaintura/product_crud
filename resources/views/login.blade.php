<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head')
<body>
	


<div class="container" >
	<div class="row" >
		<div class="col-12 text-center pt-5" >
			<h1 class="display-one mt-5" style="color:black;">Login Here</h1>

			<form id="add-frm" style="background-color: skyblue; color:black;" method="POST" action="{{ route('login.store')}}"class="border p-3 mt-2">
			@if(Session::has('success'))
			<div class="alert alert success">{{Session::get('success')}}</div>
			@endif
			@if(Session::has('fail'))
			<div class="alert alert danger">{{Session::get('fail')}}</div>
			@endif
			@csrf
				
            <div class="control-group col-6 text-left">
					<label for="title">Email</label>
					<div>
						<input type="email" id="email" class="form-control mb-4" name="email"
							placeholder="Enter Email" required>
							<span class="text-danger">@error('email') {{$message}} @enderror</span>
					</div>
				</div>
                <div class="control-group col-6 text-left">
					<label for="title">Password</label>
					<div>
						<input type="password" id="password" class="form-control mb-4" name="password"
							placeholder="Enter Password" required>
							<span class="text-danger">@error('password') {{$message}} @enderror</span>
					</div>
				</div>
                

				<div class="control-group col-6 text-left mt-2"><button type="submit" class="btn btn-primary">Login</button></div>
                <p class="sign-up">Don't have an Account?<a href="{{ route('registration.index')}}"> Sign Up</a></p>
			</form>
		</div>
	</div>
</div>
@include('layouts.partials.footer-scripts')
</body>
</html>

