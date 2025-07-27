@foreach($sliders as $slider)
<section class="hero-slide d-flex align-items-center text-center text-white" style="
    min-height: 100vh;
    background: 
        linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)),
        url('{{ asset('storage/' . $slider->image_link) }}') 
        no-repeat center center / cover;
    position: relative;">
    
    <div class="container">
        <div class="animated-content">
            <h1 class="display-3 fw-bold mb-3" style="font-family: 'Pacifico', cursive;">
                {{ $slider->heading }}
            </h1>
            <p class="lead mb-4 fs-5">
                {{ $slider->bottom_heading }}
            </p>
            <a href="#products" class="btn btn-outline-light btn-lg px-5 py-2 rounded-pill shadow-sm transition">
                View Our Cakes
                <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
    </div>

</section>
@endforeach

@push('styles')
<style>
    .hero-slide {
    position: relative;
    z-index: 1;
    overflow: hidden;
}

.hero-slide::after {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle, rgba(255,209,220,0.05) 0%, rgba(255,209,220,0.1) 100%);
    z-index: 0;
}

.animated-content {
    position: relative;
    z-index: 2;
    animation: fadeInUp 1.2s ease-in-out;
}

.transition {
    transition: all 0.3s ease;
}

.transition:hover {
    background-color: #FFD1DC;
    color: #6B4423;
    border-color: #FFD1DC;
}

/* Smooth animation */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(40px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

    </style>
    @endpush