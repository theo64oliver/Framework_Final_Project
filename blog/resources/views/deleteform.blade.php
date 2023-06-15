@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="pull-left">
            <h2>Delete Collective Class</h2>
        </div>
        <div class="pull-right">
            <a button="btn btn-primary" href="{{ route('trainer') }}"> Back</a>
        </div>
    </div>
</div>




<form method="post" action="/delclass">
        @csrf
		<input type="number" name="Class_ID" id="Class_ID" value=0 /> ID of the lesson to remove <br> <br>
        <input type="submit" value="Submit" />
</form>
@endsection	
