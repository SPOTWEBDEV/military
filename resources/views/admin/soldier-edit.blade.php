@extends('layouts.admin')
@php
use App\Models\User;
@endphp
@section('title')
Soldier Profile
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


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header mt-3 p-6">
                    <h3>Edit Soldier Profile
                        <a href="{{ route('admin.soldiers') }}" class="btn-lg btn btn-primary float-end">Back</a>
                    </h3>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('admin.soldier.update', $soldier->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')




                                <div class="form-group mt-4">
                                    <label for="exampleInputName1">First Name</label>
                                    <input type="text" name="firstname" class="form-control text-white"
                                        value="{{ $soldier->firstname }}" placeholder="">
                                    @error('firstname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mt-4">
                                    <label for="exampleInputName1">Last Name</label>
                                    <input type="text" name="lastname" value="{{ $soldier->lastname }}" class="form-control text-white"
                                        id="" placeholder="">
                                    @error('lastname')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="exampleInputName1">House Address</label>
                                    <input name="address" value="{{ $soldier->address }}" type="text" class="form-control text-white"
                                        id="exampleInputName1" placeholder="">
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mt-4">
                                    <label for="exampleInputName1">Country of Origin</label>
                                    <input name="country" value="{{ $soldier->country }}" type="text" class="form-control text-white"
                                        id="exampleInputName1" placeholder="">
                                    @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="exampleInputName1">Age</label>
                                    <input name="age" value="{{ $soldier->age }}" type="text" class="form-control text-white"
                                        id="exampleInputName1" placeholder="">
                                    @error('age')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mt-4">
                                    <label for="image">Upload Soldier Image</label>
                                    <input type="file" name="image" class="form-control text-white" accept="image/*">

                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="" class="form-label">Marital Status</label><br>
                                    <select class="form-control text-white" name="maritalStatus" id="pay_method"
                                        style="color: #111;">
                                        <option value="Single" {{ $soldier->maritalStatus == "" ? 'selected' : 'Single' }}>Single
                                        </option>
                                        <option value="In A Relationship" {{ $soldier->maritalStatus == "In A Relationship" ? 'selected' : '' }}>
                                            In A Relationship</option>
                                        <option value="Married" {{ $soldier->maritalStatus == "" ? 'Married' : '' }}>
                                            Married</option>
                                    </select>
                                    @error('maritalStatus')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="exampleInputName1">Blood Group</label>
                                    <input name="bloodGroup" value="{{ $soldier->bloodGroup }}" type="text"
                                        class="form-control text-white" id="exampleInputName1" placeholder="">
                                    @error('bloodGroup')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="exampleInputName1"> Monthly Salary</label>
                                    <input name="salary" value="{{ $soldier->salary }}" type="text" class="form-control text-white"
                                        id="exampleInputName1" placeholder="">
                                    @error('salary')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="exampleInputName1">Annual Salary</label>
                                    <input name="annualSalary" value="{{ $soldier->annualSalary }}" type="text"
                                        class="form-control text-white" id="exampleInputName1" placeholder="">
                                    @error('annualSalary')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="exampleInputName1">Country Of Deployment</label>
                                    <input name="deployment" value="{{ $soldier->deployment }}" type="text"
                                        class="form-control text-white" id="exampleInputName1" placeholder="">
                                    @error('deployment')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="exampleInputName1">Military Rank</label>
                                    <input name="rank" value="{{ $soldier->rank }}" type="text"
                                        class="form-control text-white" id="exampleInputName1" placeholder="">
                                    @error('rank')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4">
                                    <label for="" class="form-label">Sexual Orientation</label><br>
                                    <select class="form-control text-white" name="sexualOrientation" id="pay_method"
                                        style="color: #111;">
                                        <option {{ $soldier->sexualOrientation == "Straight" ? 'selected' : '' }} value="Straight">Straight</option>
                                        <option {{ $soldier->sexualOrientation == "Lesbian" ? 'selected' : '' }} value="Lesbian">Lesbian</option>
                                        <option {{ $soldier->sexualOrientation == "Bisexual" ? 'selected' : '' }} value="Bisexual">Bisexual</option>
                                        <!-- <option {{ $soldier->sexualOrientation == "Pansexual" ? 'selected' : '' }} value="Pansexual">Pansexual</option>
                                            <option {{ $soldier->sexualOrientation == "Demisexual" ? 'selected' : '' }} value="Demisexual">Demisexual</option>
                                            <option {{ $soldier->sexualOrientation == "Gynesexual" ? 'selected' : '' }} value="Gynesexual">Gynesexual</option>
                                            <option {{ $soldier->sexualOrientation == "Androsexual" ? 'selected' : '' }} value="Androsexual">Androsexual</option> -->

                                    </select>
                                    @error('sexualOrientation')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mt-4">
                                    <label for="" class="form-label">Gender</label><br>
                                    <select class="form-control text-white" name="gender" id="pay_method"
                                        style="color: #111;">
                                        <option {{ $soldier->gender == "Male" ? "selected" : '' }} value="Male">Male</option>
                                        <option {{ $soldier->gender == "Female" ? "selected" : '' }} value="Female">Female</option>


                                    </select>
                                    @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mt-4">
                                    <label for="exampleInputName1">Religion</label>
                                    <input name="religion" value="{{ $soldier->religion }}" type="text"
                                        class="form-control text-white" id="exampleInputName1" placeholder="">
                                    @error('religion')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>






                                <div class="mt-4 float-end">
                                    <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
                                </div>
                            </form>




                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection