@extends('frontend.layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="container my-5">   
        <div class="row">
            <!-- Filters Column -->
            <div class="col-lg-3 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-danger text-white">
                        <h5 class="mb-0">Filter Products</h5>
                    </div>
                    
                    <div class="card-body">
                        <!-- Cake Type Filter -->
                        <div class="mb-4">
                            <h6 class="mb-3">Cake Type</h6>
                            @foreach([
                                ['id' => 'weddingCheck', 'value' => App\Models\Cake::TYPE_WEDDING, 'label' => 'Wedding Cakes'],
                                ['id' => 'birthdayCheck', 'value' => App\Models\Cake::TYPE_BIRTHDAY, 'label' => 'Birthday Cakes'],
                                ['id' => 'cupcakeCheck', 'value' => App\Models\Cake::TYPE_CUPCAKES, 'label' => 'Cupcakes'],
                                ['id' => 'brownieCheck', 'value' => 'Brownie', 'label' => 'Brownies']
                            ] as $filter)
                                <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" 
                                        value="{{ $filter['value'] }}" 
                                        id="{{ $filter['id'] }}" 
                                        data-filter-type="cake_type" 
                                        checked>
                                    <label class="form-check-label" for="{{ $filter['id'] }}">
                                        {{ $filter['label'] }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Cake Flavor Filter -->
                        <div class="mb-4">
                            <h6 class="mb-3">Flavor</h6>
                            @foreach([
                                ['id' => 'chocolateCheck', 'value' => 'Chocolate'],
                                ['id' => 'vanillaCheck', 'value' => 'Vanilla'],
                                ['id' => 'redVelvetCheck', 'value' => 'Red Velvet'],
                                ['id' => 'fruitCheck', 'value' => 'Fruit'],
                                ['id' => 'lemonCheck', 'value' => 'Lemon'],
                                ['id' => 'carrotCheck', 'value' => 'Carrot']
                            ] as $filter)
                                <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" 
                                        value="{{ $filter['value'] }}" 
                                        id="{{ $filter['id'] }}" 
                                        data-filter-type="flavor"
                                        checked>
                                    <label class="form-check-label" for="{{ $filter['id'] }}">
                                        {{ $filter['value'] }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Price Range Filter -->
                        <div class="mb-4">
                            <h6 class="mb-3">Price Range</h6>
                            @foreach([
                                ['id' => 'price1Check', 'value' => '0-20', 'label' => 'Under $20'],
                                ['id' => 'price2Check', 'value' => '20-50', 'label' => '$20 - $50'],
                                ['id' => 'price3Check', 'value' => '50-100', 'label' => '$50 - $100'],
                                ['id' => 'price4Check', 'value' => '100+', 'label' => 'Over $100']
                            ] as $filter)
                                <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" 
                                        value="{{ $filter['value'] }}" 
                                        id="{{ $filter['id'] }}" 
                                        data-filter-type="price_range"
                                        checked>
                                    <label class="form-check-label" for="{{ $filter['id'] }}">
                                        {{ $filter['label'] }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <!-- Cake Size Filter -->
                        <div class="mb-3">
                            <h6 class="mb-3">Size</h6>
                            @foreach([
                                ['id' => 'smallCheck', 'value' => 'Small'],
                                ['id' => 'mediumCheck', 'value' => 'Medium'],
                                ['id' => 'largeCheck', 'value' => 'Large'],
                                ['id' => 'xlCheck', 'value' => 'Extra Large']
                            ] as $filter)
                                <div class="form-check">
                                    <input class="form-check-input filter-checkbox" type="checkbox" 
                                        value="{{ $filter['value'] }}" 
                                        id="{{ $filter['id'] }}" 
                                        data-filter-type="size"
                                        checked>
                                    <label class="form-check-label" for="{{ $filter['id'] }}">
                                        {{ $filter['value'] }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                        <div class="d-grid gap-2">
                            <button id="resetFilters" class="btn btn-outline-secondary">Reset Filters</button>
                            <button id="applyFilters" class="btn btn-primary">Apply Filters</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Column -->
            <div class="col-lg-9">
                <!-- Products Header -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Our Cake Collection</h2>
                    
                    <div class="d-flex">
                        <!-- Sort Dropdown -->
                        <div class="dropdown me-2">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown">
                                Sort By
                            </button>
                            <ul class="dropdown-menu">
                                @foreach([
                                    ['value' => 'price-asc', 'label' => 'Price: Low to High'],
                                    ['value' => 'price-desc', 'label' => 'Price: High to Low'],
                                    ['value' => 'name-asc', 'label' => 'Name: A to Z'],
                                    ['value' => 'name-desc', 'label' => 'Name: Z to A']
                                ] as $sortOption)
                                    <li>
                                        <a class="dropdown-item sort-option" href="#" data-sort="{{ $sortOption['value'] }}">
                                            {{ $sortOption['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <!-- Search Input -->
                        <div class="input-group" style="width: 200px;">
                            <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                            <button class="btn btn-outline-secondary" type="button" id="searchButton">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Loading Indicator -->
                <div id="loadingIndicator" class="text-center my-5" style="display: none;">
                    <div class="spinner-border text-danger" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-2">Loading cakes...</p>
                </div>

                <!-- Products Grid -->
                <div class="row" id="productsContainer">
                    @include('frontend.Home.cake', ['cakes' => $cakes])
                </div>

                <!-- Pagination will be loaded via AJAX -->
                <div id="paginationContainer"></div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Current sort value
        let currentSort = '';
        
        // Apply Filters button click
        $('#applyFilters').click(function() {
            applyFilters();
        });
        
        // Reset Filters button click
        $('#resetFilters').click(function() {
            $('.filter-checkbox').prop('checked', true);
            applyFilters();
        });
        
        // Search button click
        $('#searchButton').click(function() {
            applyFilters();
        });
        
        // Search input enter key
        $('#searchInput').keypress(function(e) {
            if (e.which === 13) { // Enter key
                applyFilters();
            }
        });
        
        // Sort option click
        $('.sort-option').click(function(e) {
            e.preventDefault();
            currentSort = $(this).data('sort');
            $('#sortDropdown').text($(this).text());
            applyFilters();
        });
        
        // Checkbox change
        $('.filter-checkbox').change(function() {
            // Optional: apply filters immediately when checkbox changes
            // applyFilters();
        });
        
        function applyFilters() {
            // Show loading indicator
            $('#loadingIndicator').show();
            $('#productsContainer').hide();
            
            // Collect all filter values
            const filters = {
                cake_types: getCheckedValues('cake_type'),
                flavors: getCheckedValues('flavor'),
                price_ranges: getCheckedValues('price_range'),
                sizes: getCheckedValues('size'),
                search: $('#searchInput').val(),
                sort: currentSort
            };
            
            // Make AJAX request
            $.ajax({
                url: "{{ route('cakes.filter') }}",
                type: "GET",
                data: filters,
                success: function(response) {
                    $('#productsContainer').html(response);
                    $('#productsContainer').fadeIn();
                    $('#loadingIndicator').hide();
                    
                    // Update URL without reloading page
                    updateUrl(filters);
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    $('#loadingIndicator').hide();
                    $('#productsContainer').html('<div class="col-12"><div class="alert alert-danger">Error loading cakes. Please try again.</div></div>');
                    $('#productsContainer').fadeIn();
                }
            });
        }
        
        // Helper function to get checked values by filter type
        function getCheckedValues(filterType) {
            return $('.filter-checkbox[data-filter-type="' + filterType + '"]:checked').map(function() {
                return $(this).val();
            }).get();
        }
        
        // Update URL with current filters
        function updateUrl(filters) {
            const params = new URLSearchParams();
            
            for (const [key, value] of Object.entries(filters)) {
                if (value && value.length > 0) {
                    if (Array.isArray(value)) {
                        value.forEach(v => params.append(key, v));
                    } else {
                        params.append(key, value);
                    }
                }
            }
            
            const newUrl = window.location.pathname + (params.toString() ? '?' + params.toString() : '');
            window.history.pushState({ path: newUrl }, '', newUrl);
        }
        
        // Initial load with any URL parameters
        function loadFromUrl() {
            const urlParams = new URLSearchParams(window.location.search);
            
            // Set checkboxes from URL
            urlParams.getAll('cake_types').forEach(value => {
                $(`.filter-checkbox[data-filter-type="cake_type"][value="${value}"]`).prop('checked', true);
            });
            
            urlParams.getAll('flavors').forEach(value => {
                $(`.filter-checkbox[data-filter-type="flavor"][value="${value}"]`).prop('checked', true);
            });
            
            urlParams.getAll('price_ranges').forEach(value => {
                $(`.filter-checkbox[data-filter-type="price_range"][value="${value}"]`).prop('checked', true);
            });
            
            urlParams.getAll('sizes').forEach(value => {
                $(`.filter-checkbox[data-filter-type="size"][value="${value}"]`).prop('checked', true);
            });
            
            // Set search input
            if (urlParams.has('search')) {
                $('#searchInput').val(urlParams.get('search'));
            }
            
            // Set sort
            if (urlParams.has('sort')) {
                currentSort = urlParams.get('sort');
                const sortText = $(`.sort-option[data-sort="${currentSort}"]`).text();
                $('#sortDropdown').text(sortText);
            }
            
            // Apply filters
            applyFilters();
        }
        
        // Load filters from URL on page load
        loadFromUrl();
    });
</script>
@endpush