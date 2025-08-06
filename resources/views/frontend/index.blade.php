@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <main>
        <section class="hero">
            <div class="text">
                <h1>
                    German Defense And Military Job Portal Identification
                </h1>
                <p>
                    In this international disaster assistance, the German Defense And Military Job Portal cooperates closely with governmental and
                    non-governmental partners and relief organisations.


                </p>
                <a href="{{ route('frontend.track') }}">
                    <button>Track Military ID</button>
                </a>
            </div>
        </section>

        <section class="welcome ssc">
            <div class="container">
                <div class="image">
                    <img src="{{ asset('frontend/img/welcome-img.jpg') }}" alt="">
                </div>
                <div class="text">
                    <div class="title">
                        <h4>Homecoming</h4>
                        <h1>A Warm Welcome Awaits</h1>
                    </div>
                    <p>
                        Some days, 24 hours is too much to stay put in,
                        so I take the day hour by hour, moment by moment.
                        I break the task, the challenge, the fear into small,
                        bite-size pieces. I can handle a piece of fear,
                        depression, anger, pain, sadness, loneliness, illness.
                        I actually put my hands up to my face, one next to each
                        eye, like blinders on a horse. It’s not that I hate seeing pretty lovely things like that. But
                        because it
                        reminds me of a question nobody can answer…”Where’s mine?”
                    </p>
                    <button>
                        View More
                    </button>
                </div>
            </div>
        </section>

        <section class="services ssc">
            <div class="container">
                <div class="text">
                    <div class="title">
                        <h4>Our Services</h4>
                        <h1>World-Class Military Support</h1>
                    </div>
                    <p>
                        German military personnel are dedicated to providing essential support both domestically and internationally. 
                        Their services range from humanitarian aid in disaster-stricken regions, peacekeeping missions, and providing 
                        relief during epidemics to ensuring security and stability in crisis areas worldwide. The German Defense And Military Job Portal works closely 
                        with government organizations, non-governmental partners, and relief agencies, offering specialized expertise 
                        in areas such as medical assistance, infrastructure rebuilding, and logistical support, all with a commitment to 
                        safeguarding human life and upholding peace.
                    </p>
                    
                    <a href="{{ route('frontend.applyLeave') }}">
                        <button>
                            Apply Leave
                        </button>
                    </a>
                </div>
                <div class="image">
                    <img src="{{ asset('frontend/img/service-img1.jpg') }}" alt="">
                </div>
            </div>
        </section>

        <section class="activities">
            <div class="container">
                <div class="title">
                    <h3>Our Activities</h3>
                    <h1>Four Environments One Force</h1>
                </div>
                <div class="slider-container">
                    <button id="prevBtn">‹</button>
                    <div id="slider" class="slider">
                        <div class="box"><button>View More</button></div>
                        <div class="box"><button>View More</button></div>
                        <div class="box expanded"><button>View More</button></div>
                        <div class="box"><button>View More</button></div>
                        <div class="box"><button>View More</button></div>
                        <div class="box"><button>View More</button></div>
                        <div class="box"><button>View More</button></div>
                        <div class="box"><button>View More</button></div>
                        <div class="box"><button>View More</button></div>
                    </div>
                    <button id="nextBtn">›</button>
                </div>
            </div>
        </section>

        <section class="mission">
            <div class="container">
                <div class="image">
                    <img src="{{ asset('frontend/img/mission-img.jpg') }}" alt="">
                </div>
                <div class="text">
                    <div class="title">
                        <span>German Defense And Military Job Portal</span>
                        <h1>Mission and Tasks of the German Defense And Military Job Portal</h1>
                    </div>

                    <p>
                        German military personnel provide relief worldwide when people are in need due to natural disasters,
                        serious accidents or epidemics. In this international disaster assistance,
                        the German Defense And Military Job Portal cooperates closely with governmental and non-governmental partners and relief
                        organisations.
                    </p>
                    <button>Learn More</button>
                </div>
            </div>
        </section>

        <section class="newsletter">
            <div class="title">
                <h4>Newsletter</h4>
                <h1>Do You Have Any Question?</h1>
            </div>
            <div class="container">
                <div class="image">
                    <img src="{{ asset('frontend/img/Newsletter-img.jpg') }}" alt="">
                </div>
                <div class="form-container">
                    <div class="text">
                        <h4>Contact Us</h4>
                        <h1>Do You Have Any Question?</h1>
                        <p>If you have any question don't hesitate to contact us or Use the Live chat to message us.
                        </p>
                    </div>

                    <form>
                        <div class="box">
                            <input type="text" placeholder="Your Name">
                            <input type="text" placeholder="Your Email">
                        </div>
                        <div class="box">
                            <input type="text" placeholder="Phone Number">
                            <input type="text" placeholder="Subject">
                        </div>
                        <div class="box">
                            <textarea name="message" class="message" placeholder="Your Message"></textarea>
                        </div>
                        <button>Submit Now</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
