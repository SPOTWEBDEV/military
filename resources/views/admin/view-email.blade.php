{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/fontawesome/css/all.min.css') }}">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/flaticon/flaticon.css') }}">
    <title>German Defense And Military Job Portal</title>
</head>

<body>
    <style>
        body {
            background: rgb(210, 208, 208);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            /* min-height: 40vh; */
            width: 400px;
            background: white;
            padding: 25px 12px;
            border-radius: 8px;
        }

        .logo img {
            width: 100%;
            height: 120px;
        }

        .tags {
            display: flex;
            justify-content: space-between;
            padding: 3px 5px;
        }

        .tags a {
            text-decoration: none;
            font-size: 16px;
            color: rgb(16, 24, 133);
        }

        button {
            width: 98%;
            color: white;
            background: #000066;
            border: 0;
            border-radius: 10px;
            height: 45px;
        }
    </style>


    <div class="container">
        <div class="holder">
            <div class="logo">
                <a href="{{ route('frontend.index') }}" class="brand-logo default-logo"><img
                        src="{{ asset('OREX 2.png') }}" alt="Site Logo"></a>
            </div>
            <div class="tags">
                <span class="text"><i class="far fa-envelope"></i>: <span><a
                            href="mailto:support@orextrd.com">support@orextrd.com</span></a></span></span>

                <span class="text"><i class="far fa-headset"></i>: <span><a href="Tel:+49 1639343752">+49
                            1639343752</span></a></span></span>
            </div>

            <p style="text-align: justify">
                {{ html_entity_decode($emailData['message']) }}
            </p>

            <a href="https://orextrd.com"><button>Visit Our Website</button></a>
            <div class="text">
                <p style="text-align: center;"> <span><i style="color: #000066; font-size: 21px;" class="far fa-map-marker-alt"></i></span> 1600-1055 Dunsmuir Street Vancouver, British Columbia V7X 1P1 Canada</p>
            </div>
            <a style="display: flex; justify-content: center;" href="https://orextrd.com">Orex Exploration Minning Investments</a>
        </div>
    </div>
</body>

</html> --}}








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://orextrd.com/frontend/assets/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://orextrd.com/frontend/assets/fonts/flaticon/flaticon.css">
    <title>German Defense And Military Job Portal</title>
</head>

<body style="background: rgb(210, 208, 208); display: flex; align-items: center; justify-content: center;">
    <div style="width: 400px; background: white; padding: 25px 12px; border-radius: 8px;">
        <div>
            <div style="background: black; width:100%;">
                <a href="https://orextrd.com" style="display: block; text-align: center;"><img
                        src="https://www.orextrd.com/OREX%202.png" alt="" style="width: 90%; height: 100px;"></a>
            </div>
            {{-- <div style="display: flex; justify-content: space-between; padding: 3px 5px; align-items: center;">
                <span style="font-size: 16px; color: rgb(16, 24, 133); display: flex; align-items: center;">
                    <svg style="width:21px;height:21px;color: #000066;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#000066" d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>: 
                        <a href="mailto:support@orextrd.com"
                        style="text-decoration: none; font-size: 16px;"><strong>support@orextrd.com</strong></a>
                </span>
                <span style="font-size: 16px; color: rgb(16, 24, 133); display: flex; align-items: center;">
                    <svg style="width:21px;height:21px;color: #000066;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#000066" d="M57.7 193l9.4 16.4c8.3 14.5 21.9 25.2 38 29.8L163 255.7c17.2 4.9 29 20.6 29 38.5l0 39.9c0 11 6.2 21 16 25.9s16 14.9 16 25.9l0 39c0 15.6 14.9 26.9 29.9 22.6c16.1-4.6 28.6-17.5 32.7-33.8l2.8-11.2c4.2-16.9 15.2-31.4 30.3-40l8.1-4.6c15-8.5 24.2-24.5 24.2-41.7l0-8.3c0-12.7-5.1-24.9-14.1-33.9l-3.9-3.9c-9-9-21.2-14.1-33.9-14.1L257 256c-11.1 0-22.1-2.9-31.8-8.4l-34.5-19.7c-4.3-2.5-7.6-6.5-9.2-11.2c-3.2-9.6 1.1-20 10.2-24.5l5.9-3c6.6-3.3 14.3-3.9 21.3-1.5l23.2 7.7c8.2 2.7 17.2-.4 21.9-7.5c4.7-7 4.2-16.3-1.2-22.8l-13.6-16.3c-10-12-9.9-29.5 .3-41.3l15.7-18.3c8.8-10.3 10.2-25 3.5-36.7l-2.4-4.2c-3.5-.2-6.9-.3-10.4-.3C163.1 48 84.4 108.9 57.7 193zM464 256c0-36.8-9.6-71.4-26.4-101.5L412 164.8c-15.7 6.3-23.8 23.8-18.5 39.8l16.9 50.7c3.5 10.4 12 18.3 22.6 20.9l29.1 7.3c1.2-9 1.8-18.2 1.8-27.5zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/>
                    </svg>
                    : <a href="https://orextrd.com" style="text-decoration: none; font-size: 16px;"><strong>https://orextrd.com</strong></a>
                </span> --}}
        </div>
        <p style="text-align: justify;">
            <p style="font-size: 20px">{!! html_entity_decode($emailData['message']) !!}</p>
        </p>

        <a href="https://service-un.com" style="display: block; text-align: center;">
            <button
                style="width: 98%; color: white; background:  #809070; border: 0; border-radius: 10px; height: 45px;">Visit
                Our Website</button>
        </a>
        <div style="text-align: center; margin-top: 20px; ">
            <p style="display: flex; justify-content:space-evenly;">
                German Defense And Military Job Portal services © 2024.
                <span>
                    <a href="https://service-un.com" style="display: block; text-align: center; text-decoration: none;">Unservice Military</a>
                </span>
            </p>
        </div>
       
    </div>
    </div>
</body>

</html>
