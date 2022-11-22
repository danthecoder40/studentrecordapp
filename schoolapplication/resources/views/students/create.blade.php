@extends('students.layout')
@section('content')

<div>
	
	<div class="card-header">student page</div>

<div class ="card-body">

	<form action="{{url ('student')}}" method="post">
		{!! csrf_field()!!}
		
<label>Name</label></br>

<input type="text" name="name" id="name" class="form-control"></br>


<label>Address</label></br>


<input type="text" name="address" id="address" class="form-control"></br>

<label>Mobile</label></br>

<input type="text" name="mobile" id="mobile" class="form-control"></br>



<label>Email Address</label></br>

<input type="text" name="email" id="email" class="form-control"></br>
<input type="submit" value="Save" class="form-control"></br>

	</form>	

	</div>
	</div>
	@stop	
