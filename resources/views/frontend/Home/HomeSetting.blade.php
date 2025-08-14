@foreach($HomeSettings as $HomeSetting)
<div class="container my-5 py-4">
  <div class="row g-4 align-items-center">
    
    <!-- Text Block -->
    <div class="col-md-6">
      <div class="p-4 rounded-3 shadow bg-light-subtle border-start border-4 border-danger">
        <h2 class="fw-bold text-uppercase mb-3" style="font-family: 'Quicksand', sans-serif;">
          {!! nl2br(e($HomeSetting->heading)) !!}
        </h2>
        <div class="bg-white p-3 rounded shadow-sm border border-warning-subtle">
          {!! nl2br(e($HomeSetting->sub_heading)) !!}
        </div>
      </div>
    </div>

    <!-- Image Block with Text Overlay -->
    <div class="col-md-6 position-relative">
      <div class="rounded-4 overflow-hidden shadow-sm" style="
        background-image: url('{{ asset('storage/'.$HomeSetting->image_link) }}');
        background-size: cover;
        background-position: center;
        min-height: 300px;">
        
        <div class="position-absolute top-50 start-50 translate-middle bg-white bg-opacity-75 p-4 rounded text-center w-75">
          <h3 class="fw-bold text-dark mb-2" style="font-family: 'Pacifico', cursive;">
            {{ $HomeSetting->top_heading }}
          </h3>
          <p class="mb-3 text-muted">{{ $HomeSetting->bottom_heading }}</p>
          <a href="/product" class="btn btn-outline-danger btn-sm px-4">Explore Cakes</a>
        </div>
      </div>
    </div>

  </div>
</div>
@endforeach
@push('styles')
<style>
  .bg-light-subtle {
  background-color: #fff8e7 !important;
}

.border-warning-subtle {
  border-color: #ffc10750 !important;
}

.shadow {
  box-shadow: 0 0.75rem 1.5rem rgba(0,0,0,0.1);
}

  </style>
@endpush