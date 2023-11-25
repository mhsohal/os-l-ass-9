@extends('Layouts.app')

@section('content')
    <section class="about section" id="about">
        <div class="container">
            <div class="row">
                <div class="section-title padd-15">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="about-content padd-15">
                    <div class="row">
                        <div class="about-text padd-15">
                            <h3>I'm Mahmudul Hasan Sohel</h3>
                            <p>I'm a Front-End Developer with extensive experience for over 2 years. My experties is to
                                create pixel perfect design, and many more...</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="personal-info padd-15">
                            <div class="row">
                                <div class="info-item padd-15">
                                    <p>Birthday : <span>1998</span></p>
                                </div>
                                <div class="info-item padd-15">
                                    <p>Age : <span>25</span></p>
                                </div>
                                <div class="info-item padd-15">
                                    <p>Email : <span>admin@mail.com</span></p>
                                </div>
                                <div class="info-item padd-15">
                                    <p>Degree : <span>Upcoming</span></p>
                                </div>
                                <div class="info-item padd-15">
                                    <p>Phone : <span>+8801234567890</span></p>
                                </div>
                                <div class="info-item padd-15">
                                    <p>Country : <span>Bangladesh</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="buttons padd-15">
                                    <a href="#" class="btn">Download CV</a>
                                    <a href="{{ route('contact') }}" class="btn hire-me">Hire Me</a>
                                </div>
                            </div>
                        </div>
                        <div class="skills padd-15">
                            <div class="row">
                                <div class="skill-item padd-15">
                                    <h5>Laravel</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 86%;"></div>
                                        <div class="skill-percent">86%</div>
                                    </div>
                                </div>
                                <div class="skill-item padd-15">
                                    <h5>PHP</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 66%;"></div>
                                        <div class="skill-percent">66%</div>
                                    </div>
                                </div>
                                <div class="skill-item padd-15">
                                    <h5>HTML</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 96%;"></div>
                                        <div class="skill-percent">96%</div>
                                    </div>
                                </div>
                                <div class="skill-item padd-15">
                                    <h5>CSS</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 90%;"></div>
                                        <div class="skill-percent">90%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="education padd-15">
                            <h3 class="title">Education</h3>
                            <div class="row">
                                <div class="timeline-box padd-15">
                                    <div class="timeline shadow-dark">
                                        <!-- ===== Item 1 ===== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2010 - 2012
                                            </h3>
                                            <h4 class="timeline-title">SSC</h4>
                                        </div>
                                        <!-- ===== Item 2 ===== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2013 - 2014
                                            </h3>
                                            <h4 class="timeline-title">HSC</h4>
                                        </div>
                                        <!-- ===== Item 3 ===== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2015 - 2019
                                            </h3>
                                            <h4 class="timeline-title">B.Sc</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="experience padd-15">
                            <h3 class="title">Experience</h3>
                            <div class="row">
                                <div class="timeline-box padd-15">
                                    <div class="timeline shadow-dark">
                                        <!-- ===== Item 1 ===== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2015 - 2023
                                            </h3>
                                            <h4 class="timeline-title">Freelancer</h4>
                                        </div>
                                        <!-- ===== Item 2 ===== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2015 - 2023
                                            </h3>
                                            <h4 class="timeline-title">Upwork</h4>
                                        </div>
                                        <!-- ===== Item 3 ===== -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i> 2015 - 2023
                                            </h3>
                                            <h4 class="timeline-title">Fiverr</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
