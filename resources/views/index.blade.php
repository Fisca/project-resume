@extends('layout.layout')
@section('content')
    
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Fisca 
                        <span class="text-primary">Fadillah</span>
                    </h1>
                    <div class="subheading mb-5">
                        Dusun Kubung · Karangploso, RT 01/ RW 06 · (+62) 858-9100-3268·
                        <a href="mailto:name@email.com">fisca.fadillah14@gmail.com</a>
                    </div>
                    <p class="lead mb-5">Hello, you can call me Fisca. I am highly curious in Website that loves to do experiments in the Website area. I am a college student in Politeknik City of Malang.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
           
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Polytechnic City of Malang</h3>
                            <div class="subheading mb-3">Associate’s degree of Engineering informatics</div>
                            <div>Engineering informatics - Website</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">September 2019 - present</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Website Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-fly"></i></li>
                        <li class="list-inline-item"><i class="fab fa-modx"></i></li>
                        <li class="list-inline-item"><i class="fab fa-sketch"></i></li>
                        <li class="list-inline-item"><i class="fab fa-vimeo-v"></i></li>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        @foreach ($works as $data)
                            <li>
                                <span class="fa-li"><i class="fas fa-check"></i></span>
                                {{$data['workflow']}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being a Animator and 2D Artist, I enjoy  cycling, reading, and watch movie. I have interest of online shop, digital marketing and ads marketing. I very curious how digital or ads marketing it works. </p>
                    <p class="mb-0"></p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                           Advanced Website Course-Certificate
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                           Disney Website Workshop-Certificate
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                             Bass Award 3th Winner - Best Explanatory Video
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                             Adobe Design Achievement-Digital Products and Experiences
                        </li>
                    </ul>
                </div>
            </section>
        </div>
@endsection