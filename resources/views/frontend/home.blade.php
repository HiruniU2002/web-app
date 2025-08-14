@extends('frontend.layouts.master')

@section('content')
<div>
    @include('frontend.Home.slider')
    
    @include('frontend.Home.HomeSetting')

    <!-- Products Section -->
    <section class="py-5" id="products">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Our Delicious Creations</h2>
            
            <!-- Wedding Cakes --> 
            <div class="row mb-5" id="wedding">
                <h3 class="text-center mb-4 pb-2 border-bottom">{{ App\Models\Cake::TYPE_WEDDING }}</h3>
                @forelse($weddingCakes as $cake)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('storage/'.$cake->image_path) }}" class="card-img-top" alt="{{ $cake->cake_name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cake->cake_name }}</h5>
                            <p class="card-text">
                                <small class="text-muted">
                                    Flavour: {{ $cake->cake_flavour }}<br>
                                    Size: {{ $cake->cake_size }}<br>
                                    Price: LKR {{$cake->cake_price}}
                                </small>
                            </p>
                            <!-- <p class="card-text">{{ Str::limit($cake->cake_description, 80) }}</p> -->
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p class="text-center">No {{ App\Models\Cake::TYPE_WEDDING }} available at the moment.</p>
                </div>
                @endforelse
            </div>
            
            <!-- Birthday Cakes -->
            <div class="row mb-5" id="birthday">
                <h3 class="text-center mb-4 pb-2 border-bottom">{{ App\Models\Cake::TYPE_BIRTHDAY }}</h3>
                @forelse($birthdayCakes as $cake)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('storage/'.$cake->image_path) }}" class="card-img-top" alt="{{ $cake->cake_name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cake->cake_name }}</h5>
                            <p class="card-text">
                                <small class="text-muted">
                                    Flavour: {{ $cake->cake_flavour }}<br>
                                    Size: {{ $cake->cake_size }}<br>
                                    Price:LKR {{$cake->cake_price}}
                                </small>
                            </p>
                            <!-- <p class="card-text">{{ Str::limit($cake->cake_description, 80) }}</p> -->
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <!-- <p class="text-center">No {{ App\Models\Cake::TYPE_BIRTHDAY }} available at the moment.</p> -->
                </div>
                @endforelse
            </div>
            
            <!-- Cup Cakes -->
            <div class="row mb-5" id="cupcakes">
                <h3 class="text-center mb-4 pb-2 border-bottom">{{ App\Models\Cake::TYPE_CUPCAKES }}</h3>
                @forelse($cupcakes as $cake)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('storage/'.$cake->image_path) }}" class="card-img-top" alt="{{ $cake->cake_name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cake->cake_name }}</h5>
                            <p class="card-text">
                                <small class="text-muted">
                                    Flavour: {{ $cake->cake_flavour }}<br>
                                    Size: {{ $cake->cake_size }}<br>
                                    Price: LKR {{ number_format($cake->cake_price, 2) }}
                                </small>
                            </p>
                            <!-- <p class="card-text">{{ Str::limit($cake->cake_description, 80) }}</p> -->
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p class="text-center">No {{ App\Models\Cake::TYPE_CUPCAKES }} available at the moment.</p>
                </div>
                @endforelse
            </div>
            
            <!-- Brownies -->
            <div class="row" id="brownies">
                <h3 class="text-center mb-4 pb-2 border-bottom">{{ App\Models\Cake::TYPE_BROWNIES }}</h3>
                @forelse($brownies as $cake)
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('storage/'.$cake->image_path) }}" class="card-img-top" alt="{{ $cake->cake_name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $cake->cake_name }}</h5>
                            <p class="card-text">
                                <small class="text-muted">
                                    Flavour: {{ $cake->cake_flavour }}<br>
                                    Size: {{ $cake->cake_size }}<br>
                                    Price: LKR {{$cake->cake_price}}
                                </small>
                            </p>
                            <!-- <p class="card-text">{{ Str::limit($cake->cake_description, 80) }}</p> -->
                            <a href="#" class="btn btn-outline-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p class="text-center">No {{ App\Models\Cake::TYPE_BROWNIES }} available at the moment.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
</div>
@endsection