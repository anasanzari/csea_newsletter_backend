@extends('app')

@section('content')
<div class="login">
	<div class="loginbox container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="card">
					<h4 class="center">Login</h4>
					{!! Form::open(['url'=>'/auth/login']) !!}
					<div class="input-field col-md-12">
							<input type="email" name="email" value="{{ old('email') }}" class="lgtext">
							<label>Username</label>
					</div>
					<div class="input-field col-md-12">
							<input type="password" name="password">
							<label>Password</label>
					</div>
					<div class="input-field col-md-12">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>

@endsection
