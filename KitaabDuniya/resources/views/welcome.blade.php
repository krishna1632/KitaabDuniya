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
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

    <style>
      .footer {
        margin-top: 50px;
          background-color: #f8f9fa;
          padding: 20px 0;
          text-align: center;
          line-height: 50px;
      }
      .footer .line {
          width: 100%;
          height: 2px;
          background-color: #ccc;
          margin: 10px 0;
      }
      .footer .title-line {
          display: flex;
          align-items: center;
          justify-content: center;
          gap: 15px;
      }
      .footer .title-line::before,
      .footer .title-line::after {
          content: "";
          flex: 1;
          height: 2px;
          background-color: #ccc;
      }
      .footer h5 {
          margin: 0;
          font-weight: bold;
      }
      .footer .social-icons a {
          color: #000;
          margin: 10px 15px;
          text-decoration: none;
          font-size: 20px;
      }
      .footer .social-icons a:hover {
          color: #007bff;
      }
      .footer-bottom {
          margin-top: 30px;
          font-size: 15px;
          color: #777;
      }
      .footer-bottom a{
        text-decoration: none;
        color: black;
      }
  </style>

</head>

<body>


  <!-- *************** Header Section **************** -->
<nav class="navbar navbar-expand-lg bg-dark py-0">
    <div class="container-fluid">
        <div class="left">
            <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light px-2" href="#">Location |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light px-2" href="#">About Us |</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light px-2" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
        
        <div class="right">
            <ul class="navbar-nav ms-auto mb-1 mb-lg-0">
                @auth
                    <li class="nav-item">
                        <a class="nav-link text-light px-2" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-light px-2" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <span class="nav-link text-light px-2">|</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light px-2" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid py-1 border-bottom bg-seceondary">
    <div class="row align-items-center">
        <!-- Logo -->
        <div class="col-md-3 text-start">
            <img src="https://tse3.mm.bing.net/th?id=OIP.5bMrEJU6YvsMumkmj4WpGgHaGH&pid=Api&P=0&h=180" alt="Logo" class="img-fluid" width="50px">
        </div>
        <!-- Search Bar -->
        <div class="col-md-6">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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

<div class="container-fluid p-0">
  <div class="image">
      <img src="assets/technological.jpg" class="img-fluid w-100 mb-10" style="display: block;" alt="Technology Banner">
  </div>
