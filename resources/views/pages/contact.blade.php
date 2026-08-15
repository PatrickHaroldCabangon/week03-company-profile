@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <!-- Page Header -->
    <section class="hero-texture py-5 mt-4">
        <div class="container py-4">
            <span class="hero-accent-mark"></span>
            <p class="eyebrow mb-3">Get In Touch</p>
            <h1 class="display-4 fw-semibold mb-3" style="max-width: 640px;">
                Let's start a conversation.
            </h1>
            <p class="fs-5" style="color: var(--muted); max-width: 560px;">
                Have a project in mind? Send us a message or reach out directly.
            </p>
        </div>
    </section>

    <section class="container py-5">
        <div class="row g-5">

            <!-- Contact Form (UI only) -->
            <div class="col-lg-7">
                <p class="eyebrow mb-3">Send a Message</p>
                <form>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Full Name</label>
                        <input type="text" class="form-control rounded-1" placeholder="Juan Dela Cruz" style="border-color: var(--line);">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Email Address</label>
                        <input type="email" class="form-control rounded-1" placeholder="juan@email.com" style="border-color: var(--line);">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Subject</label>
                        <input type="text" class="form-control rounded-1" placeholder="Project Inquiry" style="border-color: var(--line);">
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-semibold">Message</label>
                        <textarea class="form-control rounded-1" rows="5" placeholder="Tell us about your project..." style="border-color: var(--line);"></textarea>
                    </div>
                    <button type="submit" class="btn btn-ink">Send Message</button>
                </form>
            </div>

            <!-- Company Info -->
            <div class="col-lg-4 offset-lg-1">
                <p class="eyebrow mb-3">Company Info</p>

                <div class="mb-4">
                    <p class="small fw-semibold mb-1">Address</p>
                    <p class="small" style="color: var(--muted);">{{ $companyInfo['address'] }}</p>
                </div>

                <div class="mb-4">
                    <p class="small fw-semibold mb-1">Email</p>
                    <p class="small" style="color: var(--muted);">{{ $companyInfo['email'] }}</p>
                </div>

                <div class="mb-4">
                    <p class="small fw-semibold mb-1">Phone</p>
                    <p class="small" style="color: var(--muted);">{{ $companyInfo['phone'] }}</p>
                </div>

                <div class="hairline pt-4 mt-4">
                    <p class="eyebrow mb-2">Follow Us</p>
                    <a href="https://www.facebook.com/patrickharold.cabangon" class="d-flex align-items-center gap-2 small mb-2" target="_blank">
    <i class="bi bi-facebook fs-6"></i> Facebook
</a>
<a href="https://www.instagram.com/iiq.patrix_/" class="d-flex align-items-center gap-2 small" target="_blank">
    <i class="bi bi-instagram fs-6"></i> Instagram
</a>
                </div>
            </div>

        </div>
    </section>

@endsection