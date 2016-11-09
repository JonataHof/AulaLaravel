<div class="form-group">
	{!! Form::label('name','Nome') !!}
	{!! Form::text('name', null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
	{!! Form::label('category_id','Categoria') !!}
	{!! Form::select('category_id',App\Category::lists('name','id'), null, ["class"=>"form-control"]) !!}
</div>
<div class="form-group">
	{!! Form::submit("Salvar", ["class"=>"btn btn-primary"]) !!}
</div>