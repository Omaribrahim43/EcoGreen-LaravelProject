{{-- @extends('frontend.layouts.master')

@section('content') --}}
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+J+R1AAw1TpLOvcl5W5+4n5sH9tu08f1+d85ftnjdG3FwxjD" crossorigin="anonymous"> --}}

    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('frontend/css/profile.css') }}">
</head>

<style>
    .progress-bar {
        height: 30px;
        text-align: center;
        line-height: 30px;
        color: white;
    }
</style>

<body>
    {{-- @include('frontend.layouts.navbar') --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"
        style="background-color: black !important; color:white !important">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('frontend/images/logo/green_hands_logo-removebg-preview.png') }}" alt="Logo"
                    style="height: 75px; width: 124px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main_menu">
                <ul class="navbar-nav ml-auto" style="color:white !important ;margin-right: 32%;">
                    <li class="nav-item" style="color:white !important">
                        <a class="nav-link" href="{{ route('index') }}" style="color:white !important">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <a class="dropdown-item" href="{{ route('All.projects') }}">All Project</a>
                            <a class="dropdown-item" href="{{ route('All.projects', 1) }}">Financial Donation</a>
                            <a class="dropdown-item" href="{{ route('All.projects', 2) }}">Item Donation</a>
                            <a class="dropdown-item" href="{{ route('All.projects', 3) }}">Service Donation</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('show.contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                <div class="dropdown-menu" aria-labelledby="accountDropdown">
                                    <a class="dropdown-item" href="{{ route('profile2.profile.index') }}">Profile</a>
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                    </form>
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" id="loginbnt" href="{{ route('login') }}">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" id="registerbnt" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <div class="container light-style flex-grow-1 container-p-y">

        <h4 class="font-weight-bold py-3 mb-4">
            Account settings
        </h4>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action" href="{{ route('index') }}">Home Page</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#donationProject">Financial Projects</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#ItemsProjects">All
                            Projects</a>
                        {{-- <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#servicesProjects">Services Projects</a> --}}
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Delete Account</a>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <form action="{{ route('profile2/') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body media align-items-center">
                                    @if (empty($user->image))
                                        <img src="http://127.0.0.1:8000/assets/img/1694585275.png" width="100"
                                            height="100" alt="User Image">
                                    @else
                                        <img src="{{ asset($user->image) }}" width="100" height="100"
                                            alt="">
                                    @endif

                                    <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary">
                                            Upload new photo
                                            <input type="file" name="image" class="account-settings-fileinput">
                                        </label> &nbsp;
                                    </div>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control mb-1" name="username"
                                            value="{{ $user->username }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $user->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="text" class="form-control mb-1" name="email"
                                            value="{{ $user->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">phone</label>
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ $user->phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address"
                                            value="{{ $user->address }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>

                            <form action="{{ route('updatePassword') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">


                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" name="oldPassword" class="form-control">
                                    @error('oldPassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Example for the "newPassword" field -->
                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" name="newPassword" class="form-control">
                                    @error('newPassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Example for the "confirmPassword" field -->
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" name="confirmPassword" class="form-control">
                                    @error('confirmPassword')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="donationProject">
                            <div class="card-body pb-2">
                                <div class="container">
                                    <!-- resources/views/projects/index.blade.php -->

                                    <!-- resources/views/projects/index.blade.php -->

                                    @if (!$projects->isEmpty())
                                        <a href="{{ route('certificate.download') }}" class="btn btn-primary"
                                            style="margin-bottom: 20px; float:right">Download Certificate</a>
                                    @endif
                                    <br>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Location</th>
                                                <th>donate_amount</th>
                                                <th>Description</th>
                                                <th>Start Day</th>
                                                <th>End Day</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($projects as $project)
                                                @if (isset($amounts[$project->id]) && $amounts[$project->id] > 0)
                                                    <tr>
                                                        <td>{{ $project->title }}</td>
                                                        <td>{{ $project->location }}</td>
                                                        <td>JD{{ $amounts[$project->id] }}</td>
                                                        <td>{{ $project->long_description }}</td>
                                                        <td>{{ $project->start_day }}</td>
                                                        <td>{{ $project->end_day }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>



                                {{-- <img src="{{ asset('assets/img/1694206033.jpg') }}" alt=""> --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ItemsProjects">
                            <div class="card-body pb-2">
                                <div class="container">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Location</th>
                                                {{-- <th>donate_amount</th> --}}
                                                <th>Description</th>
                                                <th>Start Day</th>
                                                <th>End Day</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($projects as $project)
                                                @if (!empty($items[$project->id]))
                                                    <tr>
                                                        <td>{{ $project->title }}</td>
                                                        <td>{{ $project->location }}</td>
                                                        {{-- <td>
                                                            @foreach ($items[$project->id] as $item)
                                                                {{ $item }}<br>
                                                            @endforeach
                                                        </td> --}}
                                                        <td>{{ $project->long_description }}</td>
                                                        <td>{{ $project->start_day }}</td>
                                                        <td>{{ $project->end_day }}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>



                                    </table>
                                </div>


                                {{-- 
                                @if (!$projects->isEmpty())
                                    <a href="{{ route('certificate.download') }}" class="btn btn-primary">Download
                                        Participation Certificate</a>
                                @endif --}}


                                {{-- <img src="{{ asset('assets/img/1694206033.jpg') }}" alt=""> --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="servicesProjects">
                            <div class="card-body pb-2">
                                <div class="container">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Location</th>
                                                {{-- <th>donate_amount</th> --}}
                                                <th>Description</th>
                                                <th>Start Day</th>
                                                <th>End Day</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($projects as $project)
                                                <tr>
                                                    <td>{{ $project->title }}</td>
                                                    <td>{{ $project->location }}</td>
                                                    {{-- <td>
                                                        @foreach ($shifts[$project->id] as $item)
                                                            {{ $item }}<br>
                                                        @endforeach
                                                    </td> --}}
                                                    <td>{{ $project->long_description }}</td>
                                                    <td>{{ $project->start_day }}</td>
                                                    <td>{{ $project->end_day }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>



                                @if (!$projects->isEmpty())
                                    <a href="{{ route('certificate.download') }}" class="btn btn-primary">Download
                                        Participation Certificate</a>
                                @endif


                                {{-- <img src="{{ asset('assets/img/1694206033.jpg') }}" alt=""> --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-social-links">
                            <form method="POST" action="{{ route('user.delete') }}">
                                @csrf
                                @method('DELETE')
                                <p>Are you sure you want to delete your account? This action cannot be undone.</p>
                                <button type="submit" class="btn btn-danger">Delete Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- @include('frontend.layouts.footer') --}}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        // Check if there's a previously selected tab in localStorage
        var selectedTab = localStorage.getItem('selectedTab');

        // If a tab was previously selected, activate it
        if (selectedTab) {
            $('.list-group-item[href="' + selectedTab + '"]').tab('show');
        }

        // Listen for tab change events and store the selected tab in localStorage
        $('.list-group-item').on('shown.bs.tab', function(e) {
            localStorage.setItem('selectedTab', $(e.target).attr('href'));
        });
    </script>

</body>

</html>

{{-- @endsection --}}
