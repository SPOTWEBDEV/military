@extends('layouts.app')
@section('title')
    Tacking Id
@endsection

@section('content')
    <main>
        <section class="track-mid-section lc">
            <div class="container">
                <div class="head-text">
                    <div class="title">
                        <h1>German Defense And Military Job Portal IDENTIFICATION</h1>
                        <p>Access profiles of military personnels</p>
                    </div>

                    <p>
                        <span>
                            This window allows you to access the profile of our troops stationed in various parts of
                            the world.
                            Each military officer can be identified with a DoD Identification Number (a unique
                            number, example:
                            1401700000), the DoD Identification Number can be used to query profile details of an
                            officer
                            (...we can only provide brief info about a soldier for security reasons best known to
                            us). The
                            German Defense And Military Job Portal Military Command has established this security measure to cub crimes
                            committed in the
                            name of the German Defense And Military Job Portal Military officers in general. Please be warned, ensure to verify
                            a soldier's profile before identifying such individual as a real German Defense And Military Job Portal.

                        </span>
                    </p>

                    <h4>German Defense And Military Job Portal Military Command - DoD
                        Germany</h4>
                </div>

                <div class="cont">
                    <h5>ID Verification</h5>
                    @if (session()->has('success'))
                    <strong style="color: green">{{ session('success') }}</strong>
                        
                    @endif
                    @if (session()->has('error'))
                    <strong style="color: red">{{ session('error') }}</strong>
                        
                    @endif
                    <form action="{{ route('frontend.trackId') }}" method="post"
                        style="display: flex; flex-direction:column; align-items:flex-start">
                        @csrf
                        <input type="text" name="trackingId" placeholder="Enter DoD Identification Number"
                            style="min-width: 300px;">
                        @error('trackingId')
                            <p style="color: red;">{{ $message }}</p>
                        @enderror
                        <br>
                        <button type="submit">Track Now</button>
                    </form>
                </div>
            </div>
        </section>

    </main>
@endsection
