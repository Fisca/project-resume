@extends('layouts.layout')

@section('content')
 <!-- Page Content-->
 {{-- @if (empty($_GET)) --}}
 <section class="resume-section" id="experience">
    <div class="resume-section-content">
            <h2>Contact Me</h2>
            <div class="subheading mb-5">{{SESSION('mesg')}}</div>
            <!-- About-->
            {{-- {{$name}} - {{$lname}} - {{$country}} - {{$subject}} --}}
           
                    <form action="/contact/create">

                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="indonesia">Indonesia</option>
                            <option value="canada">Singapore</option>
                            <option value="usa">USA</option>
                        </select>

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                        <input type="submit" value="Submit">
                          
                    </form>
        </div>
 </section>
       {{-- @else
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0"> I am {{$name}}
                        <span class="text-primary">{{$lname}}</span>
                    </h1>
                    <div class="subheading mb-5">
                        From {{$country}}
                    </div>
                    <p class="lead mb-5"> {{$subject}}</p>
                </div>
            </section>     --}}
        {{-- @endif --}}
@endsection
