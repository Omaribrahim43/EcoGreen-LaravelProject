{{-- @extends('frontend.layouts.master')

@section('content') --}}
<?php
use App\Controllers\UserController;
use App\Models\UserProject;
use App\Models\Project;
?>
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
    {{-- <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}"> --}}
    <style>
        body {
            background: #f5f5f5 !important;
            margin-top: 20px !important;
        }

        .ui-w-80 {
            width: 80px !important;
            height: auto !important;
        }

        .btn-default {
            border-color: rgba(24, 28, 33, 0.1) !important;
            background: rgba(0, 0, 0, 0) !important;
            color: #4E5155 !important;
        }

        label.btn {
            margin-bottom: 0 !important;
        }


        .btn-primary,
        .btn-outline-primary {
            border-color: #8dc63f !important;
            background-color: #8dc63f !important;
            color: white !important;
        }

        .btn {
            cursor: pointer !important;
        }

        .text-light {
            color: #babbbc !important;
        }

        .btn-facebook {
            border-color: rgba(0, 0, 0, 0) !important;
            background: #3B5998 !important;
            color: #fff !important;
        }

        .btn-instagram {
            border-color: rgba(0, 0, 0, 0) !important;
            background: #000 !important;
            color: #fff !important;
        }

        .card {
            background-clip: padding-box !important;
            box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012) !important;
        }

        .row-bordered {
            overflow: hidden !important;
        }

        .account-settings-fileinput {
            position: absolute !important;
            visibility: hidden !important;
            width: 1px !important;
            height: 1px !important;
            opacity: 0 !important;
        }

        .account-settings-links .list-group-item.active {
            font-weight: bold !important;
            color: #8dc63f;
        }

        html:not(.dark-style) .account-settings-links .list-group-item.active {
            background: transparent !important;
            color: #8dc63f !important;
        }

        .account-settings-multiselect~.select2-container {
            width: 100% !important;
        }

        .light-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem !important;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .light-style .account-settings-links .list-group-item.active {
            color: #4e5155 !important;
        }

        .material-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem !important;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .material-style .account-settings-links .list-group-item.active {
            color: #4e5155 !important;
        }

        .dark-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem !important;
            border-color: rgba(255, 255, 255, 0.03) !important;
        }

        .dark-style .account-settings-links .list-group-item.active {
            color: #fff !important;
        }

        .light-style .account-settings-links .list-group-item.active {
            color: #4E5155 !important;
        }

        .light-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .font-weight-bold {
            color: #8dc63f;
        }

        .card-body {
            padding: 20px 0 !important;
        }
    </style>
</head>

<body>
    {{-- @include('frontend.layouts.navbar') --}}
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
                            href="#account-info">Projects</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-social-links">Delete Account</a>

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <form action="{{ route('profile2/') }}" method="POST" enctype="multipart/form-data">
                                <?php
                                $user = auth()->user();
                                ?>
                                @csrf
                                <div class="card-body media align-items-center">
                                    @if (empty($user->image))
                                    <img src="http://127.0.0.1:8000/assets/img/1694585275.png"
                                        width="100" height="100" alt="User Image">
                                        @else
                                        <img src="{{ asset($user->image) }}" width="100" height="100" alt="">
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

                            <form action="{{ route('updatePassword') }}" method="POST" enctype="multipart/form-data">
                                <?php
                                $user = auth()->user();
                                ?>
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
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">
                                <?php
                                use App\Models\User;
                                $id = Auth::id();
                                $user = User::find($id); // Replace $userId with the user's ID
                                
                                $project_ids = UserProject::where('user_id', $id)->pluck('project_id');
                                $projects = Project::whereIn('id', $project_ids)->get();
                                
                                // $project_amount2 = 0;
                                // $project_amount = UserProject::where('user_id', $id)->pluck('donate_amount');
                                // foreach ($project_amount as $item) {
                                //     if ($item != 'null') {
                                //         $project_amount2 += $item;
                                //     }
                                // }
                                $amounts = [];
                                
                                for ($i = 1; $i <= count($projects); $i++) {
                                    $userProjects = UserProject::where('user_id', $id)
                                        ->where('project_id', $i)
                                        ->get();
                                    $projectAmount = 0;
                                    foreach ($userProjects as $item) {
                                        $projectAmount += $item->donate_amount;
                                    }
                                    $amounts[$i] = $projectAmount;
                                }
                                
                                ?>
                                <div class="container">
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
                                            @if (!$user->projects->isEmpty())
                                                <?php
                                                $i = 1;
                                                ?>
                                                @foreach ($projects as $project)
                                                    <tr>
                                                        <td>{{ $project->title }}</td>
                                                        <td>{{ $project->location }}</td>
                                                        <td>JD{{ $amounts[$i] }}</td>
                                                        <td>{{ $project->long_description }}</td>
                                                        <td>{{ $project->start_day }}</td>
                                                        <td>{{ $project->end_day }}</td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                @endforeach
                                        </tbody>
                                    </table>


                                    <a href="{{ route('certificate.download') }}" class="btn btn-primary">Download
                                        Participation Certificate</a>
                                    @endif

                                    {{-- <img src="{{ asset('assets/img/1694206033.jpg') }}" alt=""> --}}
                                </div>
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