</div>


  

  <!-- *************** Main Section ******************-->

  <main class="">
    <h2 class="text-center text-warning">Catagories</h2>

    <div class="d-flex">

      <div class="d-flex mt-5 border-bottom border-dark-subtle " style="max-width: 450px; margin-left: 200px;">
        <div><img src="assets/book.jpg" alt="Book Image" class="img-fluid d-block mx-auto"
            style="width: 60px; height: 60px; object-fit: cover;"></div>

        <div class="mt-2 ms-3">
          <h4>School</h4>
          <p>all books of class 1th standard to 12th</p>
        </div>
      </div>


      <div class="d-flex mt-5 border-bottom border-dark-subtle " style="max-width: 450px; margin-left: 200px;">
        <div><img src="assets/book.jpg" alt="Book Image" class="img-fluid d-block mx-auto"
            style="width: 60px; height: 60px; object-fit: cover;"></div>

        <div class="mt-2 ms-3">
          <h4>Graduation</h4>
          <p>all books</p>
        </div>
      </div>

    </div>

    <div class="d-flex">
      <div class="d-flex mt-5 border-bottom border-dark-subtle " style="max-width: 450px; margin-left: 200px;">
        <div><img src="assets/book.jpg" alt="Book Image" class="img-fluid d-block mx-auto"
            style="width: 60px; height: 60px; object-fit: cover;"></div>

        <div class="mt-2 ms-3">
          <h4>General</h4>
          <p>all books</p>
        </div>
      </div>


      <div class="d-flex mt-5 border-bottom border-dark-subtle " style="max-width: 450px; margin-left: 390px;">
        <div><img src="assets/book.jpg" alt="Book Image" class="img-fluid d-block mx-auto"
            style="width: 60px; height: 60px; object-fit: cover;"></div>

        <div class="mt-2 ms-3">
          <h4>Competitive</h4>
          <p>all books </p>
        </div>
      </div>

    </div>


    <div classs="mt-5">
      <div class="container mt-4">
        <h2 class="text-center mb-4">Book Collection</h2>

        <!-- Sections 1 -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
          <!-- Book Card 1 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Mridang - Class 1</h5>
                <p class="card-text text-danger fw-bold">₹299</p>
                <p class="card-text text-warning">
                  ★★★★☆ (4.5)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 2 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">English Reader</h5>
                <p class="card-text text-danger fw-bold">₹399</p>
                <p class="card-text text-warning">
                  ★★★★☆ (4.2)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 3 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Math Magic</h5>
                <p class="card-text text-danger fw-bold">₹349</p>
                <p class="card-text text-warning">
                  ★★★☆☆ (3.8)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 4 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Science Quest</h5>
                <p class="card-text text-danger fw-bold">₹499</p>
                <p class="card-text text-warning">
                  ★★★★★ (5.0)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="container mt-4">

        <!-- Sections 2 -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
          <!-- Book Card 1 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Mridang - Class 1</h5>
                <p class="card-text text-danger fw-bold">₹299</p>
                <p class="card-text text-warning">
                  ★★★★☆ (4.5)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 2 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">English Reader</h5>
                <p class="card-text text-danger fw-bold">₹399</p>
                <p class="card-text text-warning">
                  ★★★★☆ (4.2)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 3 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Math Magic</h5>
                <p class="card-text text-danger fw-bold">₹349</p>
                <p class="card-text text-warning">
                  ★★★☆☆ (3.8)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 4 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Science Quest</h5>
                <p class="card-text text-danger fw-bold">₹499</p>
                <p class="card-text text-warning">
                  ★★★★★ (5.0)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container mt-4">
        <!-- Sections 3 -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
          <!-- Book Card 1 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Mridang - Class 1</h5>
                <p class="card-text text-danger fw-bold">₹299</p>
                <p class="card-text text-warning">
                  ★★★★☆ (4.5)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 2 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">English Reader</h5>
                <p class="card-text text-danger fw-bold">₹399</p>
                <p class="card-text text-warning">
                  ★★★★☆ (4.2)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 3 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Math Magic</h5>
                <p class="card-text text-danger fw-bold">₹349</p>
                <p class="card-text text-warning">
                  ★★★☆☆ (3.8)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 4 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Science Quest</h5>
                <p class="card-text text-danger fw-bold">₹499</p>
                <p class="card-text text-warning">
                  ★★★★★ (5.0)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="container mt-4">

        <!-- Sections 4 -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
          <!-- Book Card 1 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Mridang - Class 1</h5>
                <p class="card-text text-danger fw-bold">₹299</p>
                <p class="card-text text-warning">
                  ★★★★☆ (4.5)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 2 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">English Reader</h5>
                <p class="card-text text-danger fw-bold">₹399</p>
                <p class="card-text text-warning">
                  ★★★★☆ (4.2)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 3 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Math Magic</h5>
                <p class="card-text text-danger fw-bold">₹349</p>
                <p class="card-text text-warning">
                  ★★★☆☆ (3.8)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>

          <!-- Book Card 4 -->
          <div class="col">
            <div class="card h-100 shadow">
              <img src="assets/Book4.jpg" class="card-img-top" alt="Book Image">
              <div class="card-body text-center">
                <h5 class="card-title">Science Quest</h5>
                <p class="card-text text-danger fw-bold">₹499</p>
                <p class="card-text text-warning">
                  ★★★★★ (5.0)
                </p>
                <button class="btn btn-primary">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




  </main>








  <!-- *************** Footer Section ****************** -->

  <footer class="footer">
    <div class="title-line">
        <h5>Kittabi Duniya</h5>
    </div>

    <div class="social-icons my-5">
        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
    </div>

    <div class="footer-bottom row">
        <div class="col-md-2">
            <a href="#">Contact Us</a>
        </div>
        <div class="col-md-8">
            <a href="#">© 2025 Kittabi Duniya . All rights and Reserve</a>
        </div>
        <div class="col-md-2">
            <a href="#">Privacy Policy</a>
        </div>
    </div>
</footer>



</body>

</html>