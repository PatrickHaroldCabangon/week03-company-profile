@extends('layouts.app')

@section('title', 'About')

@section('content')

    <!-- Page Header -->
    <section class="hero-texture py-5 mt-4">
        <div class="container py-4">
            <span class="hero-accent-mark"></span>
            <p class="eyebrow mb-3">About Us</p>
            <h1 class="display-4 fw-semibold mb-3" style="max-width: 640px;">
                A team that builds with intent.
            </h1>
            <p class="fs-5" style="color: var(--muted); max-width: 560px;">
                Get to know the people and principles behind VivaTech Solutions.
            </p>
        </div>
    </section>

    <!-- Company History -->
    <section class="container py-5 hairline">
        <div class="row py-4">
            <div class="col-lg-5">
                <p class="eyebrow mb-2">Our Story</p>
                <h2 class="fw-semibold">History</h2>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <p style="color: var(--muted);">
                    VivaTech Solutions was founded with a simple goal: to help growing businesses
                    access reliable and modern technology without the complexity. What started as
                    a small team of developers has grown into a trusted technology partner for
                    companies across various industries.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="container py-5 hairline">
        <div class="row g-5 py-4">
            <div class="col-md-6">
                <p class="eyebrow mb-2">Mission</p>
                <h3 class="fw-semibold mb-3">Why we exist.</h3>
                <p style="color: var(--muted);">
                    To empower businesses with innovative, reliable, and scalable technology
                    solutions that drive real growth and lasting impact.
                </p>
            </div>
            <div class="col-md-6">
                <p class="eyebrow mb-2">Vision</p>
                <h3 class="fw-semibold mb-3">Where we're going.</h3>
                <p style="color: var(--muted);">
                    To be a leading technology partner recognized for excellence, innovation,
                    and integrity in every solution we deliver.
                </p>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="container py-5 hairline">
        <p class="eyebrow mb-2">What We Stand For</p>
        <h2 class="fw-semibold mb-4">Core Values</h2>

        <div>
            @foreach ($coreValues as $value => $description)
                <div class="row service-row align-items-center">
                    <div class="col-1 service-index">0{{ $loop->iteration }}</div>
                    <div class="col-3">
                        <h5 class="fw-semibold mb-0">{{ $value }}</h5>
                    </div>
                    <div class="col-8" style="color: var(--muted);">
                        {{ $description }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Team -->
    <section class="container py-5 hairline">
        <p class="eyebrow mb-2">The People</p>
        <h2 class="fw-semibold mb-4">Meet Our Team</h2>

        <div class="row g-4">
            @foreach ($team as $member)
                <div class="col-6 col-lg-3">
                    <div class="border rounded-1 p-4 text-center h-100" style="border-color: var(--line) !important;">
                        <div class="rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center"
                             style="width: 64px; height: 64px; background-color: var(--bg); border: 1px solid var(--line); font-size: 1.5rem;">
                            👤
                        </div>
                        <h6 class="fw-semibold mb-1">{{ $member['name'] }}</h6>
                        <p class="small mb-0" style="color: var(--muted);">{{ $member['role'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection