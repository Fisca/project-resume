<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Fisca Fadillah</title>
        <link rel="icon" type="image/x-icon" href="{{url('assets/img/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{url('css/styles.css')}}" rel="stylesheet" />
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        {{-- <link href="{{url('css/contact.css')}}" rel="stylesheet" /> --}}
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Fisca Fadillah</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{url('assets/img/profile.jpg')}}" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#awards">Awards</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/{{url('/contact')}}">Contact</a></li>
                </ul>
            </div>
        </nav>
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
                        Dusun Kubung · Karangploso, RT 01/ RW 06 · (+62) 00-000-000·
                        <a href="mailto:name@email.com">mwegege@email.com</a>
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
                            <h3 class="mb-0">Politeknik City of Malang</h3>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{url('js/scripts.js')}}"></script>
    </body>
</html>
  
