@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">{{ $ticket->subject }}</h1>
			</div>
			<div class="panel-body">
				{!! $ticket->content !!}
			</div>
		</div>
	</div>
</div>
@endsection