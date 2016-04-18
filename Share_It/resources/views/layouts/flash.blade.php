@if (session('info'))
	<div class="alert alert-info" role="alert">
		<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
		<span class="sr-only">Info:</span>
		{{ session('info') }}
	</div>
@endif
@if (session('success'))
	<div class="alert alert-success" role="alert">
		<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
		<span class="sr-only">Success:</span>
		{{ session('success') }}
	</div>
@endif
@if (session('warn'))
	<div class="alert alert-warning" role="alert">
		<span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span>
		<span class="sr-only">Warning:</span>
		{{ session('warn') }}
	</div>
@endif
@if (session('error'))
	<div class="alert alert-danger" role="alert">
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		<span class="sr-only">Error:</span>
		{{ session('error') }}
	</div>
@endif