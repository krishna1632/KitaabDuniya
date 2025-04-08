<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Listing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .book-card {
            transition: 0.3s;
        }

        .book-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .sort-options a {
            text-decoration: none;
            padding: 5px 10px;
            color: #000;
            font-weight: bold;
            transition: 0.3s;
        }

        .sort-options a:hover,
        .sort-options a.active {
            color: blue;
            border-bottom: 2px solid blue;
        }

        .footer {
            background-color: rgba(82, 85, 85, 0.544);
            /* Dark blue background */
            color: #fff;
            padding: 40px 0;
            margin-top: 70px;

        }

        .title-line h2 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .social-icons a {
            color: #fff;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #3498db;
            /* Change color on hover */
        }

        .footer-links a {
            color: #bdc3c7;
            /* Light gray for links */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #3498db;
            /* Change color on hover */
        }

        .newsletter-form .form-control {
            background-color: #f8f8f8;
            /* Slightly lighter dark blue */
            border: none;
            color: #fff;
        }

        .newsletter-form .btn {
            background-color: #2e2e30;
            /* Blue button */
            border: none;
            transition: background-color 0.3s ease;
        }

        .newsletter-form .btn:hover {
            background-color: #111113;
            /* Darker blue on hover */
        }

        .footer-bottom {
            border-top: 1px solid #34495e;
            /* Divider line */
            padding-top: 20px;
        }

        .facebook i {
            color: #1877F2;
        }

        .twitter i {
            color: #000000;
        }

        .instagram i {
            color: #E4405F;
        }

        .linkedin i {
            color: #0077B5;
        }

        .youtube i {
            color: #FF0000;
        }

        .price-range {
            margin: 20px 0;
        }

        .price-range label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .price-range input[type="range"] {
            width: 100%;
        }

        .price-range .range-values {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .price-range .range-values span {
            font-size: 14px;
            color: #555;
        }

        input[type="range"] {
            width: 100%;
            -webkit-appearance: none;
            height: 8px;
            border-radius: 4px;
            background: linear-gradient(to right, #007bff 100%, #ddd 0%);
            outline: none;
            transition: background 0.15s ease-in-out;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #007bff;
            cursor: pointer;
        }

        input[type="range"]::-moz-range-thumb {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #007bff;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- *************** Header Section **************** -->
    <nav class="navbar navbar-expand-lg py-0" style="background-color: #343a40;">
        <div class="container-fluid">

            <div class="left">
                <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                    <li class="nav-item">
                        <a id="locationLink" class="nav-link text-light px-2" href="#">📍Fetching location...</a>
                        {{-- <li class="nav-item dropdown">
                    <a class="nav-link text-light px-2 dropdown-toggle" href="#" id="locationDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        🔍
                        Location
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="locationDropdown" id="locationMenu">
                        <li><a class="dropdown-item" href="#" id="useCurrentLocation">📍 Use Current
                                Location</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#" id="popularCities">🏙️ Most Popular Cities</a>
                        </li>
                        <!-- Popular cities will be dynamically added here -->
                    </ul>
                </li> --}}
                    <li class="nav-item">
                        <a class="nav-link text-light px-2" href="#">📝About Us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light px-2" href="#foot">📞Contact Us</a>
                    </li>
                </ul>
            </div>


            <div class="right " style="z-index:200000;">
                <ul class="navbar-nav ms-auto mb-1 mb-lg-0">
                    @auth
                        <!-- Dashboard and User Dropdown Menu for Logged-in Users -->
                        <li class="nav-item">
                            <a class="nav-link text-light px-2" href="#"><i class="bi bi-person-circle"></i></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light px-2" href="#" role="button"
                                data-bs-toggle="dropdown">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="{{ url('/') }}">Back</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li> <!-- Divider Line -->
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item" type="submit">
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <!-- Login and Register Options for Guests -->
                        <li class="nav-item">
                            <a class="nav-link text-light px-2" href="#" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Login</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="nav-item dropdown">
                                <a class="nav-link text-light px-2 dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Register
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#" id="individualRegister">Individual</a></li>
                                    <li><a class="dropdown-item" href="{{ route('org_request.create') }}">Organisation</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>

    </nav>

    <div class="container-fluid py-1 border-bottom bg-seceondary sticky-top"
        style="z-index:10000; background-color: #fff;">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-md-3 text-start">
                <img src="/assets/nav_logo.png" alt="Logo" class="img-fluid ms-3" width="180px">
            </div>
            <!-- Search Bar -->
            <div class="col-md-6">
                <form class="d-flex">
                    <input class="form-control me-2 rounded-3" type="search" id="searchBox"
                        placeholder="Search Ex.... 'Delhi'" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
            <!-- Cart -->
            <div class="col-md-3 text-end">
                <a href="#" class="btn btn-outline-secondary text-dark">
                    <i class="bi bi-cart"></i> Cart
                </a>
            </div>
        </div>
    </div>
    {{-- End header section --}}

    <div class="container mt-4 p-0">
        <div class="row">
            <!-- Sidebar Filters -->
            <div class="col-md-3">
                <div class="card p-3 shadow">
                    <h5 class="fw-bold">Filters</h5>
                    <hr>
                    <p class="fw-bold">Category</p>
                    <ul class="list-unstyled">
                        <li>
                            <input type="checkbox" id="schoolCheckbox"> School
                            <!-- Dropdown for class selection (hidden by default) -->
                            <select id="classSelector" class="form-control mt-2 d-none">
                                <option value="">Select Class</option>
                                @for ($i = 1; $i <= 12; $i++)
                                    <option value="Class {{ $i }}">Class {{ $i }}</option>
                                @endfor
                            </select>
                        </li>
                        <li><input type="checkbox" id="graduationCheckbox"> Graduation</li>
                        <li><input type="checkbox" id="generalCheckbox"> General</li>
                        <li><input type="checkbox" id="competitiveCheckbox"> Competitive</li>
                    </ul>
                    <hr>
                    <div class="price-range">
                        <label for="priceRange">Price Range</label>
                        <input type="range" id="priceRange" name="priceRange" min="0" max="1000"
                            value="1000">
                        <div class="range-values">
                            <span id="minValue">₹0</span>
                            <span id="maxValue">₹1000+</span>
                        </div>

                        <!-- Min and Max Price Dropdowns -->
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="minPrice">Min Price</label>
                                <select class="form-control" id="minPrice">
                                    <option value="0" selected>₹0</option>
                                    <option value="100">₹100</option>
                                    <option value="200">₹200</option>
                                    <option value="500">₹500</option>
                                    <option value="1000">₹1000</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="maxPrice">Max Price</label>
                                <select class="form-control" id="maxPrice">
                                    <option value="100">₹100</option>
                                    <option value="200">₹200</option>
                                    <option value="500">₹500</option>
                                    <option value="1000">₹1000</option>
                                    <option value="1000+" selected>₹1000+</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Books Grid -->
            <div class="col-md-9 shadow" style="border: 1px solid rgb(209, 207, 207); border-radius: 5px;">
                <!-- Sort Options -->
                <div class="d-flex justify-content-between align-items-center mb-3 mt-2">
                    <h5>Showing <span id="bookCount">{{ count($allBooks) }}</span> results</h5>
                    <div class="sort-options d-flex gap-3">
                        <a href="#" class="active">Relevance</a>
                        <a href="#">Popularity</a>
                        <a href="#">Price -- Low to High</a>
                        <a href="#">Price -- High to Low</a>
                        <a href="#">Newest First</a>
                    </div>
                </div>

                <div class="row" id="bookGrid">
                    @foreach ($allBooks as $book)
                        <div class="col-md-4 mb-4 book-item" data-price="{{ $book->price }}"
                            data-class="{{ $book->type === 'school' ? $book->class : '' }}">
                            <div class="card shadow-sm book-card">
                                <img src="{{ $book->photos ? asset('storage/' . $book->photos) : asset('default-book.jpg') }}"
                                    class="card-img-top" alt="Book Image">
                                <hr style="font-weight: 800;">
                                <div class="card-body">
                                    <h5 class="text-primary">{{ $book->name }}</h5>
                                    <p class="text-muted">{{ ucfirst($book->type) }}</p>
                                    <p class="fw-bold text-danger">₹{{ $book->price }}</p>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-sm btn-success">Add to Cart</button>
                                        <button class="btn btn-sm btn-primary">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if (count($allBooks) == 0)
                        <div class="col-12 text-center">
                            <h4>No books found.</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- *************** Footer Section ****************** -->
    <footer class="footer" id="foot">
        <div class="container">
            <!-- Title Line -->
            <div class="title-line text-center mb-4">
                <h2 class="text-light" style="font-family: 'Merriweather', serif; font-weight: 700;">Kitaabi Duniya
                </h2>
                <p class="text-muted" style="font-size: 1.1rem;">Your Gateway to a World of Books</p>
            </div>

            <!-- Social Icons -->
            <div class="social-icons text-center my-5">
                <a href="#" class="facebook mx-3"><i class="fab fa-facebook fa-2x "></i></a>
                <a href="#" class="twitter mx-3"><i class="fab fa-x-twitter fa-2x"></i></a>
                <a href="#" class="instagram mx-3"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" class="linkedin mx-3"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="#" class="youtube mx-3"><i class="fab fa-youtube fa-2x"></i></a>
            </div>

            <!-- Footer Links -->
            <footer>
                <div class="footer-links row text-center mb-4">
                    <div class="col-md-3 mb-3">
                        <h5 class="text-light mb-3">Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-muted">Home</a></li>
                            <li><a href="#" class="text-muted">Shop</a></li>
                            <li><a href="#" class="text-muted">Categories</a></li>
                            <li><a href="#" class="text-muted">Best Sellers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h5 class="text-light mb-3">Customer Care</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-muted">Contact Us</a></li>
                            <li><a href="#" class="text-muted">FAQs</a></li>
                            <li><a href="#" class="text-muted">Shipping Policy</a></li>
                            <li><a href="#" class="text-muted">Returns & Refunds</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h5 class="text-light mb-3">About Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-muted">Our Story</a></li>
                            <li><a href="#" class="text-muted">Careers</a></li>
                            <li><a href="#" class="text-muted">Blog</a></li>
                            <li><a href="#" class="text-muted">Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h5 class="text-light mb-3">Newsletter</h5>
                        <form class="newsletter-form">
                            <input type="email" class="form-control mb-2" placeholder="Enter your email">
                            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                        </form>
                    </div>
                </div>

                <!-- Footer Bottom -->
                <div class="footer-bottom row text-center py-3">
                    <div class="col-md-12">
                        <p class="text-muted mb-0">© 2025 Kitaabi Duniya. All rights reserved.</p>
                        <p class="text-muted mb-0"><a href="#" class="text-muted">Privacy Policy</a> | <a
                                href="#" class="text-muted">Terms of Service</a></p>
                    </div>
                </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('#loginForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(response) {
                        // Handle success response
                        if (response.success) {
                            window.location.href = "{{ route('dashboard') }}";
                        } else {
                            alert('Login failed');
                        }
                    },
                    error: function(xhr) {
                        // Handle error
                        alert('An error occurred');
                    }
                });
            });
        });
    </script>

    <script>
        document.getElementById('individualRegister').addEventListener('click', function(event) {
            event.preventDefault();
            var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
            registerModal.show();
        });
    </script>
    <script>
        function toggleFAQ(index) {
            var answer = document.getElementById('faq' + index);
            var icon = document.getElementById('icon' + index);

            if (answer.style.display === 'none' || answer.style.display === '') {
                answer.style.display = 'block';
                icon.classList.remove('bi-plus-lg');
                icon.classList.add('bi-dash-lg');
            } else {
                answer.style.display = 'none';
                icon.classList.remove('bi-dash-lg');
                icon.classList.add('bi-plus-lg');
            }
        }
    </script>
    <!-- Include SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete() {
            Swal.fire({
                title: "Are you sure?",
                text: "This action cannot be undone!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form').submit();
                }
            });
        }
    </script>
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                document.getElementById("locationLink").innerHTML = "Geolocation not supported";
            }
        }

        function showPosition(position) {
            let lat = position.coords.latitude;
            let lon = position.coords.longitude;

            // OpenStreetMap Reverse Geocoding API
            let url = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`;

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    let fullLocation = data.display_name || "Unknown Location";
                    let shortLocation = fullLocation.split(',')[0]; // Extract the first part of the location
                    let locationLink = document.getElementById("locationLink");

                    // Set the short location as text and full location as title (hover text)
                    locationLink.innerHTML = `📍 ${shortLocation} |`;
                    locationLink.setAttribute("title", fullLocation); // Full address on hover
                })
                .catch(error => {
                    document.getElementById("locationLink").innerHTML = "📍 Location not found";
                });
        }

        function showError(error) {
            document.getElementById("locationLink").innerHTML = "📍 Location not available";
        }

        getLocation(); // Auto-fetch location
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const priceRange = document.getElementById('priceRange');
            const minPrice = document.getElementById('minPrice');
            const maxPrice = document.getElementById('maxPrice');
            const minValue = document.getElementById('minValue');
            const maxValue = document.getElementById('maxValue');
            const bookGrid = document.getElementById('bookGrid');
            const bookCount = document.getElementById('bookCount');

            let currentMin = 0;
            let currentMax = 1000;

            // Function to update slider range and UI
            function updateRangeSlider() {
                let selectedMin = parseInt(minPrice.value);
                let selectedMax = maxPrice.value === "1000+" ? 1000 : parseInt(maxPrice.value);

                if (selectedMin > selectedMax) {
                    alert("Minimum price cannot be greater than maximum price.");
                    minPrice.value = currentMin;
                    maxPrice.value = "1000+";
                    return;
                }

                currentMin = selectedMin;
                currentMax = selectedMax;

                priceRange.min = currentMin;
                priceRange.max = currentMax;
                priceRange.value = currentMax;

                minValue.textContent = `₹${currentMin}`;
                maxValue.textContent = currentMax === 1000 ? "₹1000+" : `₹${currentMax}`;

                updateSliderFill();
                filterBooks();
            }

            // Function to update slider fill
            function updateSliderFill() {
                let minPercent = ((currentMin - 0) / (1000 - 0)) * 100;
                let maxPercent = ((currentMax - 0) / (1000 - 0)) * 100;
                priceRange.style.background =
                    `linear-gradient(to right, #ddd ${minPercent}%, #007bff ${minPercent}% ${maxPercent}%, #ddd ${maxPercent}%)`;
            }

            // Function to filter books based on price range
            function filterBooks() {
                const books = document.querySelectorAll('.book-item');
                let visibleCount = 0;

                books.forEach(book => {
                    const bookPrice = parseFloat(book.getAttribute('data-price'));
                    if (bookPrice >= currentMin && bookPrice <= currentMax) {
                        book.style.display = 'block';
                        visibleCount++;
                    } else {
                        book.style.display = 'none';
                    }
                });

                bookCount.textContent = visibleCount;
            }

            // Event listeners for price range changes
            minPrice.addEventListener('change', updateRangeSlider);
            maxPrice.addEventListener('change', updateRangeSlider);
            priceRange.addEventListener('input', function() {
                currentMax = parseInt(this.value);
                maxValue.textContent = currentMax === 1000 ? "₹1000+" : `₹${currentMax}`;
                updateSliderFill();
                filterBooks();
            });

            // Initialize slider filled state
            updateRangeSlider();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const schoolCheckbox = document.getElementById('schoolCheckbox');
            const classSelector = document.getElementById('classSelector');
            const bookGrid = document.getElementById('bookGrid');
            const bookCount = document.getElementById('bookCount');

            // Show/hide class selector when school checkbox is clicked
            schoolCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    classSelector.classList.remove('d-none'); // Show dropdown
                } else {
                    classSelector.classList.add('d-none'); // Hide dropdown
                    filterBooksByClass(''); // Reset filtering
                }
            });

            // Filter books when a class is selected
            classSelector.addEventListener('change', function() {
                const selectedClass = this.value;
                console.log('Selected Class:', selectedClass); // Debugging
                filterBooksByClass(selectedClass);
            });

            // Function to filter books by class
            function filterBooksByClass(selectedClass) {
                const books = document.querySelectorAll('.book-item');
                let visibleCount = 0;

                books.forEach(book => {
                    const bookClass = book.getAttribute('data-class'); // Get the class of the book
                    console.log('Book Class:', bookClass); // Debugging

                    if (!selectedClass || bookClass === selectedClass) {
                        book.style.display = 'block'; // Show the book
                        visibleCount++;
                    } else {
                        book.style.display = 'none'; // Hide the book
                    }
                });

                bookCount.textContent = visibleCount; // Update the book count
                console.log('Visible Books:', visibleCount); // Debugging
            }
        });
    </script>
</body>

</html>
