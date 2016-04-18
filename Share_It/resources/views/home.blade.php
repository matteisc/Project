@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					You have {{ 0 }} messages.
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="panel-title">Skills</h1>
					</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<th class="col-md-8">Skill</th>
								<th class="col-md-4">Proficiency (0 - 10)</th>
							</thead>
							@forelse(auth()->user()->proficiencies() as $skill)
								<tr>
									<td></td>
									<td></td>
								</tr>
							@empty
								<tr>
									<td colspan="2">You have no skills added. Add one now!</td>
								</tr>
							@endforelse
						</table>
						<a class="btn btn-success" href="{{ url('/') }}">Add Skill</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h1 class="panel-title">Service Requests</h1>
					</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
							<th class="col-md-8">Request</th>
							<th class="col-md-4"></th>
							</thead>
								<tr>
									<td colspan="2">You have no requests made. Create one now!</td>
								</tr>
						</table>
						<a class="btn btn-success">Create Request</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
