@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="pull-left">
            <h2>Create Private Course</h2>
        </div>
        <div class="pull-right">
            <a button="btn btn-primary" href="{{ route('member') }}"> Back</a>
        </div>
    </div>
</div>




<form method="post" action="/bug_process">
        @csrf
		<input type="text" name="Name" id="Name" value="Name"/><br><br>
		<input type="Date" name="Start" id="Start" value ="Start"/> Choose a Date <br> <br>
		<input type="number" name="Duration" id="Duration" value=0 /> Duration (in minute) <br> <br>
		<input type="text" name="Sport_Name" id="Sport_Name" /> Sport name<br> <br>
		<input type="submit" value="Submit" />
</form>	
 

