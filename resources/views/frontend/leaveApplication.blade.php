@extends('layouts.app')
@section('title')
    Leave Application
@endsection
@section('content')
    <main>
        <section class="leave-application-section lc">
            <div class="container">
                <div class="head-text">
                    <div class="title">
                        <h1>LEAVE APPLICATION</h1>
                        <p>Attention to all applicants .</p>
                    </div>

                    <p>
                        <span>
                            The Bundeswehr Board of the Welfare Department has made the new rules for the expatriates in war
                            zones requesting for a Work Leave to be applied by their loved ones/friends/relatives for the
                            reasons below.
                        </span>

                        <span>
                            <b>Health Leave: </b>
                            The health leave is the visit whereby an expatriate/soldier under the Bundeswehr Organization is
                            not in Good health and his loved ones/friends/relatives may need him home for proper treatment.
                        </span>

                        <span>
                            <b>Marital Leave: </b>
                            This leave is whereby the Government gives an expatriate/soldier opportunity to leave the war
                            zone to meet up with their fiancee for marriage purpose.
                        </span>

                        <span>
                            For the Leave to be approved, the loved ones/friends/relatives who is applying for the Leave
                            must remit a refundable fee which is sometimes a percentage off his/her allowance, and also for
                            the welfare of other expatriates that will replace duty posts to continue to serve our beloved
                            country.
                        </span>
                    </p>

                </div>

                <div class="cont">
                    <h4>These are the durations available for a Leave:</h4>
                    <p><span>a.</span> 1 Month Emergency Leave</p>
                    <p><span>b.</span> 2 Months Emergency Leave</p>
                    <p><span>c.</span> 3 Months Emergency Leave</p>
                    <p><span>d.</span> 4 Months Emergency Leave</p>
                    <p><span>e.</span> 5 Months Emergency Leave</p>
                    <p><span>f.</span> 6 Months Emergency Leave</p>
                    <p><span>g.</span> 8 Months Emergency Leave</p>
                    <p><span>h.</span> 12 Months Emergency Leave</p>
                </div>

                <div class="cont">
                    <p>Kindly tell us the duration you are applying for so that we can forward the necessary information to
                        you for the Leave processing department.</p>
                    <a href="{{ route('frontend.leaveApplication') }}">
                        <button>Apply Now</button>
                    </a>
                </div>
            </div>
        </section>

    </main>
@endsection
