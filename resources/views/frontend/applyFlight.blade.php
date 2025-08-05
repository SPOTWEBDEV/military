@extends('layouts.app')
@section('title')
    Book Flight
@endsection

@section('content')
    <main>
        <section class="apply-leave-section lc">

            <div class="container">
                <div class="head-text">
                    <div class="title">
                        <h1>FLIGHT BOOKING FORM</h1>
                        <p>Fill the form below</p>
                    </div>
                </div>

                <form action="{{ route('flight.store') }}" method="post">
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
                            <h1>Booker's Information</h1>
                        </header>
                        <div class="box">
                            <span>
                                <label>Booker's Name</label>
                                <input name="name" type="text">
                                @error('name')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            <span>
                                <label>Booker's Number</label>
                                <input name="number" type="text">
                                @error('number')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <label>Booker's Email</label>
                                <input name="email" type="email">
                                @error('email')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                           
                        </div>
                        <br>
                        <h1>Soldiers Information</h1>
                        <hr>
                        <div class="box">
                            <span>
                                <label>Soldier's Full Name</label>
                                <input name="soldierName" type="text">
                                @error('soldierName')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            <span>
                                <label>Soldier's Id</label>
                                <input name="soldierId" type="text">
                                @error('soldierId')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <label>Soldier's Email</label>
                                <input name="soldierEmail" type="email">
                                @error('soldierEmail')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            
                            <span>
                                <label>Soldier's Current State</label>
                                <input name="currentState" type="text">
                                @error('currentState')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            
                        </div>
                        <div class="box">
                            
                            <span>
                                <label>Country</label>
                                <input name="country" type="text">
                                @error('country')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <br>
                        <h1>Transit Details</h1>
                        <hr>
                        <div class="box">
                            <span>
                                <label>Select Transit Type</label>
                                <select name="transitType" id="">
                                    <option value="One Way Trip">One Way Trip</option>
                                    <option value="Round Trip">Round Trip</option>
                                    
                                    {{-- <option value="other">Other</option> --}}
                                </select>
                                @error('transitType')
                                    {{ $mesaage }}
                                @enderror
                            </span>
                            <span>
                                <label>State</label>
                                <input name="state" type="text">
                                @error('state')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        
                        <div class="box">
                            <span>
                                <label>Destination Country</label>
                                <input name="destinationCountry" type="text">
                                @error('destinationCountry')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            <span>
                                <label>Date Of Departure</label>
                                <input name="endOfDeparture" type="date">
                                @error('endOfDeparture')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <label>Select Flight Class</label>
                                <select name="flightClass" id="">
                                    <option value="Economy Class">Economy Class</option>
                                    <option value="Premium Economy Class">Premium Economy Class</option>
                                    <option value="Business Class">Business Class</option>
                                    <option value="First Class">First Class</option>
                                    
                                    {{-- <option value="other">Other</option> --}}
                                </select>
                                @error('flightClass')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            <span>
                                <label>Number Of Adults</label>
                                <select name="numberOfAdults" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    
                                    {{-- <option value="other">Other</option> --}}
                                </select>
                                @error('numberOfAdults')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                        </div>
                        <div class="box">
                            <span>
                                <label>Number Of Children</label>
                                <select name="numberOfChildren" id="">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="None">None</option>
                                    
                                    {{-- <option value="other">Other</option> --}}
                                </select>
                                @error('numberOfChildren')
                                    <p style="color: red;">{{ $message }}</p>
                                @enderror
                            </span>
                            
                        </div>


                        <button>Book Now</button>
                    </div>

                </form>

            </div>
        </section>

    </main>

@endsection
