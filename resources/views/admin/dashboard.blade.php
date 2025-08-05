@extends('layouts.admin')
@php
    use App\Models\User;
@endphp
@section('title')
    Dashboard
@endsection
@section('adminContent')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                        <div class="row align-items-center">
                            <div class="col-4 col-sm-3 col-xl-2">
                                <img src="{{ asset('admin/assets/images/dashboard/Group126@2x.png') }}"
                                    class="gradient-corona-img img-fluid" alt="">
                            </div>
                            <div class="col-5 col-sm-7 col-xl-8 p-0">
                                <h4 class="mb-1 mb-sm-0">Welcome to your Admin Dashboard</h4>
                                <p class="mb-0 font-weight-normal d-none d-sm-block">You can now manage your website details
                                    from here!</p>
                            </div>
                            {{-- <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                <span>
                                    <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank"
                                        class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                                </span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Soldiers Profiles Created
                            <div class="float-end">
                                <a href="{{ route('admin.soldierProfile') }}"
                                    class="btn btn-primary text-decoration-none">Create
                                </a>
                            </div>
                        </h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th> Soldier Name </th>
                                        <th> Tracking Id </th>
                                        <th> Address </th>
                                        <th> Country </th>
                                        <th> Age </th>
                                        <th> Marital Status </th>
                                        <th> Blood Group </th>
                                        <th> Salary </th>
                                        <th> Annual Salary </th>
                                        <th> Deployment Country </th>
                                        <th> Rank </th>
                                        <th> Sexual Orientation </th>
                                        <th> Gender </th>
                                        <th> Religion </th>

                                        <th> Date </th>

                                        <th> Action </th>
                                        <th> Delete </th>
                                    </tr>
                                <tbody>
                                    @forelse ($soldiers as $soldier)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>



                                                <img src="{{ asset('user-img.png') }}" alt="image" />
                                                {{-- <i class="mdi mdi-account-me"></i> --}}
                                                <span
                                                    class="ps-2">{{ $soldier->firstname . ' ' . $soldier->lastname }}</span>
                                            </td>
                                            <td>{{ $soldier->soldier_id }}</td>
                                            <td>{{ $soldier->address }}</td>
                                            <td>{{ $soldier->country }}</td>
                                            <td>{{ $soldier->age }}</td>
                                            <td>{{ $soldier->maritalStatus }}</td>
                                            <td>{{ $soldier->bloodGroup }}</td>
                                            <td>{{ $soldier->salary }}</td>
                                            <td>{{ $soldier->annualSalary }}</td>
                                            <td>{{ $soldier->deployment }}</td>
                                            <td>{{ $soldier->rank }}</td>
                                            <td>{{ $soldier->sexualOrientation }}</td>
                                            <td>{{ $soldier->gender }}</td>
                                            <td>{{ $soldier->religion }}</td>

                                            {{-- <td>{{ $soldier->status == '0' ? 'Pending' : ($soldier->status == '1' ? 'Approved' : 'Declined') }}</td> --}}
                                            <td>{{ Carbon\Carbon::parse($soldier->created_at)->format('F j, Y, g:i A') }}
                                            </td>

                                            <td class="">
                                                <a href="{{ route('admin.soldier.edit', $soldier->id) }}">
                                                    <button style="margin-right: 8px;" class="btn btn-primary">Edit</button>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.soldier.delete', $soldier->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this Soldier Profile?')">
                                                    @csrf
                                                    {{-- @method('patch') --}}
                                                    <button class="badge badge-outline-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        {{-- Handle case where there are no leaves --}}
                                        <tr>
                                            <td colspan="8">No leaves found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="py-2 float-end" style="margin-right: 20px;">
                            {{ $soldiers->links('pagination::bootstrap-5') }}</div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Leaves Applications Requested
                            <div class="float-end">
                                <a href="{{ route('admin.leaves') }}" class="btn btn-primary text-decoration-none">View
                                    All</a>
                            </div>
                        </h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th> Client Name </th>
                                        <th> Email </th>
                                        <th> Phone Number </th>
                                        <th> Gender </th>
                                        <th> Marital Status </th>
                                        <th> Relationship </th>
                                        <th> Country </th>
                                        <th> Language </th>
                                        <th> Alternate Language </th>
                                        <th> Soldier Name </th>
                                        <th> Soldier Id </th>
                                        <th> Soldier Email </th>
                                        <th> Soldier State </th>
                                        <th> Soldier Country </th>
                                        <th> Leave Duration </th>
                                        <th> Date </th>
                                        <th> Send Email </th>
                                        {{-- <th> Action </th> --}}
                                        <th> Delete </th>
                                    </tr>
                                <tbody>
                                    @forelse ($leaves as $leave)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>



                                                <img src="{{ asset('user-img.png') }}" alt="image" />
                                                {{-- <i class="mdi mdi-account-me"></i> --}}
                                                <span
                                                    class="ps-2">{{ $leave->firstname . ' ' . $leave->lastname }}</span>
                                            </td>
                                            <td>{{ $leave->email }}</td>
                                            <td>{{ $leave->number }}</td>
                                            <td>{{ $leave->gender }}</td>
                                            <td>{{ $leave->maritalStatus }}</td>
                                            <td>{{ $leave->relationship }}</td>
                                            <td>{{ $leave->country }}</td>
                                            <td>{{ $leave->language }}</td>
                                            <td>{{ $leave->alternateLanguage ?? 'No Alternate Language' }}</td>
                                            <td>{{ $leave->soldierName }}</td>
                                            <td>{{ $leave->soldierId }}</td>
                                            <td>{{ $leave->soldierEmail }}</td>
                                            <td>{{ $leave->currentState }}</td>
                                            <td>{{ $leave->country }}</td>
                                            <td>{{ $leave->duration }}</td>

                                            {{-- <td>{{ $leave->status == '0' ? 'Pending' : ($leave->status == '1' ? 'Approved' : 'Declined') }}</td> --}}
                                            <td>{{ Carbon\Carbon::parse($leave->created_at)->format('F j, Y, g:i A') }}
                                            </td>
                                            <td class="">
                                                <a href="{{ route('admin.leaveEmail', $leave->id) }}">
                                                    <button style="margin-right: 8px;"
                                                        class="badge badge-outline-success">Send Email</button>
                                                </a>

                                            </td>
                                            {{-- <td class="">
                                                <button style="margin-right: 8px;" class="btn btn-primary">Edit</button>
                                            </td> --}}
                                            <td>
                                                <form action="{{ route('leave.delete', $leave->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this Leave Application?')">
                                                    @csrf
                                                    {{-- @method('patch') --}}
                                                    <button class="badge badge-outline-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        {{-- Handle case where there are no leaves --}}
                                        <tr>
                                            <td colspan="8">No leaves found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="py-2 float-end" style="margin-right: 20px;">
                            {{ $leaves->links('pagination::bootstrap-5') }}</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Flights Application Requested
                            <div class="float-end">
                                <a href="{{ route('admin.flights') }}" class="btn btn-primary text-decoration-none">View
                                    All</a>
                            </div>
                        </h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th> Client Name </th>
                                        <th> Email </th>
                                        <th> Phone Number </th>
                                        <th> Gender </th>
                                        <th> Marital Status </th>
                                        <th> Relationship </th>
                                        <th> Country </th>
                                        <th> Language </th>
                                        <th> Alternate Language </th>
                                        <th> Soldier Name </th>
                                        <th> Soldier Id </th>
                                        <th> Soldier Email </th>
                                        <th> Soldier State </th>
                                        <th> Soldier Country </th>
                                        <th> flight Duration </th>
                                        <th> Date </th>
                                        <th> Send Email </th>
                                        {{-- <th> Action </th> --}}
                                        <th> Delete </th>
                                    </tr>
                                <tbody>
                                    @forelse ($flights as $flight)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>



                                                <img src="{{ asset('user-img.png') }}" alt="image" />
                                                {{-- <i class="mdi mdi-account-me"></i> --}}
                                                <span
                                                    class="ps-2">{{ $flight->firstname . ' ' . $flight->lastname }}</span>
                                            </td>
                                            <td>{{ $flight->email }}</td>
                                            <td>{{ $flight->number }}</td>
                                            <td>{{ $flight->gender }}</td>
                                            <td>{{ $flight->maritalStatus }}</td>
                                            <td>{{ $flight->relationship }}</td>
                                            <td>{{ $flight->country }}</td>
                                            <td>{{ $flight->language }}</td>
                                            <td>{{ $flight->alternateLanguage ?? 'No Alternate Language' }}</td>
                                            <td>{{ $flight->soldierName }}</td>
                                            <td>{{ $flight->soldierId }}</td>
                                            <td>{{ $flight->soldierEmail }}</td>
                                            <td>{{ $flight->currentState }}</td>
                                            <td>{{ $flight->country }}</td>
                                            <td>{{ $flight->duration }}</td>

                                            {{-- <td>{{ $flight->status == '0' ? 'Pending' : ($flight->status == '1' ? 'Approved' : 'Declined') }}</td> --}}
                                            <td>{{ Carbon\Carbon::parse($flight->created_at)->format('F j, Y, g:i A') }}
                                            </td>
                                            <td class="">
                                                <a href="{{ route('admin.flightEmail', $flight->id) }}">

                                                    <button style="margin-right: 8px;"
                                                        class="badge badge-outline-success">Send Email</button>
                                                </a>

                                            </td>
                                            {{-- <td class="">
                                                <button style="margin-right: 8px;" class="btn btn-primary">Edit</button>
                                            </td> --}}
                                            <td>
                                                <form action="{{ route('flight.delete', $flight->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this Flight Booked?')">
                                                    @csrf
                                                    @method('patch')
                                                    <button class="badge badge-outline-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        {{-- Handle case where there are no flights --}}
                                        <tr>
                                            <td colspan="8">No flights found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="py-2 float-end" style="margin-right: 20px;">
                            {{ $flights->links('pagination::bootstrap-5') }}</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
