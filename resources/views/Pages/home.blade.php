@extends('Layouts.app')

@section('content')
    <section class="home section" id="home">
        <div class="container">
            <div class="row">
                <div class="home-info padd-15">
                    <h3 class="hello">Hello, My Name is <span class="name">Md Mahmudul Hasn sohel</span></h3>
                    <p>I'm a Front-End Developer with extensive experience for over 2 years. My experties is to create pixel
                        perfect design, and many more...</p>
                    <a href="{{ route('contact') }}" class="btn hire-me">Hire Me</a>
                </div>
                <div class="home-img padd-15">
                    <img src="{{ asset('assets/images/sohel.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
