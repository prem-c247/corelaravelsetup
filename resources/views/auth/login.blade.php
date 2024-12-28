@include('layout.partials.head')
<div class="container">
	<div class="col-sm col-">
		<form class="col-lg-6 offset-lg-3" action="{!! route('login-post') !!}" method="post">
			@csrf
			<div class="mx-auto">
				<div class="justify-content-center">
					<h3>Login to portal</h3>
				</div>
				<div class="form-group">
					<div>
						<!-- @isset($data) -->
							@if($data)
								<span class="text-danger">{{ $data['message'] }}</span>
							@endif
						<!-- @endisset -->
					</div>
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
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</div>