<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitabi dunia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <style>
        .profile-section img {
            width: 100px;
            /* Fixed width */
            height: 100px;
            /* Fixed height */
            border-radius: 50%;
            /* Makes the image circular */
            object-fit: cover;
            /* Ensures the image covers the area without stretching */
            border: 2px solid #ddd;
            /* Optional: Adds a border around the image */


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
         /* Improve Card Look */
    .book-card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #fff;
        border: none;
    }

    .book-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    }

    /* Image Styling */
    .book-img {
        height: 220px;
        object-fit: cover;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    /* Price Styling */
    .price-tag {
        font-size: 18px;
        font-weight: bold;
        color: #d9534f;
        margin-bottom: 10px;
    }

    /* Button Group */
    .btn-group {
        display: flex;
        gap: 10px;
    }

    .btn-group .btn {
        flex-grow: 1;
        border-radius: 8px;
        font-weight: bold;
        transition: all 0.3s ease-in-out;
    }

    .btn-success:hover {
        background: #218838;
    }

    .btn-primary:hover {
        background: #0069d9;
    }

    body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .register-container {
            max-width: 1200px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        a {
            color: #007bff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .form-check {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-check-input {
            margin: 0;
        }

        .form-control[type="file"] {
            padding: 5px;
        }

        /* Floating Animation for Form
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .register-container {
            animation: float 3s ease-in-out infinite;
        } */
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


     <!-- Main Content -->
     <main class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="register-container">
                    <h2>Register</h2>
                    <form id="registerForm" method="POST" action="{{ route('org_request.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Full Name -->
                            <div class="col-md-3 form-group">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-3 form-group">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Phone Number -->
                            <div class="col-md-3 form-group">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>

                            <!-- Address -->
                            <div class="col-md-3 form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>

                            <!-- Gender -->
                            <div class="col-md-3 form-group">
                                <label class="form-label">Gender</label>
                                <div class="d-flex gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="male" required>
                                        <label class="form-check-label">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="female" required>
                                        <label class="form-check-label">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="other" required>
                                        <label class="form-check-label">Other</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Organization License -->
                            <div class="col-md-3 form-group">
                                <label for="org_licence" class="form-label">Organization License</label>
                                <input type="file" class="form-control" id="org_licence" name="org_licence">
                            </div>

                            <!-- Password -->
                            <div class="col-md-3 form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <!-- Confirm Password -->
                            <div class="col-md-3 form-group">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('login') }}" class="text-decoration-none">Already registered?</a>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    


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
    

</body>

</html>
