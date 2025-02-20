<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitaabi dunia</title>

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

</head>

<body>
    <!-- *************** Header Section **************** -->
    <nav class="navbar navbar-expand-lg py-0" style="background-color: #343a40;">
        <div class="container-fluid">

            <div class="left">
                <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                    <li class="nav-item">
                        <a id="locationLink" class="nav-link text-light px-2" href="#">📍Fetching location...</a>
                        {{--
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light px-2 dropdown-toggle" href="#" id="locationDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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


            <div class="right " style="z-index:2000;">
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
                            <ul class="dropdown-menu dropdown-menu-end" style="background-color: #fff">
                                <li>
                                    <a class="dropdown-item" style="color: black !important"
                                        href="{{ url('/profile') }}">Profile</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li> <!-- Divider Line -->
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button class="dropdown-item" type="submit" style="color: black !important">
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

    <div class="nav-2 container-fluid py-1 border-bottom bg-seceondary sticky-top"
        style="z-index: 1000; background-color: #ffffff; border-bottom: 3px solid black;">
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
                    <a href="{{ route('sell.index') }}" class="sell-btn custom-btn">➕SELL</a>
                </form>

                <div id="suggestions" class="list-group" style="z-index: 900000"></div> <!-- Suggestions List -->
            </div>

            <!-- Cart -->
            <div class="col-md-3 text-end">
                <a href="#" class="btn btn-outline-secondary text-dark">
                    <i class="bi bi-cart"></i> Cart
                </a>
            </div>
        </div>
    </div>

    {{-- Hero Section Starts --}}
    <div class="container-fluid p-0 position-relative" style="margin-bottom: 40px">
        <div class="image position-relative">
            <img src="assets/technological.jpg" class="img-fluid w-100" style="height: 80vh; object-fit: cover;"
                alt="Technology Banner">

            <!-- Semi-transparent overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.5);"></div>

            <!-- Overlay with Text and Button (With Animation) -->
            <div class="position-absolute top-50 start-50 translate-middle text-center text-white hero-text">
                <h1 class="display-4 fw-bold">Welcome to Kitaabi Duniya</h1>
                <p class="fs-5">Your Gateway to a World of Books</p>
                <a href="#" class="btn btn-primary btn-lg mt-3">Explore Books</a>
            </div>
        </div>
    </div>
    {{-- Hero Section Ends --}}


    <!-- *************** Main Section ******************-->
    <main class="">
        <center>
            <div behavior="scroll" direction="left"
                style="font-size: 30px; color: #007bff; font-weight: bold; animation: blink 2s infinite;">
                📚 Order Starts from 1 March 2025 ! Grab Your Favorite Books Now And Get Offer's! 🚀
            </div>
        </center>
        <div class="categories-section">
            <h2 class="text-center mb-4 fw-bold fs-2" style="color: red;">🏷️ Categories</h2>
            <div class="row">
                <!-- School Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-book fs-1 text-primary mb-3"></i>
                        <h4 class="mb-2">School</h4>
                        <p class="text-muted">All books from 1st to 12th standard</p>
                    </div>
                </div>

                <!-- Graduation Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-mortarboard fs-1 text-success mb-3"></i>
                        <h4 class="mb-2">Graduation</h4>
                        <p class="text-muted">All books for graduation courses</p>
                    </div>
                </div>

                <!-- General Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-globe fs-1 text-warning mb-3"></i>
                        <h4 class="mb-2">General</h4>
                        <p class="text-muted">All general books</p>
                    </div>
                </div>

                <!-- Competitive Category -->
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="category-card text-center p-4 shadow-sm rounded-lg">
                        <i class="bi bi-trophy fs-1 text-danger mb-3"></i>
                        <h4 class="mb-2">Competitive</h4>
                        <p class="text-muted">All books for competitive exams</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- *************** Books Collections*************** -->
        <div class="mt-5">
            <div class="container mt-4">
                <h2 class="text-center mb-4 mt-5 text-danger fs-1 fw-bold">📚 Books Collection</h2>

                <!-- New Books Section -->
                <div class="section-header">
                    <h4 class="mb-3 text-primary fw-bold">🔥 New Books</h4>
                </div>
                <div class="container mt-4">
                    <div class="scrolling-wrapper-flex" id="newBooksContainer"></div>
                </div>

                <!-- Most Readable Books -->
                <div class="section-header mt-5">
                    <h4 class="mb-3 text-success fw-bold">📖 Most Readable Books</h4>
                </div>
                <div class="container mt-4">
                    <div class="scrolling-wrapper-flex" id="oldBooksContainer"></div>
                </div>
            </div>
        </div>



        <!-- ----------------FAQ------------------- -->

        <div class="container mt-5">
            <h2 class="text-center text-primary fw-bold mb-4 fs-1">📖Frequently Asked Questions ?</h2>

            <div class="accordion mx-auto" id="faqAccordion" style="max-width: 800px;">
                <!-- FAQ Item 1 -->
                <div class="faq-card mb-3">
                    <div class="faq-question p-3 d-flex justify-content-between align-items-center bg-light rounded-top"
                        onclick="toggleFAQ(1)">
                        <span class="fw-medium">How can I sell or rent my books on Kitaab Duniya?</span>
                        <i id="icon1" class="bi bi-plus-lg faq-icon fs-5"></i>
                    </div>
                    <div id="faq1" class="faq-answer p-3 bg-white rounded-bottom" style="display: none;">
                        💬To sell or rent your books, you need to create an account on Kitaab Duniya. Once registered,
                        you can list your books by providing details such as title, author, condition, and price. You
                        can also specify if the book is available for rent. Buyers or renters will then be able to
                        contact you directly through the platform.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-card mb-3">
                    <div class="faq-question p-3 d-flex justify-content-between align-items-center bg-light rounded-top"
                        onclick="toggleFAQ(2)">
                        <span class="fw-medium">How do I find and buy or rent books on Kitaab Duniya?</span>
                        <i id="icon2" class="bi bi-plus-lg faq-icon fs-5"></i>
                    </div>
                    <div id="faq2" class="faq-answer p-3 bg-white rounded-bottom" style="display: none;">
                        💬You can search for books using the search bar by entering the title, author, or genre. The
                        results will show you a list of available books along with seller details. The books will be
                        sorted by proximity, so you can find the nearest sellers. You can then contact the seller
                        directly to purchase or rent the book.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-card mb-3">
                    <div class="faq-question p-3 d-flex justify-content-between align-items-center bg-light rounded-top"
                        onclick="toggleFAQ(3)">
                        <span class="fw-medium">Can I borrow books from a library through Kitaab Duniya?</span>
                        <i id="icon3" class="bi bi-plus-lg faq-icon fs-5"></i>
                    </div>
                    <div id="faq3" class="faq-answer p-3 bg-white rounded-bottom" style="display: none;">
                        💬Yes, Kitaab Duniya also facilitates book borrowing from libraries. You can search for the book
                        you need, and if it's available in a nearby library, you can issue it directly through the
                        platform. The librarian will manage the issuance and return process.

                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-card mb-3">
                    <div class="faq-question p-3 d-flex justify-content-between align-items-center bg-light rounded-top"
                        onclick="toggleFAQ(4)">
                        <span class="fw-medium">How are payments handled on Kitaab Duniya?
                        </span>
                        <i id="icon4" class="bi bi-plus-lg faq-icon fs-5"></i>
                    </div>
                    <div id="faq4" class="faq-answer p-3 bg-white rounded-bottom" style="display: none;">
                        💬Payments are handled directly between the buyer and the seller or the renter and the lender.
                        Kitaab Duniya does not process payments but provides a platform for users to connect and
                        negotiate terms. You can choose any payment method that is convenient for both parties, such as
                        cash, bank transfer, or digital wallets. </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-card mb-3">
                    <div class="faq-question p-3 d-flex justify-content-between align-items-center bg-light rounded-top"
                        onclick="toggleFAQ(5)">
                        <span class="fw-medium">What should I do if I have an issue with a seller or a rented
                            book?</span>
                        <i id="icon5" class="bi bi-plus-lg faq-icon fs-5"></i>
                    </div>
                    <div id="faq5" class="faq-answer p-3 bg-white rounded-bottom" style="display: none;">
                        💬If you encounter any issues with a seller or a rented book, you can report the problem through
                        the Kitaab Duniya platform. The support team will assist in resolving the issue. It's also
                        recommended to communicate clearly with the seller or renter to avoid misunderstandings.<span
                            style="color: blue;">support@kitabbiduniya.com</span>
                    </div>
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

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register as Individual</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="male"
                                        required>
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="female"
                                        required>
                                    <label class="form-check-label">Female</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="other"
                                        required>
                                    <label class="form-check-label">Other</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('login') }}" class="text-decoration-none">Already registered?</a>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Include the login.blade.php content here -->
                    @include('auth.login')
                </div>
            </div>
        </div>
    </div>

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
        document.addEventListener("DOMContentLoaded", function() {
            let searchBox = document.getElementById("searchBox");
            let suggestionsDiv = document.getElementById("suggestions");

            searchBox.addEventListener("input", function() {
                let query = searchBox.value.trim(); // Extra spaces remove kare

                if (query.length > 1) {
                    fetch(`/search_books?query=${query}`)
                        .then(response => response.json())
                        .then(data => {
                            suggestionsDiv.innerHTML = ""; // Purane suggestions hatao

                            if (data.length === 0) {
                                let noResult = document.createElement("div");
                                noResult.classList.add("list-group-item");
                                noResult.textContent = "No books found";
                                suggestionsDiv.appendChild(noResult);
                                return;
                            }

                            data.forEach(book => {
                                let suggestionItem = document.createElement("a");
                                suggestionItem.href = `/search_books/${book.type}/${book.id}`;
                                suggestionItem.classList.add("list-group-item",
                                    "list-group-item-action");
                                suggestionItem.textContent = `${book.name} (${book.type})`;
                                suggestionsDiv.appendChild(suggestionItem);
                            });
                        })
                        .catch(error => console.error("Error fetching books:", error));
                } else {
                    suggestionsDiv.innerHTML = "";
                }
            });
        });
    </script>
</body>

</html>
