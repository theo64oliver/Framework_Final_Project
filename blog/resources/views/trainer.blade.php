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
                    @php
                        session_start();
                        if(isset($_SESSION['sum']))
                        {
                            @endphp 
                            <p> Current amount inside the bank account: </p>
                            @php
                            echo $_SESSION['sum'];
                        }
                        else
                        {
                            @endphp
                            <a href = "{{ route('bank.init') }}" class="button button_sub">Banking Account</a>
                            @php
                        }
                        session_destroy();
                    @endphp

                    </br>
                    </br>
                    <p>Other actions :</p>
                    <a href="{{ route('machinelist') }}" class="button button_sub">My Machines</a>
                    </br>
                    <a href="{{ route('classlisttrainer') }}" class="button button_sub">My Classes</a>
                    </br>
                    <a href="{{ route('createform') }}" class="button button_sub">Create a new class</a>
                    </br>
                    <a href="{{ route('delform') }}" class="button button_sub">Delete an existing class</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
