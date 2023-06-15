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
                    <p> To show all the machine availble inside gym inshape please clik this button: </p>
                    <form action="{{ route('list_machine.init') }}" method="GET">
                        <button type="submit" class="button button_sub">SHOW</button> 
                    </form>
                    @php
                    session_start();
                    if(isset($_SESSION['Res1']))
                    {
                        @endphp
                        <table>
                            <tr class="tab_title">
                                <th>Name</th>
                                <th>Supplier</th>
                                <th>Price</th>
                                <th>Last Maintenance</th>
                                <th>Date of Purchase</th>
                            </tr>
                            @php
                            foreach($_SESSION['Res1'] as $i)
                            {
                                @endphp
                                <tr class="tab_content">
                                    <td>@php echo $i->name; @endphp</td>
                                    <td>@php echo $i->supplier; @endphp</td>
                                    <td>@php echo $i->price; @endphp</td>
                                    <td>@php echo $i->last_maintenance; @endphp</td>
                                    <td>@php echo $i->date_of_purchace; @endphp</td>
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
