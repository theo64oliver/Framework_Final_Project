@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @php
                        session_start();
                        if(isset($_SESSION['ID']))
                        {
                            echo $_SESSION['ID'];
                        }
                        else
                        {
                            echo "no";
                        }
                        session_destroy();
                    @endphp
                    <form action="{{ route('member.init') }}" method="GET">
                        <button type="submit" class="btn btn-primary">Submit</button> 
                    </form> 
                    <a href="{{ route('classlist') }}"> link </a>             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
