@extends('students.layout')
@section('content')
<div>
	
<div class="card-header">Students page</div>

<div class="card-body">
	
<div class="card-body">
	
<h5 class="card-title">Name : {{ $students->name}}</h5>

<p class="card-text">Address :{{$students->address}}</p>

<p class="card-text">Mobile: {{$students->mobile}}</p>

<p class="card-text">Email Address: {{$students->email}} 

</p>


</div>
</hr>

</div>



</div>













</div>