@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <p> To show all the machine availble inside gym inshape please clik this button: </p>
                    <form action="{{ route('list_machine.init') }}" method="GET">
                        <button type="submit" class="btn btn-primary">SHOW</button> 
                    </form>
                    @php
                    session_start();
                    if(isset($_SESSION['Res1']))
                    {
                        @endphp
                        <table>
                            <tr>
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
                                <tr>
                                    <th>@php echo $i->name; @endphp</th>
                                    <th>@php echo $i->supplier; @endphp</th>
                                    <th>@php echo $i->price; @endphp</th>
                                    <th>@php echo $i->last_maintenance; @endphp</th>
                                    <th>@php echo $i->date_of_purchase; @endphp</th>
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