@if(Session::has('message'))
	<div class="alert alert-success">
	  {{Session::get('message')}}
	</div>
@elseif($errors->count()>0)
	<div class="alert alert-danger">
		@foreach($errors->all() as $error)
		{{ $error }}
		<br/>
		@endforeach
	</div>
@elseif(Session::has('error'))
	<div class="alert alert-danger">
		{{Session::get('error')}}
	</div>
@endif