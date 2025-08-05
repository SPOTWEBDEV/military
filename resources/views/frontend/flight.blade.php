@extends('layouts.app')
@section('title')
    Flight
@endsection

@section('content')
<main>
    <section class="flight-section lc">
        <div class="container">
            <div class="head-text">
                <div class="title">
                    <h1>BOOK A FLIGHT</h1>
                    <p>Bundeswehr Flight</p>
                </div>
               
                <p>
                    <span>
                        Do you need a flight home for leave, are you planning a family vacation, or do you need an emergency ticket somewhere? We are able to offer you exclusive military travel financing with no down payment required!
                        Not enough space on a Space A military flight? Can’t find military fares online? Sometimes certain commercial airlines may not carry a military discount or there are only a certain number of fares available for military discounts. We have travel consultants who have special search engines that can search for military fares and if those discounted military fares are not available, we will offer you the cheapest fare option available.
                    </span>

                    <span>
                       <b>OUR HISTORY</b>
                       We specialize in financing the cheapest fares for military and government personnel, 
                       which we back with our price match guarantee! We offer travel financing programs for active duty military, 
                       retired military, and US government employees. We offer military travel financing options that are paid in monthly 
                       installments and we can even accept monthly payments with military allotments.
                    </span>

                    <span>
                        <b>OUR TRAVEL PLANS</b>
                        We understand that you may need to fly your family internationally for the holidays, book a honeymoon flight, or even 
                        fly back to your duty station! We provide our travel financing services for vacations or emergencies for:
                        <div class="emg">
                            <h4>
                               <i>-</i> Bundeswehr Active Duty Military Members
                                
                           </h4>
                            <h4><i>-</i> Bundeswehr Retired Military Members</h4>
                            <h4>
                               <i>-</i> Military Dependents
                            </h4>
                            <h4>
                               <i>-</i> Military Family Members & Friends
                            </h4>
                            <h4>
                               <i>-</i> Personnel of all other US Government Agencies
                            </h4>
                            <h4>
                               <i>-</i> Department of Defense
                            </h4>
                            <h4>
                               <i>-</i> Bundeswehr Postal Service Employees
                            </h4>
                            <h4>
                               <i>-</i> Veterans’ Administration Employees
                            </h4>
                            <h4><i>-</i> Social Security Administration Employees</h4>
                            <h4>
                               <i>-</i> NIH Employees
                            </h4>
                        </div>
                    </span>
                </p>

            </div>

            <div class="cont">
                <a href="{{ route('frontend.flightApplication') }}">
                    <button >Book A Flight</button>
                 </a> 
            </div>
        </div>
    </section>

</main>
@endsection