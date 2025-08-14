

<div class="col-md-6">
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="card-title mb-4">Send us a message</h4>
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <form name="contact-us-form" class="needs-validation" action="{{route('Contact.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="e.g. +94 77 123 4567">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="mb-3">
                    <label for="comment" class="form-label">Your Message</label>
                    <textarea class="form-control" id="comment" name="comment" rows="4" placeholder="Write your message here..." required></textarea>
                    @error('comment') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="btn btn-secondary w-100">Send Message</button>
            </form>
        </div>
    </div>
</div>

