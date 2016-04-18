@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">User Settings</h1>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="{{ action('SettingsController@postSettings') }}">
					{!! csrf_field() !!}

					<div class="form-group">
						<label for="cpwinput" class="col-md-4 control-label">Current Password</label>
						<div class="col-md-6">
							<input id="cpwinput" type="password" class="form-control" name="current_password">
						</div>
					</div>

					<div class="form-group">
						<label for="npwinput" class="col-md-4 control-label">New Password</label>
						<div class="col-md-6">
							<input id="npwinput" type="password" class="form-control" name="password">
						</div>
					</div>

					<div class="form-group">
						<label for="npwcinput" class="col-md-4 control-label">Confirm Password</label>
						<div class="col-md-6">
							<input id="npwcinput" type="password" class="form-control" name="password_confirmation">
						</div>
					</div>

					<div class="form-group">
						<label for="cemailinput" class="col-md-4 control-label">Current E-Mail Address</label>
						<div class="col-md-6">
							<input id="cemailinput" type="email" class="form-control" placeholder="{{ with(auth()->user())->email }}" disabled>
						</div>
					</div>

					<div class="form-group">
						<label for="nemailinput" class="col-md-4 control-label">New E-Mail Address</label>
						<div class="col-md-6">
							<input id="nemailinput" type="email" class="form-control" name="email">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								Update
							</button>
						</div>
					</div>
				</form>
				<hr>
				<form class="form-horizontal" role="form" method="post" action="{{ action('SettingsController@postDelete') }}" onsubmit="return confirm('Are you sure?')">
					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}
					<button type="submit" class="btn btn-danger">
						Delete My Account
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection