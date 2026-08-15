@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Hero -->
    <section class="hero-texture py-5 mt-4">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-8">
                    <span class="hero-accent-mark"></span>
                    <p class="eyebrow mb-3">Technology Partner</p>
                    <h1 class="display-3 fw-semibold mb-4" style="max-width: 720px; line-height: 1.05;">
                        Smart, modern technology built for growing businesses.
                    </h1>
                    <p class="fs-5 mb-4" style="color: var(--muted); max-width: 560px;">
                        VivaTech Solutions helps companies design, build, and scale the digital
                        products they run on — from websites to cloud infrastructure.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-ink">Get in Touch</a>
                    <a href="{{ route('services') }}" class="btn btn-outline-ink ms-2">Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <section class="container hairline">
        <div class="row text-center text-md-start">
            <div class="col-6 col-md-3 stat-block">
                <div class="stat-number">6</div>
                <div class="stat-label">Core Services</div>
            </div>
            <div class="col-6 col-md-3 stat-block">
                <div class="stat-number">4</div>
                <div class="stat-label">Team Members</div>
            </div>
            <div class="col-6 col-md-3 stat-block">
                <div class="stat-number">100%</div>
                <div class="stat-label">Laravel MVC</div>
            </div>
            <div class="col-6 col-md-3 stat-block">
                <div class="stat-number">2026</div>
                <div class="stat-label">Founded</div>
            </div>
        </div>
    </section>

    <!-- Company Introduction -->
    <section class="container py-5 hairline">
        <div class="row py-4">
            <div class="col-lg-5">
                <p class="eyebrow mb-2">Who We Are</p>
                <h2 class="fw-semibold">A team that builds with intent.</h2>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <p style="color: var(--muted);">
                    VivaTech Solutions is a technology company dedicated to delivering reliable,
                    scalable, and user-focused digital solutions. From web development to cloud
                    infrastructure, we partner with businesses to turn ideas into impactful products.
                </p>
            </div>
        </div>
    </section>

    <!-- Featured Services -->
    <section class="container py-5 hairline">
        <p class="eyebrow mb-2">What We Do</p>
        <h2 class="fw-semibold mb-4">Featured Services</h2>

        <div>
            @foreach ($featuredServices as $index => $service)
                <div class="row service-row align-items-center">
                    <div class="col-1 service-index">0{{ $index + 1 }}</div>
                    <div class="col-1 fs-4">{{ $service['icon'] }}</div>
                    <div class="col-4">
                        <h5 class="fw-semibold mb-0">{{ $service['title'] }}</h5>
                    </div>
                    <div class="col-6" style="color: var(--muted);">
                        {{ $service['description'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Call to Action -->
    <section class="container py-5 text-center hairline">
        <div class="py-5">
            <h2 class="fw-semibold mb-3">Ready to work with us?</h2>
            <p class="mb-4" style="color: var(--muted);">Let's build something great together.</p>
            <a href="{{ route('contact') }}" class="btn btn-ink">Contact Us</a>
        </div>
    </section>

@endsection