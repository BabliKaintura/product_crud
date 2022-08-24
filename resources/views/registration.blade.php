<!DOCTYPE html>
<html lang="en">
@include('layouts.partials.head')
<body>
	

<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5" style="color:black;">New Registration</h1>

			<form id="add-frm" method="POST"  style="background-color: skyblue; color:black;"action="{{route('registration.store')}}" class="border p-3 mt-2">
			@if(Session::has('success'))
			<div class="alert alert success">{{Session::get('success')}}</div>
			@endif
			@if(Session::has('fail'))
			<div class="alert alert danger">{{Session::get('fail')}}</div>
			@endif
			@csrf
			
		
				<div class="control-group col-6 text-left">
					<label for="title">Username</label>
					<div>
						<input type="text" id="name" class="form-control mb-4" name="name"
							placeholder="Enter Username" required>
							<span class="text-danger">@error('name') {{$message}} @enderror</span>
					</div>
				</div>
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
				<div class="control-group col-6 text-left">
					<label for="title">Confirm Password</label>
					<div>
						<input type="password" id="password_confirm" class="form-control mb-4" name="password_confirmation"
							placeholder="Password Confirmation" required>
							<span class="text-danger">@error('password_confirmation') {{$message}} @enderror</span>
					</div>
				</div>

				<div class="control-group col-6 text-left mt-2"><button type="submit" class="btn btn-primary">Register</button></div>
                <p class="sign-up text-center">Already have an Account?<a href="{{ route('login.index') }}"> Sign In</a></p>
<p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
            </form>
		</div>
	</div>
</div>
@include('layouts.partials.footer-scripts')
</body>
</html>
