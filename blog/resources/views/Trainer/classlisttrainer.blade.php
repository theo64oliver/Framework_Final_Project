@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p> To show the class that you have to teach please click this button: </p>
                    <form action="{{ route('list_class_trainer.init') }}" method="GET">
                        <button type="submit" class="btn btn-primary">SHOW</button> 
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
                                <th>Name of the Member</th>
                                <th>Sport</th>
                            </tr>
                            @php
                            foreach($_SESSION['Res1'] as $i)
                            {
                                @endphp
                                <tr>
                                    <th>@php echo $i->name; @endphp</th>
                                    <th>@php echo $i->start; @endphp</th>
                                    <th>@php echo $i->duration; @endphp</th>
                                    <th>@php echo $i->member; @endphp</th>
                                    <th>@php echo $i->sport_name; @endphp</th>
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