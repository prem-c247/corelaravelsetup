@include('layout.partials.head')
<div class="container">
	<div class="col-sm col-">
		<form class="col-lg-6 offset-lg-3" action="{!! route('register-post') !!}" method="post">
			@csrf
			<div class="mx-auto">
				<div class="justify-content-center">
					<h3>Register to portal</h3>
				</div>
				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" name="first_name" class="form-control" id="firstName" aria-describedby="firstNameHelp" placeholder="Enter First Name">
					@error('first_name')
						<span class="text-danger">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" name="last_name" class="form-control" id="lastName" aria-describedby="lastNameHelp" placeholder="Enter Last Name">
					@error('last_name')
						<span class="text-danger">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					@error('email')
						<span class="text-danger">{{ $message }}</span>
					@enderror
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					@error('password')
						<span class="text-danger">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="exampleInputConfirmPassword1">Confirm Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Confirm Password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</div>