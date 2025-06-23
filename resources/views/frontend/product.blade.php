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
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Wedding" id="weddingCheck" checked>
                                <label class="form-check-label" for="weddingCheck">
                                    Wedding Cakes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Birthday" id="birthdayCheck" checked>
                                <label class="form-check-label" for="birthdayCheck">
                                    Birthday Cakes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Cupcake" id="cupcakeCheck" checked>
                                <label class="form-check-label" for="cupcakeCheck">
                                    Cupcakes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Brownie" id="brownieCheck" checked>
                                <label class="form-check-label" for="brownieCheck">
                                    Brownies
                                </label>
                            </div>
                        </div>

                        <!-- Cake Flavor Filter -->
                        <div class="mb-4">
                            <h6 class="mb-3">Flavor</h6>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Chocolate" id="chocolateCheck" checked>
                                <label class="form-check-label" for="chocolateCheck">
                                    Chocolate
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Vanilla" id="vanillaCheck" checked>
                                <label class="form-check-label" for="vanillaCheck">
                                    Vanilla
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Red Velvet" id="redVelvetCheck" checked>
                                <label class="form-check-label" for="redVelvetCheck">
                                    Red Velvet
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Fruit" id="fruitCheck" checked>
                                <label class="form-check-label" for="fruitCheck">
                                    Fruit
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Lemon" id="lemonCheck" checked>
                                <label class="form-check-label" for="lemonCheck">
                                    Lemon
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Carrot" id="carrotCheck" checked>
                                <label class="form-check-label" for="carrotCheck">
                                    Carrot
                                </label>
                            </div>
                        </div>

                        <!-- Price Range Filter -->
                        <div class="mb-4">
                            <h6 class="mb-3">Price Range</h6>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="0-20" id="price1Check" checked>
                                <label class="form-check-label" for="price1Check">
                                    Under $20
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="20-50" id="price2Check" checked>
                                <label class="form-check-label" for="price2Check">
                                    $20 - $50
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="50-100" id="price3Check" checked>
                                <label class="form-check-label" for="price3Check">
                                    $50 - $100
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="100+" id="price4Check" checked>
                                <label class="form-check-label" for="price4Check">
                                    Over $100
                                </label>
                            </div>
                        </div>

                        <!-- Cake Size Filter -->
                        <div class="mb-3">
                            <h6 class="mb-3">Size</h6>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Small" id="smallCheck" checked>
                                <label class="form-check-label" for="smallCheck">
                                    Small
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Medium" id="mediumCheck" checked>
                                <label class="form-check-label" for="mediumCheck">
                                    Medium
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Large" id="largeCheck" checked>
                                <label class="form-check-label" for="largeCheck">
                                    Large
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input filter-checkbox" type="checkbox" value="Extra Large" id="xlCheck" checked>
                                <label class="form-check-label" for="xlCheck">
                                    Extra Large
                                </label>
                            </div>
                        </div>

                        <button id="resetFilters" class="btn btn-outline-secondary w-100 mt-2">Reset Filters</button>
                        <button id="applyFilters" class="btn btn-primary w-100 mt-2">Apply Filters</button>
                    </div>
                </div>
            </div>

            <!-- Products Column -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Our Cake Collection</h2>
                    <div class="d-flex">
                        <div class="dropdown me-2">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown">
                                Sort By
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item sort-option" href="#" data-sort="price-asc">Price: Low to High</a></li>
                                <li><a class="dropdown-item sort-option" href="#" data-sort="price-desc">Price: High to Low</a></li>
                                <li><a class="dropdown-item sort-option" href="#" data-sort="name-asc">Name: A to Z</a></li>
                                <li><a class="dropdown-item sort-option" href="#" data-sort="name-desc">Name: Z to A</a></li>
                            </ul>
                        </div>
                        <div class="input-group" style="width: 200px;">
                            <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row" id="productsContainer">
                    <!-- Products will be dynamically inserted here -->
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
  @endsection
    
    <!-- Custom JavaScript for filtering -->
    <script>
        // Sample product data with 12 cake items
        const products = [
            { id: 1, name: "Classic Wedding Cake", type: "Wedding", flavor: "Vanilla", price: 120, size: "Large", image: "https://michaelcaswell.com/wp-content/uploads/sites/52693/2025/02/north-cole1027-Zoes-scaled.jpg" },
            { id: 2, name: "Chocolate Birthday Cake", type: "Birthday", flavor: "Chocolate", price: 45, size: "Medium", image: "https://cdn.sprinklebakes.com/media/2023/08/Death-By-Chocolate-Cake-2.jpg" },
            { id: 3, name: "Red Velvet Cupcakes (6 pack)", type: "Cupcake", flavor: "Red Velvet", price: 18, size: "Small", image: "{{asset('frontend/images/cupcakes/cupcake8.jpg')}}" },
            { id: 4, name: "Fudge Brownies (12 pack)", type: "Brownie", flavor: "Chocolate", price: 12, size: "Small", image: "https://images.unsplash.com/photo-1564355808539-22fda35bed7e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1632&q=80" },
            { id: 5, name: "Rustic Wedding Cake", type: "Wedding", flavor: "Fruit", price: 150, size: "Extra Large", image: "https://media-api.xogrp.com/images/bee4ab38-3ba8-4f85-8c5e-3ea2dd112357~rs_768.h" },
            { id: 6, name: "Vanilla Birthday Cake", type: "Birthday", flavor: "Vanilla", price: 35, size: "Medium", image: "{{asset('frontend/images/cake/5.jpg')}}" },
            { id: 7, name: "Chocolate Cupcakes (12 pack)", type: "Cupcake", flavor: "Chocolate", price: 15, size: "Small", image: "https://images.unsplash.com/photo-1603532648955-039310d9ed75?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80" },
            { id: 8, name: "Walnut Brownies (6 pack)", type: "Brownie", flavor: "Chocolate", price: 14, size: "Small", image: "https://img.kidspot.com.au/uUYNJOEF/w1200-h1200-cfill-q80/kk/2015/03/walnut-brownies-recipe-606095-2.jpg" },
            { id: 9, name: "Lemon Drizzle Cake", type: "Birthday", flavor: "Lemon", price: 28, size: "Medium", image: "https://hips.hearstapps.com/goodhousekeeping-uk/main/embedded/48129/vegan-lemon-drizzle.png?crop=1.00xw:1.00xh;0,0&resize=1200:*"},
            { id: 10, name: "Carrot Cake", type: "Birthday", flavor: "Carrot", price: 32, size: "Medium", image: "https://i0.wp.com/baketotheroots.de/wp-content/uploads/2024/03/SQ_240320_Baked-Carrot-Cake-Cheesecake.jpg?fit=1200%2C1200&ssl=1" },
            { id: 11, name: "Mini Cupcake Assortment (24)", type: "Cupcake", flavor: "Vanilla", price: 22, size: "Small", image: "https://images.unsplash.com/photo-1614707267537-b85aaf00c4b7?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=80" },
            { id: 12, name: "Blondie Brownies (9 pack)", type: "Brownie", flavor: "Vanilla", price: 16, size: "Small", image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYo80qFOD51qmOwf3OyzxsI1DHGkp8dwPigw&s" }
        ];

        // Function to render products
        function renderProducts(productsToRender) {
            const container = document.getElementById('productsContainer');
            container.innerHTML = '';
            
            if (productsToRender.length === 0) {
                container.innerHTML = '<div class="col-12 text-center py-5"><h4>No products match your filters</h4><p>Try adjusting your filter criteria</p></div>';
                return;
            }
            
            productsToRender.forEach(product => {
                const priceRange = getPriceRange(product.price);
                const card = document.createElement('div');
                card.className = 'col-md-4 mb-4';
                card.setAttribute('data-type', product.type);
                card.setAttribute('data-flavor', product.flavor);
                card.setAttribute('data-price-range', priceRange);
                card.setAttribute('data-size', product.size);
                card.innerHTML = `
                    <div class="card h-100 shadow-sm">
                        <img src="${product.image}" class="card-img-top" alt="${product.name}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">${product.name}</h5>
                            <p class="card-text mb-1"><strong>Type:</strong> ${product.type}</p>
                            <p class="card-text mb-1"><strong>Flavor:</strong> ${product.flavor}</p>
                            <p class="card-text mb-1"><strong>Size:</strong> ${product.size}</p>
                            <p class="card-text"><strong>Price:</strong> $${product.price}</p>
                        </div>
                        <div class="card-footer bg-white">
                            <button class="btn btn-primary w-100">Add to Cart</button>
                        </div>
                    </div>
                `;
                container.appendChild(card);
            });
        }

        // Function to get price range
        function getPriceRange(price) {
            if (price < 20) return '0-20';
            if (price < 50) return '20-50';
            if (price < 100) return '50-100';
            return '100+';
        }

        // Function to filter products
        function filterProducts() {
            // Get selected filters
            const selectedTypes = Array.from(document.querySelectorAll('input[value="Wedding"], input[value="Birthday"], input[value="Cupcake"], input[value="Brownie"]:checked')).map(el => el.value);
            const selectedFlavors = Array.from(document.querySelectorAll('input[value="Chocolate"], input[value="Vanilla"], input[value="Red Velvet"], input[value="Fruit"], input[value="Lemon"], input[value="Carrot"]:checked')).map(el => el.value);
            const selectedPriceRanges = Array.from(document.querySelectorAll('input[value="0-20"], input[value="20-50"], input[value="50-100"], input[value="100+"]:checked')).map(el => el.value);
            const selectedSizes = Array.from(document.querySelectorAll('input[value="Small"], input[value="Medium"], input[value="Large"], input[value="Extra Large"]:checked')).map(el => el.value);
            
            // Filter products
            const filteredProducts = products.filter(product => {
                const priceRange = getPriceRange(product.price);
                return selectedTypes.includes(product.type) && 
                       selectedFlavors.includes(product.flavor) && 
                       selectedPriceRanges.includes(priceRange) && 
                       selectedSizes.includes(product.size);
            });
            
            // Sort products if needed
            const sortOption = document.querySelector('.dropdown-item.active')?.dataset.sort;
            if (sortOption) {
                sortProducts(filteredProducts, sortOption);
            } else {
                renderProducts(filteredProducts);
            }
        }

        // Function to sort products
        function sortProducts(productsToSort, sortOption) {
            let sortedProducts = [...productsToSort];
            
            switch(sortOption) {
                case 'price-asc':
                    sortedProducts.sort((a, b) => a.price - b.price);
                    break;
                case 'price-desc':
                    sortedProducts.sort((a, b) => b.price - a.price);
                    break;
                case 'name-asc':
                    sortedProducts.sort((a, b) => a.name.localeCompare(b.name));
                    break;
                case 'name-desc':
                    sortedProducts.sort((a, b) => b.name.localeCompare(a.name));
                    break;
            }
            
            renderProducts(sortedProducts);
        }

        // Function to reset all filters
        function resetFilters() {
            document.querySelectorAll('.filter-checkbox').forEach(checkbox => {
                checkbox.checked = true;
            });
            document.getElementById('applyFilters').classList.remove('btn-warning');
            document.getElementById('applyFilters').textContent = 'Apply Filters';
            filterProducts();
        }

        // Function to search products
        function searchProducts() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            if (!searchTerm) {
                filterProducts();
                return;
            }
            
            const filteredProducts = products.filter(product => 
                product.name.toLowerCase().includes(searchTerm) ||
                product.type.toLowerCase().includes(searchTerm) ||
                product.flavor.toLowerCase().includes(searchTerm));
            
            renderProducts(filteredProducts);
        }

        // Event listeners
        document.addEventListener('DOMContentLoaded', () => {
            // Initial render
            renderProducts(products);
            
            // Filter checkbox changes
            document.querySelectorAll('.filter-checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    // Update the apply button to show filters need to be applied
                    document.getElementById('applyFilters').classList.add('btn-warning');
                    document.getElementById('applyFilters').textContent = 'Apply Filters*';
                });
            });
            
            // Apply filters button
            document.getElementById('applyFilters').addEventListener('click', () => {
                filterProducts();
                // Reset the button state
                document.getElementById('applyFilters').classList.remove('btn-warning');
                document.getElementById('applyFilters').textContent = 'Apply Filters';
            });
            
            // Sort option click
            document.querySelectorAll('.sort-option').forEach(option => {
                option.addEventListener('click', (e) => {
                    e.preventDefault();
                    document.querySelectorAll('.sort-option').forEach(el => el.classList.remove('active'));
                    e.target.classList.add('active');
                    filterProducts();
                });
            });
            
            // Reset filters
            document.getElementById('resetFilters').addEventListener('click', resetFilters);
            
            // Search input
            document.getElementById('searchInput').addEventListener('input', searchProducts);
        });
    </script>
</body>
</html>