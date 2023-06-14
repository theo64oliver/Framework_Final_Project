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
			
			p {
			 font-size: 1.2em;
			}
                    </style>
                    <h1> You're logging as a Member </h1>
                    @php
                        session_start();
                        if(isset($_SESSION['sum']))
                        {
                            @endphp 
                            <p> My expenses: </p>
                            @php
                            echo $_SESSION['sum'];
                        }
                        else
                        {
                            @endphp
                            <p>To show the sum of all of your expenses please click this button:</p>
                            <a href="/member_process" class="button button_sub">My Expenses</a> 
                            @php
                        }
                        session_destroy();
                    @endphp
                    </br>
                    </br>
                    <p>Other actions :</p>
                    <form action="{{ route('classlist') }}">
		 	<button class="button button_sub">My Classes</button>
	      	    </form>
	      	    <form action="{{ route('checkin') }}">
		 	<button class="button button_sub">My History</button>
	      	    </form>
	      	    <form action="{{ route('request') }}">
		 	<button class="button button_sub">Request a Course</button>
	      	    </form>           

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
