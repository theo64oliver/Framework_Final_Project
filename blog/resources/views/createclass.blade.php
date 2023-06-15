@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="pull-left">
            <h2>Create Collective Class</h2>
        </div>
        <div class="pull-right">
            <a button="btn btn-primary" href="{{ route('trainer') }}"> Back</a>
        </div>
    </div>
</div>




<form method="post" action="/createclass">
        @csrf
		<input type="text" name="Name" id="Name" value="Name"/><br><br>
		<input type="Date" name="Start" id="Start" value ="Start"/> Choose a Date <br> <br>
		<input type="number" name="Duration" id="Duration" value=0 /> Duration (in minute) <br> <br>
        <input type="number" name="Nbpart" id="Nbpart" value=0 /> Number of participants<br> <br>
		<input type="text" name="Sport_Name" id="Sport_Name" /> Sport Name <br> <br>
        <input type="text" name="Machine" id="Machine" /> Machines used<br> <br>
		<input type="submit" value="Submit" />
</form>
