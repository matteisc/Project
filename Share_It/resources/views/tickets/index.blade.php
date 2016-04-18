@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<table class="table table-bordered">
			<thead>
				<th class="col-md-8">Subject</th>
				<th class="col-md-3">Date</th>
				<th class="col-md-1">Resolved</th>
			</thead>
			@forelse($tickets as $ticket)
				<tr class="{{ $ticket->resolved ? 'bg-success' : 'bg-danger' }}">
					<td><a href="{{ action('TicketController@show', [$ticket->id]) }}">{{ $ticket->subject }}</a></td>
					<td>{{ $ticket->created_at }}</td>
					<td>{{ $ticket->resolved ? 'Yes' : 'No' }}</td>
				</tr>
			@empty
				<tr>
					<td colspan="3">No tickets</td>
				</tr>
			@endforelse
		</table>
	</div>
</div>
@endsection