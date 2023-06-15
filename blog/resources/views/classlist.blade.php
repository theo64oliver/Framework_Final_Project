@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <style>
                        table,
			td {
	   		 border: 1px solid #333;
	   		 width:1000px;
	   		 text-align : center;
	   		 vertical-align:top;
			}

			thead,
			tfoot {
	    		 background-color: #333;
	   		 color: #fff;
			}
			
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
                    <p> To show your registered class(es) please click this button: </p>
                    <form action="{{ route('list_class.init') }}" method="GET">
                        <button type="submit" class="button button_sub">SHOW</button> 
                    </form>
                    @php
                    session_start();
                    if(isset($_SESSION['Res1']))
                    {
                        @endphp
                        <h2> List of your private classes </h2>
                        <table>
                            <tr>
                                <th>Name of the Class</th>
                                <th>Start</th>
                                <th>Duration (in minutes)</th>
                            </tr>
                            @php
                            foreach($_SESSION['Res1'] as $i)
                            {
                                @endphp
                                <tr>
                                    <th>@php echo $i->name; @endphp</th>
                                    <th>@php echo $i->start; @endphp</th>
                                    <th>@php echo $i->duration; @endphp</th>
                                </tr>
                                @php
                            }
                        @endphp
                        </table>
                        <h2> List of your collective classes </h2>
                        <table>
                            <tr>
                                <th>Name of the Class</th>
                                <th>Start</th>
                                <th>Duration (in minutes)</th>
                                <th>Sport</th>
                            </tr>
                            @php
                            foreach($_SESSION['Res2'] as $i)
                            {
                                @endphp
                                <tr>
                                    <th>@php echo $i->name; @endphp</th>
                                    <th>@php echo $i->start; @endphp</th>
                                    <th>@php echo $i->duration; @endphp</th>
                                    <th>@php echo $i->sport_name; @endphp</th>
                                </tr>
                                @php
                            }
                            session_destroy();
                        @endphp
                        </table>
                        @php
                    }
                    @endphp
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
