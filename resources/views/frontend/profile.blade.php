<!-- <style>
    .profile-section header{
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        padding-bottom: 30px;
    }

    .profile-section header h1{
        font-size: 30px;
        color: var(--primary-color);
    }


    .profile-section .passport{
        width: 30%;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size:15px;
        border: 1px solid var(--black);
        text-align: center;
        cursor: pointer;
        padding: 0 20px;
        margin-bottom: 10px;
    }

    .profile-section form{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 50px;
        /* background: url('img/'); */
    }

    .profile-section form .cont{
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 60%;
        border: 1px solid var(--black);
        padding: 50px;
        background: url('img/white-paper4.jfif');
        background-position: cover;
    }

    .profile-section form .cont .box{
        display: flex;
        /* flex-direction: row-reverse; */
        gap: 30px;
        justify-content: space-between;
    }

    .profile-section form .cont .box .bxl{
        width: 65%;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .profile-section form .cont .box .bxc{
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 10px;
        justify-content: space-between;
    }

    .profile-section form .cont .box .bxc span{
        width: 100%;
    }

    .profile-section form .cont .box span{
        display: flex;
        flex-direction: column;
        gap: 5px;
        width: 50%;
    }

    .profile-section form .cont .box span label{
        color: var(--primary-color);
        font-size: 15px;
        font-weight: 600;
    }

    .profile-section form .cont .box span input{
        padding: 6px 10px;
    }

    .profile-section form .cont .box span select{
        padding: 6px 10px;
    }

    .profile-section form .cont button{
        padding: 15px 0;
        color: var(--white);
        background-color: var(--primary-color);
        border: none;
        margin-top: 20px;
        font-size: 17px;
    }

</style> -->


@extends('layouts.app')
@section('title')
Soldier Profile
@endsection

@section('content')
<main>
    <section class="profile-section lc">
        <div class="container">
            <div class="head-text">
                <div class="title">
                    <h1>PROFILE Informatiions</h1>
                    <p>Soldier profile informations</p>
                </div>
            </div>

            <form>
                <div class="cont">
                    <header>
                        <h1>German Defense And Military Job Portal Army</h1>
                        <h4>Personal Information</h4>
                    </header>
                    {{-- Profile Image --}}
                    <div class="passport" style="margin-bottom: 20px;">
                    
                        <img src="{{asset($soldier->image) }}" alt="Profile Picture of {{ $soldier->firstname }}" style="max-width: 150px; border-radius: 8px;">
                        
                    </div>
                    <div class="box fst">
                        <div class="bxl">
                            {{-- <div class="bxc">
                                    <span>
                                        <label>First Name:</label>
                                        <p>{{ $soldier->firstname }}</p>
                            </span>
                            <span>
                                <label>Last Name:</label>
                                <p>{{ $soldier->lastname }}</p>
                            </span>
                            <span>
                                <label>Other Names:</label>
                                <p>STEPHEN</p>
                            </span>
                            <span>
                                <label>Email:</label>
                                <p>{{ $soldier->email }}</p>
                            </span>

                        </div> --}}

                    </div>

                    {{-- <div class="passport">
                                <img src="img/profile.jfif" alt="">
                            </div> --}}
                </div>

                <div class="box">
                    <span>
                        <label>First Name:</label>
                        <p>{{ $soldier->firstname }}</p>
                    </span>
                    <span>
                        <label>Last Name:</label>
                        <p>{{ $soldier->lastname }}</p>
                    </span>
                </div>
                <div class="box">

                    <span>
                        <label>Age:</label>
                        <p>{{ $soldier->age }}</p>
                    </span>
                    <span>
                        <label>Gender:</label>
                        <p>{{ $soldier->gender }}</p>
                    </span>
                </div>
                <div class="box">
                    <span>
                        <label>Gender:</label>
                        <p>{{ $soldier->gender }}</p>
                    </span>

                    <span>
                        <label>Blood Group:</label>
                        <p>{{ $soldier->bloodGroup }}</p>
                    </span>
                </div>
                <div class="box fc">
                    <span>
                        <label>House Address:</label>
                        <p>{{ $soldier->address }}</p>
                    </span>
                    <span>
                        <label>Country of Origin:</label>
                        <p>{{ $soldier->country }}</p>
                    </span>
                </div>
                <div class="box">

                    {{-- <span>
                                <label>State of Origin:</label>
                                <p>OGUN</p>
                            </span> --}}
                </div>

                <div class="box">
                    <span>
                        <label>Country of Deployment:</label>
                        <p>{{ $soldier->deployment }}</p>
                    </span>
                    <span>
                        <label>Religion:</label>
                        <p>{{ $soldier->religion }}</p>
                    </span>
                </div>

                <div class="box">
                    <span>
                        <label>Monthly Salary:</label>
                        <p>{{ $soldier->salary }}</p>
                    </span>
                    <span>
                        <label>Annual Salary:</label>
                        <p>{{ $soldier->annualSalary }}</p>
                    </span>

                </div>
                <div class="box">
                    <span>
                        <label>Marital Status:</label>
                        <p>{{ $soldier->maritalStatus }}</p>
                    </span>

                    <span>
                        <label>Sexual Orientation:</label>
                        <p>{{ $soldier->sexualOrientation }}</p>
                    </span>
                </div>

                <div class="box">
                    <span>
                        <label>Military Rank:</label>
                        <p>{{ $soldier->rank }}</p>
                    </span>
                    <span>
                        <label>Soldier ID:</label>
                        <p>{{ $soldier->soldier_id }}</p>
                    </span>
                </div>

                <div class="info">
                    <h4>Importance of Details:</h4>
                    <p>
                        Your profile information helps us personalize your experience,
                        improve security, and ensure smooth communication. Rest assured, all details are kept secure
                        and confidential.
                    </p>

                </div>

        </div>

        </form>

        </div>
    </section>

</main>
@endsection