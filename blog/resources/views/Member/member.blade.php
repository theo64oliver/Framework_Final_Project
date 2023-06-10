@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
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
                            <form action="{{ route('member.init') }}" method="GET">
                                <button type="submit" class="btn btn-primary">My Expenses</button> 
                            </form> 
                            @php
                        }
                        session_destroy();
                    @endphp
                    </br>
                    </br>
                    <a href="{{ route('classlist') }}">My Private Class</a>
                    <a href="{{ route('checkin') }}">My History</a>               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
