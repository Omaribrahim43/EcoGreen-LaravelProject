@extends('admin.layouts.master')

@section('content')
    <!-- Main Content -->

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $project->title }}</h1>

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
                                <h4>Project Details</h4>
                            </div>
                            <div class="card-body p-0">
                                <div class="col-12 col-sm-12 col-lg-12">
                                    <div class="card profile-widget">
                                        <div class="profile-widget-header">
                                            <img alt="image" src="{{ $project->image }}"
                                                class="rounded-circle profile-widget-picture" style="height: 100px">
                                            <div class="profile-widget-items">
                                                {{-- <div class="profile-widget-item">
                                                    <div class="profile-widget-item-label">Required Items</div>
                                                    <div class="profile-widget-item-value">{{ $project->budget }}</div>
                                                </div>
                                                <div class="profile-widget-item"> --}}
                                                   

                                                     {{-- @php
                                                        $totalDonationAmount = 0; // Initialize the total donation amount
                                                    @endphp
                                                    @foreach ($userProject as $userProjects)
                                                        @if ($userProjects->project_id == $project->id)
                                                            @php
                                                                $totalDonationAmount += $userProjects->donate_amount; // Add the donation amount to the total
                                                            @endphp
                                                        @endif
                                                    @endforeach

                                                    {{-- Replace $project with the appropriate project instance --}}
                                                    {{-- <div class="profile-widget-item-label">Current Amount</div>
                                                    <div class="profile-widget-item-value">{{ $totalDonationAmount }}</div> --}} 
                                                    

                                                    




                                                    {{-- @if ($project->UserProject)
                        
                        <div class="profile-widget-item-value">{{ $project->UserProject->donate_amount }}</div>
                        @endif --}}
                                                {{-- </div> --}}
                                                {{-- <div class="profile-widget-item">
                                                    <div class="profile-widget-item-label">Following</div>
                                                    <div class="profile-widget-item-value">2,1K</div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="profile-widget-description pb-0">
                                            <div class="profile-widget-name">Location :<div
                                                    class="text-muted d-inline font-weight-normal">
                                                     {{ $project->location }}
                                                </div>
                                            </div>
                                            <div class="profile-widget-name">Date :<div
                                                    class="text-muted d-inline font-weight-normal">
                                                    {{ $project->start_day }}<div class="d-inline" style="color:#6c757d ; font-weight:bold " >To</div> {{ $project->end_day }}
                                                </div>
                                            </div>
                                            <div class="profile-widget-name">Time :<div
                                                    class="text-muted d-inline font-weight-normal">
                                                    {{ $project->volunteering_hours_start }}<div class="d-inline" style="color:#6c757d ; font-weight:bold " >To</div> {{ $project->volunteering_hours_end }}
                                                </div>
                                            </div>
                                            <p>{{ $project->long_description }}</p>
                                        </div>
                                       
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

         <section class="section">
           

            <div class="section-body">
                <div class="invoice">
                    <div class="invoice-print">
                        
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="section-title">Volunteers Details</div>
                                <p class="section-lead">All items here cannot be deleted.</p>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-md">
                                        <tr>
                                            {{-- <th data-width="40">#</th> --}}
                                            <th>Name</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Donate Item</th>
                                        </tr>
                                        @foreach ($userProject as $userProject)
                                          <tr>
                                                {{-- <td>{{ $user->id }}</td> --}}
                                                <td>{{$userProject->user->name}}</td>
                                                <td class="text-center">{{$userProject->user->email}}</td>
                                                <td class="text-center">{{$userProject->user->phone}}</td>
                                                <td class="text-center">{{$userProject->donate_item}}</td>
                                                </tr>  
                                                
                                        @endforeach
                                        


                                        
                                            

                                                

                                            
                                        



                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <hr>
                    {{-- <div class="text-md-right">
                        <div class="float-lg-left mb-lg-0 mb-3">
                            <button class="btn btn-primary btn-icon icon-left"><i class="fas fa-credit-card"></i> Process
                                Payment</button>
                            <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                        </div>
                        <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
                    </div> --}}
                </div>
            </div>
        </section>
    </div>


    

    {{-- <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Projects</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('projects.create') }}" class="btn btn-primary">+ Create</a>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                {{ $dataTable->table() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> --}}
@endsection
{{-- @push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush --}}
