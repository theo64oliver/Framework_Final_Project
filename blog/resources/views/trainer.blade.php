@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <style>
                        .button {
	  		 background-color: #FFC0CB; /* Green */
	  		 border: none;
			 color: white;
			 padding: 16px 32px;
			 text-align: center;
			 text-decoration: none;
			 display: inline-block;
			 font-size: 16px;
			 margin: 4px 2px;
			 transition-duration: 0.4s;
			 cursor: pointer;
			}
		 	.button_sub {
			  background-color: white; 
			  color: black; 
			  border: 2px solid #FFC0CB;
			}

			.button_sub:hover {
			  background-color: #FFC0CB;
			  color: white;
			}
                    </style>
                    <h1> You're logging as a Trainer</h1>
                    <form action="{{ route('machinelist') }}">
		 	<button class="button button_sub">My Machines</button>
	      	    </form>
	      	    <form action="{{ route('classlisttrainer') }}">
		 	<button class="button button_sub">My Classes</button>
	      	    </form>
              <form action="{{ route('createform') }}">
		 	<button class="button button_sub">Create a new class</button>
	      	    </form>
              <form action="{{ route('delform') }}">
		 	<button class="button button_sub">Delete an existing class</button>
	      	    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
