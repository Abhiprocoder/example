<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
            @if (session()->has('name'))
            {{session()->get('name')}}
            @else
            Brand
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/register')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/customer/view')}}">Customer</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container m-5">
        <h3 class="text-center text-primary">
            {{$title}}
        </h3>
        <a href="{{route('custome.create')}}">
            <button class="btn btn-primary d-inline-block m-2 float-right">Add</button>
        </a>
        <a href="{{url('customer/trash')}}">
            <button class="btn btn-danger d-inline-block m-2 float-right">Go Trash</button>
        </a>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer as $data )
                    <tr class="">
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>
                            @if ($data->gender == "M")
                                Male
                                @elseif($data->gender == "F")
                                Female
                                @else
                                Other
                            @endif
                        </td>
                        <td>{{$data->dob}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->state}}</td>
                        <td>{{$data->country}}</td>
                        <td>
                            @if ($data->status == "1")
                                <a href="">
                                    <span class="btn btn-success">Active</span>
                                </a>
                                @else
                                <a href="">
                                    <span class="btn btn-danger">Inactive</span>
                                </a>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('customer.trash',['id' => $data->customer_id ])}}">
                                <button class="btn btn-danger">Trash</button>
                            </a>
                            <a href="{{route('custome.edit',['id' => $data->customer_id ])}}">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
