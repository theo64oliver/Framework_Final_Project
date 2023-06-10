@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p> To show your check-in history please press this button: </p>
                    <form action="{{ route('check_in.init') }}" method="GET">
                        <button type="submit" class="btn btn-primary">SHOW</button> 
                    </form>
                    @php
                    session_start();
                    if(isset($_SESSION['Res1']))
                    {
                        @endphp
                        <table>
                            <tr>
                                <th>Date Of Check-in</th>
                            </tr>
                            @php
                            $j = 0;
                            foreach($_SESSION['Res1'] as $i)
                            {
                                @endphp
                                <tr>
                                    <th>@php echo $i->check_in; @endphp</th>
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