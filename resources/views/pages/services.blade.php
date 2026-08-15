@extends('layouts.app')

@section('title', 'Services')

@section('content')

    <!-- Page Header -->
    <section class="hero-texture py-5 mt-4">
        <div class="container py-4">
            <span class="hero-accent-mark"></span>
            <p class="eyebrow mb-3">What We Offer</p>
            <h1 class="display-4 fw-semibold mb-3" style="max-width: 640px;">
                Full-service technology, end to end.
            </h1>
            <p class="fs-5" style="color: var(--muted); max-width: 560px;">
                Six core disciplines that cover everything a growing business needs to run,
                secure, and scale its technology.
            </p>
        </div>
    </section>

    <!-- Services Index -->
    <section class="container py-5 hairline">
        <div>
            @foreach ($services as $service)
                <div class="row service-row align-items-center">
                    <div class="col-1 service-index">0{{ $loop->iteration }}</div>
                    <div class="col-1 fs-4">{{ $service['icon'] }}</div>
                    <div class="col-3">
                        <h5 class="fw-semibold mb-0">{{ $service['title'] }}</h5>
                    </div>
                    <div class="col-7" style="color: var(--muted);">
                        {{ $service['description'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- CTA -->
    <section class="container py-5 text-center hairline">
        <div class="py-5">
            <h2 class="fw-semibold mb-3">Not sure which service fits?</h2>
            <p class="mb-4" style="color: var(--muted);">Tell us about your project and we'll point you in the right direction.</p>
            <a href="{{ route('contact') }}" class="btn btn-ink">Talk to Us</a>
        </div>
    </section>

@endsection