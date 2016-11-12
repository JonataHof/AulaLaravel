@extends('layouts.app')

@section('content')
<form action="/auth/login" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="col-md-4 col-md-offset-4 "> 
	<div class="panel panel-default">
		<div class="panel-heading">
			Login
		</div>
		<div class="panel-body">
			<div class="form-group">
				<input class="form-control" name="email" type="email" placeholder="Email" />
			</div>
			<div class="form-group">
				<input class="form-control" name="password" type="password" placeholder="Password" />
			</div>
		</div>
		<div class="panel-footer text-right">
			<button class="btn btn-primary ">Logar</button>
		</div>



	</div>
</div> 
</form>


@endsection