@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Cake Management</h2>

    <!-- Add New Cake Button -->
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCakeModal">
        <i class="fas fa-plus"></i> Add New Cake
    </button>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Error Messages -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Add Cake Modal -->
    <div class="modal fade" id="addCakeModal" tabindex="-1" aria-labelledby="addCakeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCakeModalLabel">Add New Cake</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('admin.cakes.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="cake_name" class="form-label">Cake Name</label>
                                    <input type="text" class="form-control" id="cake_name" name="cake_name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="cake_type" class="form-label">Cake Type</label>
                                    <select class="form-select" id="cake_type" name="cake_type" required>
                                        <option value="">Select Type</option>
                                        <option value="Wedding Cakes">Wedding Cakes</option>
                                        <option value="Birthday Cakes">Birthday Cakes</option>
                                        <option value="Brownies">Brownies</option>
                                        <option value="Cup Cakes">Cup Cakes</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="cake_flavour" class="form-label">Flavour</label>
                                    <select class="form-select" id="cake_flavour" name="cake_flavour" required>
                                        <option value="">Select Flavour</option>
                                        <option value="Chocolate">Chocolate</option>
                                        <option value="Vanilla">Vanilla</option>
                                        <option value="Fruit">Fruit</option>
                                        <option value="Red Velvet">Red Velvet</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="cake_price" class="form-label">Price (LKR)</label>
                                    <input type="number" step="0.01" class="form-control" id="cake_price" name="cake_price" required>
                                </div>

                                <div class="mb-3">
                                    <label for="cake_size" class="form-label">Size</label>
                                    <select class="form-select" id="cake_size" name="cake_size" required>
                                        <option value="">Select Size</option>
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="image_path" class="form-label">Cake Image</label>
                                    <input type="file" class="form-control" id="image_path" name="image_path">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="cake_description" class="form-label">Description</label>
                            <textarea class="form-control" id="cake_description" name="cake_description" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Cake</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Cakes Table -->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Flavour</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cakes as $cake)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if($cake->image_path)
                                    <img src="{{ asset('storage/'.$cake->image_path) }}" alt="{{ $cake->cake_name }}" width="80" class="img-thumbnail">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $cake->cake_name }}</td>
                            <td>{{ $cake->cake_type }}</td>
                            <td>{{ $cake->cake_flavour }}</td>
                            <td>{{ $cake->cake_size }}</td>
                            <td>${{ number_format($cake->cake_price, 2) }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editCakeModal{{ $cake->id }}">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <form action="{{ route('admin.cakes.destroy', $cake->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this cake?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Edit Cake Modal -->
                        <div class="modal fade" id="editCakeModal{{ $cake->id }}" tabindex="-1" aria-labelledby="editCakeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editCakeModalLabel">Edit Cake: {{ $cake->cake_name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ route('admin.cakes.update', $cake->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="cake_name" class="form-label">Cake Name</label>
                                                        <input type="text" class="form-control" id="cake_name" name="cake_name" value="{{ $cake->cake_name }}" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="cake_type" class="form-label">Cake Type</label>
                                                        <select class="form-select" id="cake_type" name="cake_type" required>
                                                            <option value="Wedding Cakes" {{ $cake->cake_type == 'Wedding Cakes' ? 'selected' : '' }}>Wedding Cakes</option>
                                                            <option value="Birthday Cakes" {{ $cake->cake_type == 'Birthday Cakes' ? 'selected' : '' }}>Birthday Cakes</option>
                                                            <option value="Brownies" {{ $cake->cake_type == 'Brownies' ? 'selected' : '' }}>Brownies</option>
                                                            <option value="Cup Cakes" {{ $cake->cake_type == 'Cup Cakes' ? 'selected' : '' }}>Cup Cakes</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="cake_flavour" class="form-label">Flavour</label>
                                                        <select class="form-select" id="cake_flavour" name="cake_flavour" required>
                                                            <option value="Chocolate" {{ $cake->cake_flavour == 'Chocolate' ? 'selected' : '' }}>Chocolate</option>
                                                            <option value="Vanilla" {{ $cake->cake_flavour == 'Vanilla' ? 'selected' : '' }}>Vanilla</option>
                                                            <option value="Fruit" {{ $cake->cake_flavour == 'Fruit' ? 'selected' : '' }}>Fruit</option>
                                                            <option value="Red Velvet" {{ $cake->cake_flavour == 'Red Velvet' ? 'selected' : '' }}>Red Velvet</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="cake_price" class="form-label">Price ($)</label>
                                                        <input type="number" step="0.01" class="form-control" id="cake_price" name="cake_price" value="{{ $cake->cake_price }}" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="cake_size" class="form-label">Size</label>
                                                        <select class="form-select" id="cake_size" name="cake_size" required>
                                                            <option value="Small" {{ $cake->cake_size == 'Small' ? 'selected' : '' }}>Small</option>
                                                            <option value="Medium" {{ $cake->cake_size == 'Medium' ? 'selected' : '' }}>Medium</option>
                                                            <option value="Large" {{ $cake->cake_size == 'Large' ? 'selected' : '' }}>Large</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="image_path" class="form-label">Cake Image</label>
                                                        <input type="file" class="form-control" id="image_path" name="image_path">
                                                        @if($cake->image_path)
                                                            <div class="mt-2">
                                                                <small>Current Image:</small>
                                                                <img src="{{ asset('storage/'.$cake->image_path) }}" width="80" class="img-thumbnail">
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="cake_description" class="form-label">Description</label>
                                                <textarea class="form-control" id="cake_description" name="cake_description" rows="3" required>{{ $cake->cake_description }}</textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update Cake</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection