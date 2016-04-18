@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		@include('layouts.flash')
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">Create Support Ticket</h1>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" method="post" action="{{ action('TicketController@store') }}">
					{!! csrf_field() !!}

					<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
						<label for="subject" class="col-md-2 control-label">Subject</label>
						<div class="col-md-5">
							<input id="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}">

							@if ($errors->has('subject'))
								<span class="help-block">
								<strong>{{ $errors->first('subject') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
						<label for="content" class="col-md-2 control-label">Content</label>
						<div class="col-md-8">
							<textarea id="content" class="form-control" name="content" rows="10" cols="40">{{ old('content') }}</textarea>

							@if ($errors->has('content'))
								<span class="help-block">
								<strong>{{ $errors->first('content') }}</strong>
							</span>
							@endif
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-2">
							<button type="submit" class="btn btn-primary">
								Create Ticket
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
	@parent
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.2.5/tinymce.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		tinymce.init({
			selector: "textarea",
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		});
	</script>
@endsection