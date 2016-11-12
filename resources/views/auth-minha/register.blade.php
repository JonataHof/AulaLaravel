@extends('layouts.app')

@section('content')

<div class="col-md-4 col-md-offset-4 "> 
	<div class="panel panel-default">
		<div class="panel-heading">
			Cadastre-se
		</div>
		<form action="/auth/register" method="POST">
		<div class="panel-body">
		
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<input class="form-control" name="name" type="text" placeholder="Nome" />
			</div>
			<div class="form-group">
				<input class="form-control" name="email" type="email" placeholder="Email" />
			</div>
			<div class="form-group">
				<input class="form-control" name="password" type="password" placeholder="Password" />
			</div>
			<div class="form-group">
				<input class="form-control" name="password" type="password_confirmation" placeholder="Confirmation Password" />
			</div>
		</div>
		<div class="panel-footer text-right">
			<button class="btn btn-primary ">Logar</button>
		</div>
		</form>


	</div>
</div> 



@endsection