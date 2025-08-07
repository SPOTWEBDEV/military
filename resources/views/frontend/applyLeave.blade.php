@extends('layouts.app')
@section('title')
    Leave Application
@endsection

@section('content')
    <main>
        <section class="apply-leave-section lc">

            <div class="container">
                <div class="head-text">
                    <div class="title">
                        <h1>APPLICANTS FORM</h1>
                        <p>Fill the form below</p>
                    </div>
                </div>

                <form  method="POST">
                    @csrf
                    <div class="cont">
                        <center>
                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong style="color: green">{{ session('success') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong style="color: red">{{ session('error') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
                        </center>
                        <header>
                            <h1>Applicant's Information</h1>
                        </header>
                        <div class="box">
                            <span>
                                <label>Applicant's First Name</label>
                                <input name="firstname" type="text">
                                @error('firstname')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            <span>
                                <label>Applicant's Last Name</label>
                                <input name="lastname" type="text">
                                @error('lastname')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <label>Applicant's Email</label>
                                <input name="email" type="email">
                                @error('email')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            <span>
                                <label>Applicant's Phone Number</label>
                                <input name="number" type="text">
                                @error('number')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <label>Applicant's Gender</label>
                                <select name="gender" id="">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    {{-- <option value="other">Other</option> --}}
                                </select>
                                @error('gender')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            <span>
                                <label>Marital Status</label>
                                <select name="maritalStatus" id="">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Dating">Dating</option>
                                    {{-- <option value="other">Other</option> --}}
                                </select>
                                @error('maritalStatus')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <label>Relation</label>
                                <select name="relationship" id="">
                                    <option value="Siblings">Siblings</option>
                                    <option value="Spouse">Spouse</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Parent">Parent</option>
                                    {{-- <option value="other">Other</option> --}}
                                </select>
                                @error('relationship')
                                    {{ $mesaage }}
                                @enderror
                            </span>
                            <span>
                                <label>Country</label>
                                <input name="country" type="text">
                                @error('country')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <label>Language</label>
                                <input name="language" type="text">
                                @error('language')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            <span>
                                <label>Alternate Language</label>
                                <input name="alternateLanguage" type="text">
                                @error('alternateLanguage')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <br>
                        <h1>Soldier Information</h1>
                        <hr>
                        <div class="box">
                            <span>
                                <label>Soldier Name</label>
                                <input name="soldierName" type="text">
                                @error('soldierName')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            <span>
                                <label>Soldier Tracking Id</label>
                                <input name="soldierId" type="text">
                                @error('soldierId')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <label>Soldier Email</label>
                                <input name="soldierEmail" type="email">
                                @error('soldierEmail')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            <span>
                                <label>Soldier Current State</label>
                                <input name="currentState" type="text">
                                @error('currentState')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <label>Soldier Country</label>
                                <input name="soldierCountry" type="text">
                                @error('soldierCountry')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            <span>
                                <label>Leave Duration</label>
                                <input name="duration" type="text">
                                @error('duration')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>


                        <button>Submit Now</button>
                    </div>

                </form>

            </div>
        </section>

    </main>

@endsection
