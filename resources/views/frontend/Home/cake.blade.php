@foreach($cakes as $cake)
  <div class="card shadow-sm" style="width: 20rem;">
    <img src="{{asset('storage/'.$cake->image_path)}}" class="card-img-top img-fluid" alt="Classic Wedding Cake" style="height: 200px; object-fit: cover;">
    <div class="card-body">
        <h5 class="card-title text-center">{{$cake->cake_name}}</h5>
          <div class="card-text">

            <div class="d-flex justify-content-between mb-2">
                <span class="fw-bold">Type:</span>
                <span>{{$cake->cake_type}}</span>
            </div>

            <div class="d-flex justify-content-between mb-2">
                <span class="fw-bold">Flavor:</span>
                <span>{{$cake->cake_flavour}}</span>
            </div>

            <div class="d-flex justify-content-between mb-2">
                <span class="fw-bold">Size:</span>
                <span>{{$cake->cake_size}}</span>
            </div>

            <div class="d-flex justify-content-between mb-3">
                <span class="fw-bold">Price:</span>
                <span class="text-success fw-bold">LKR {{$cake->cake_price}}</span>
            </div>

  </div>
    <div class="d-grid">

      <form name="addtocart-form" method="POST" action="{{ route('cart.add') }}">
          @csrf

          <div class="cake-single__addtocart">
                  <input type="hidden" name="quantity" value="1" min="1" class="qty-control__number text-center">
          
              <input type="hidden" name="id" value="{{ $cake->id }}" />
              <input type="hidden" name="name" value="{{ $cake->cake_name }}" />
              <input type="hidden" name="price" value="{{ $cake->cake_price }}" />                        
              <input type="hidden" name="category" value="{{ $cake->cake_type }}" />
              <input type="hidden" name="flavour" value="{{$cake->cake_flavour}}" />
              <input type="hidden" name="size" value="{{$cake->cake_size}}" />
              
              <!-- Add the image path from storage -->
              <input type="hidden" name="image" value="{{asset('storage/'.$cake->image_path)}}" />
              <div class="d-grid">
                <button type="submit" class="btn btn-outline-danger">
                    <i class="fas fa-shopping-cart"></i> Add to Cart
                </button>
              </div>
          </div>
      </form>
    </div>
  </div>
</div>


@endforeach

