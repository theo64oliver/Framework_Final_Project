@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p> To show your registered class(es) please click this button: </p>
                    <form action="{{ route('list_class.init') }}" method="GET">
                        <button type="submit" class="btn btn-primary">Submit</button> 
                    </form>
                    @php
                    session_start();
                    if(isset($_SESSION['Res1']))
                    {
                        @endphp
                        <table>
                            <tr>
                                <th>Name of the Class</th>
                                <th>Start</th>
                                <th>Duration (in minutes)</th>
                                <th>Sport</th>
                            </tr>
                            @php
                            $j = 0;
                            foreach($_SESSION['Res1'] as $i)
                            {
                                @endphp
                                <tr>
                                    <th>@php echo $i->name; @endphp</th>
                                    <th>@php echo $i->start; @endphp</th>
                                    <th>@php echo $i->duration; @endphp</th>
                                    <th>@php echo $_SESSION['Res2'][$j][0]->sport_name; @endphp</th>
                                </tr>
                                @php
                                $j = $j +1;
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