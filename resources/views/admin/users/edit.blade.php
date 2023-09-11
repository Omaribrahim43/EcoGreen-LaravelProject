@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Components</a></div>
                    <div class="breadcrumb-item">Table</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit User</h4>
                            </div>
                            <div class="card-body p-0">
                                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Preview</label>
                                                <br>
                                                <img width="200px" src="{{ asset($user->image) }}">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label>Image</label>
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="name">name</label>
                                                    <input type="name" name="name" value="{{ $user->name }}"
                                                        class="form-control" id="inputEmail4" placeholder="Name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" value="{{ $user->email }}"
                                                        class="form-control" id="inputEmail4" placeholder="email">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="tel" name="phone" value="{{ $user->phone }}"
                                                            class="form-control" id="inputAddress"
                                                            placeholder="EX: 077 777 7777">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
