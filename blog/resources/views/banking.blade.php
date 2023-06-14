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
                    <h1> Your Account </h1>
                    @php
                        session_start();
                        if(isset($_SESSION['sum']))
                        {
                            echo $_SESSION['sum'];
                        }
                        else
                        {
                            @endphp
                            <p style="color: red">Error getting your account information. Please retry</p>
                            @php
                        }
                        session_destroy();
                    @endphp
                    </br>
                    </br>
                    <form action="{{ route('trainer') }}">
                        <button class="button button_sub">Return</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
