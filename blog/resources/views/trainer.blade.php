@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1> You're logging as a Trainer</h1>
                    <a href="{{ route('machinelist') }}">My Machines</a>
                    </br>
                    <a href="{{ route('classlisttrainer') }}">My Classes</a>
                    </br>
                    <a href="{{ route('createform') }}">Create a new class</a>
                    </br>
                    <a href="{{ route('delform') }}">Delete a class</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
