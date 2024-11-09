<!doctype html>
<html lang="en">
  <!-- Nama : Dimas Fajar Ramadhan-->
  <!-- NRP : 5026221139-->
  <!-- URL Make-over : https://themewagon.github.io/Jessica/#-->
  <!-- image url : https://en.wikipedia.org/wiki/Bipp#/media/File:Bipp_sophie.jpg
   https://static.wikia.nocookie.net/msmsmsm/images/f/f7/VYZEE.jpg/revision/latest?cb=20220330012834
   https://static.wikia.nocookie.net/msmsmsm/images/f/fd/Msmsmsm.jpg/revision/latest?cb=20220330012420

   https://tokyoportfolio.com/wp-content/uploads/2023/05/warp-shinjuku-tokyo-2023-1536x864.jpg
   https://nighthub.eu/wp-content/uploads/2024/05/9a072c2e926eb1739bca2cddf4443fff-990x490.jpg
   https://images.xceed.me/blog/wp-content/uploads/2023/03/22123423/Watergate.jpg
   https://en.wikipedia.org/wiki/File:Hey_qt_cover.jpg

   f

   -->

<head>
  <title>ETS PWEB 5026221139</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!--cdncss link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <link rel="stylesheet" href="css/lightbox.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

  <!--style sheet-->
  <link rel="stylesheet" href="css/style.css">

  <!-- custom sendiri-->
  <link rel="stylesheet" href="{{ asset('storage/js/index.css') }}">
  <style>
        .bg {
        background-image: url('{{ asset("storage/images/background.jpg") }}');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
    }

    .texture {
        background-image: url('{{ asset("storage/images/Texture.png") }}');
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
    }
    </style>

</head>

<body >
<div class="parallax1 bg"></div>



<!--demo header-->
<header id="top" class="port position-sticky top-0 start-0 bg-black" style="z-index:10;" >
  <nav id="primary-header" class="navbar navbar-expand-lg navbar-dark bg-black py-4" >
      <div class="container-fluid d-flex flex-column flex-lg-row justify-content-between align-items-center">
          <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" onclick="playRandomSound()"aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
              <div class="offcanvas-header">
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-column flex-lg-row align-items-center justify-content-center w-100 li">
                      <li class="nav-item" onclick="playRandomSound()">
                          <a class="nav-link" href="#" >Home</a>
                      </li>
                      <li class="nav-item" onclick="playRandomSound()">
                          <a class="nav-link" href="#about">About</a>
                      </li>
                      <li class="nav-item" onclick="playRandomSound()">
                          <a class="nav-link" href="#album">Album</a>
                      </li>
                      <li class="nav-item" onclick="playRandomSound()">
                          <a class="nav-link" href="#tour">Tour</a>
                      </li>
                      <li class="nav-item" onclick="playRandomSound()">
                          <a class="nav-link" href="#contact">Contact</a>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Other</a>
                          <ul class="dropdown-menu dropdown-menu-end">
                              <li><a href="wikipedia.com" class="dropdown-item">Social Media</a></li>
                              <li><a href="index.html" class="dropdown-item">Wikipedia</a></li>

                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>
</header>
<!-- akhir header-->

<!-- awal bagian 1, ganti karusel sama ganti font inport-->
<section class="cr mt-3" id="tour"  >

  <div class="container"  >
    <div class="row text-uppercase bg-black rounded-4 p-3  mb-4 sh">
      <div class="text-light display-5 ulys li  py-4" data-aos="fade-down" data-aos="fade-up">Upcoming tour</div>
     </div>
  </div>
  <div class="container mt-6 "  >

      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" >
          <div class="carousel-inner sh">
              <div class="carousel-item active" >
                  <div class="banner rounded-4 p-1" style="background-image: url('storage/images/tokyo.jpg');">
                      <div class="text-content text-white py-5 my-5 li">
                          <p class="fs-4" >Japan | 12 December 2024</p>
                          <h1 class="display-1 jean">TOKYO</h1>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="banner rounded-4 p-1" style="background-image: url('storage/images/berghain.jpg');">
                      <div class="text-content text-white py-5 my-5 li">
                          <p class="fs-4">Germany | 12 November 2024</p>
                          <h1 class="display-1 stan">Berlin</h1>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="banner rounded-4 p-1" style="background-image: url('storage/images/london.jpg'); ">

                      <div class="text-content text-white py-5 my-5 li">
                          <p class="fs-4">United Kingdom | 12 January 2024</p>
                          <h1 class="display-1 ulys">london</h1>
                      </div>
                  </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" onclick="playRandomSound()">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" onclick="playRandomSound()">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>

  </div>
</section>
<!-- akhir bagian 1-->

<!-- awal about-->

<section class="py-5" id="about">
  <div class="container mt-5">
    <div class="rounded-4 p-5 texture bg-black sh">
      <!-- Updated the row classes for better responsiveness -->
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="h-100 bg-black text-white p-5 rounded-4 tr" data-aos="fade-up">
            <h3 class="ms-4 li stan" data-aos="fade-up">
              About Myself
            </h3>
            <div class="text-white m-4">
              <!-- Removed unnecessary classes and adjusted text for better readability -->
              <div class="text-justify" data-aos="fade-up" style="font-size: (clamp 6px, 2.5vw, 20px)";>
                QT is a virtual pop artist created by American performance artist Hayden Dunham. The character QT, short for Quinn Thomas, was developed in collaboration with British producer A. G. Cook and the late Scottish producer SOPHIE. QT is known for promoting the semi-fictitious DrinkQT energy drink, which is a central theme in her music and performances. The QT project began in 2014, with the release of the single “Hey QT.” The song was designed to market the DrinkQT energy drink, featuring repetitive mentions of the product. The character QT is portrayed as a pop singer with a high-pitched voice, singing about themes like young love and fun.
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <!-- Fixed flexbox usage and ensured proper sizing and responsiveness -->
          <div class="tr st rounded-4" data-aos="fade-up" style="background-image: url(storage/images/QT2.jpg); background-size: cover; min-height: 400px;">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- akhir about -->
<section class="my-4"id="experience">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 bg-light rounded-4  my-2" data-aos="fade-right">
        <div class="h-100 bg-yellow p-4 rounded-4">
          <h3 class="fw-bold">
            Education
          </h3>
          <div class="py-4">
            <p class="text-dark-emphasis">
              1998 - 2004
            </p>
            <h5>
              Bachelors in Engineering in Information Technology
            </h5>
            <p class="text-dark-emphasis">
              Bachelors in Engineering in Information Technology
            </p>
          </div>
          <p class="text-dark-emphasis">
            2004 - 2006
          </p>
          <h5>
            Masters in Data Analysis
          </h5>
          <p class="text-dark-emphasis">
            Harvard School of Science and management
          </p>
        </div>
      </div>

      <div class="col-lg-4 bg-secondary rounded-4  my-2 text-light" data-aos="fade-left">
        <div class="h-100 bg-green p-4 rounded-4">
          <h3 class="fw-bold">
            Experiences
          </h3>
          <div class="py-4">
            <p>
              2007 - 2012
            </p>
            <h5>
              Creative Agency Inc.: Design head
            </h5>
            <p class="text-light">
              iacentem substantiales um se sed esse haec Possit facis qui a a a patriam .
            </p>
          </div>
          <p >
            2013 - present
          </p>
          <h5>
            Studio Alpha.: Project Manager
          </h5>
          <p >
            iacentem substantiales um se sed esse haec Possit facis qui a a a patriam .
          </p>
        </div>
      </div>

      <div class="col-lg-4 bg-dark rounded-4  my-2 text-light" data-aos="fade-right">
        <div class="h-100 bg-teal p-4 rounded-4">
          <h3 class="fw-bold">
            Interests
          </h3>
          <div class="py-4">
            <p >
              1998 - 2004
            </p>
            <h5>
              Sound Engineers at local club
            </h5>
            <p >
              Sound designing due to hobby and now become part of my careers
            </p>
          </div>
          <p >
            2004 - 2006
          </p>
          <h5>
            Visual Director
          </h5>
          <p>
            I learn that my interest aligning with my knowledge in data analytics ( for implementing desirable visual with the help of math)
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- album -->


  <section class="portfolio"py-2 id="album">
    <div class="container">
      <div class="justify-content-center pt-5 rounded-5 sh" style="background-color: rgb(43, 42, 42);">

        <div class="row justify-content-center px-4">

          <div class="col-lg-6" d>
            <div class="section-header text-center">
              <h4 class="fw-bold fs-2  slide-up text-white" data-aos="fade-up">
                As a passionate music director and audio designer, I'm dedicated to guiding you to my  experimental music.
              </h4>
            </div><!--section-header-->
          </div>

          <div id="filters" class="button-group d-flex flex-wrap gap-3 justify-content-center py-5" data-aos="fade-up">
            <a  class="btn btn-primary text-decoration-none text-uppercase is-checked"onclick="playRandomSound()"
              data-filter=".Music">Hyperpop</a>
            <a  class="btn btn-primary text-decoration-none text-uppercase" data-filter="."onclick="playRandomSound()">Pc Music
              </a>
            <a class="btn btn-primary text-decoration-none text-uppercase"onclick="playRandomSound()"
              data-filter=".">wet-synthetic</a>
            <a class="btn btn-primary text-decoration-none text-uppercase" data-filter="."onclick="playRandomSound()">msmsmsmsm</a>
            <a  class="btn btn-primary text-decoration-none text-uppercase" data-filter="." onclick="playRandomSound()">decon</a>
          </div>
        </div>
        <div class="py-5 px-5 bg-black rounded-4 content ">
          <div class="grid p-0 clearfix row row-cols-2 row-cols-lg-3 row-cols-xl-4 portofolio " data-aos="fade-up">
            <div class="col mb-4 portfolio-item">
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#youtubeModal">
                  <img src="{{ asset('storage/images/1.jpg') }}" class="img-fluid rounded-4 li" alt="portfolio">
                </a>
              </div>
              <div class="col mb-4 portfolio-item">
                <img src="{{ asset('storage/images/2.jpg') }}" class="img-fluid rounded-4" alt="portfolio">
              </div>
              <div class="col mb-4 portfolio-item">
                <img src="{{ asset('storage/images/3.jpg') }}" class="img-fluid rounded-4" alt="portfolio">
              </div>
              <div class="col mb-4 portfolio-item">
                <img src="{{ asset('storage/images/4.jpg') }}" class="img-fluid rounded-4" alt="portfolio">
              </div>
              <div class="col mb-4 portfolio-item">
                <img src="{{ asset('storage/images/5.jpg') }}" class="img-fluid rounded-4" alt="portfolio">
              </div>
              <div class="col mb-4 portfolio-item">
                <a href="{{ asset('storage/images/1.jpg') }}" data-lightbox="illustration-1" data-title="illustration-1"
                  title="Sample Caption goes here for Portfolio Item 6."><img src="{{ asset('storage/images/1.jpg') }}"
                    class="img-fluid rounded-4" alt="portfolio"></a>
              </div>
              <div class="col mb-4 portfolio-item">
                <a href="{{ asset('storage/images/2.jpg') }}" data-lightbox="illustration-2" data-title="illustration-2"
                  title="Sample Caption goes here for Portfolio Item 7."><img src="{{ asset('storage/images/2.jpg') }}"
                    class="img-fluid rounded-4" alt="portfolio"></a>
              </div>
              <div class="col mb-4 portfolio-item">
                <a href="{{ asset('storage/images/3.jpg') }}" data-lightbox="illustration-3" data-title="illustration-3"
                  title="Sample Caption goes here for Portfolio Item 8."><img src="{{ asset('storage/images/3.jpg') }}"
                    class="img-fluid rounded-4" alt="portfolio"></a>
              </div>
              <div class="col mb-4 portfolio-item">
                <a href="{{ asset('storage/images/4.jpg') }}" data-lightbox="illustration-4" data-title="illustration-4"
                  title="Sample Caption goes here for Portfolio Item 9."><img src="{{ asset('storage/images/4.jpg') }}"
                    class="img-fluid rounded-4" alt="portfolio"></a>
              </div>
              <div class="col mb-4 portfolio-item">
                <a href="{{ asset('storage/images/5.jpg') }}" data-lightbox="illustration-5" data-title="illustration-5"
                  title="Sample Caption goes here for Portfolio Item 10."><img src="{{ asset('storage/images/5.jpg') }}"
                    class="img-fluid rounded-4" alt="portfolio"></a>
              </div>
              <div class="col mb-4 portfolio-item">
                <a href="{{ asset('storage/images/1.jpg') }}" data-lightbox="illustration-1" data-title="illustration-1"
                  title="Sample Caption goes here for Portfolio Item 11."><img src="{{ asset('storage/images/1.jpg') }}"
                    class="img-fluid rounded-4" alt="portfolio"></a>
              </div>
              <div class="col mb-4 portfolio-item">
                <a href="{{ asset('storage/images/2.jpg') }}" data-lightbox="illustration-2" data-title="illustration-2"
                  title="Sample Caption goes here for Portfolio Item 12."><img src="{{ asset('storage/images/2.jpg') }}"
                    class="img-fluid rounded-4" alt="portfolio"></a>
              </div>

          </div>

        </div>
        <div class="text-center p-3"id="toggleButton">
          <a  class="btn btn-dark btn-lg mt-3 text-uppercase text-decoration-none" onclick="playRandomSound()" >
            Show More
          </a>
        </div>


      </div>


          <!-- Modal buatan atau popup buatan-->
          <div class="modal fade" id="youtubeModal" tabindex="-1" aria-labelledby="youtubeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="youtubeModalLabel">YouTube Video</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- YouTube Embed -->
                  <div class="ratio ratio-16x9">
                    <iframe id="youtubeVideo" src="https://www.youtube.com/embed/abcd1234" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>

  </section>

<!-- akhir album -->
<section id="behind the person">


</section>




  <section class=" bg-yellow py-5" id="contact">
    <div class="container p-5 rounded-5 bg-black sh" >
      <div class="row justify-content-center my-5">
        <div class="col-md-6 p-3">

          <h2 class="display-4 text-light align-items-center pb-4 li stan" data-aos="fade-up">
            Leave a Message
          </h2>
          <p class="medium text-light " data-aos="fade-up">
            To place an order for the music album,
            we kindly request that you fill out the form provided on the
            right-hand side of this webpage completely and accurately.
            We greatly appreciate your attention to this matter and your cooperation.
          </p>
        </div>
        <div class="col-md-6">
          <form id="myForm" data-aos="fade-up" onsubmit="submitForm(event)">
            <div class="mb-3">
              <input type="text" class="form-control p-3 rounded-4" name="name" id="name" placeholder="your name" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control p-3 rounded-4" name="email" id="email" placeholder="your email" required>
            </div>
            <div class="mb-3">
              <textarea class="form-control p-3 rounded-4" name="message" id="message" placeholder="your message" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <textarea class="form-control p-3 rounded-4" name="address" id="address" placeholder="your address (if you're ordering something)" rows="3"></textarea>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-dark btn-lg text-uppercase rounded-4">Submit</button>
            </div>
          </form>
      </div>
      </div>
    </div>
    \
    <!-- Modal situsional apabila sukses saja-->


      <div class="modal fade " id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-black">
            <div class="modal-header">
              <h5 class="modal-title text-light fw-bold" id="exampleModalLabel">Form Submitted</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body  text-light" style="border: none;">
              Your form has been successfully validated and submitted.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


    <!-- end modal-->


  </section>

  <footer id="footer" class="bg-black text-white py-5">
    <div class="container-sm">
      <div class="row g-md-5 my-5">
        <div class="col-md-4">
          <div class="info-box">
            <h2 class="display-2 jean li">HEY-<span class="walt">QT</span></h2>
            <p class="py-4  ">
              Subscribe to newsletter to get some updates related with , designs and more.
            </p>

          </div>
        </div>

        <div class="col-md-5">
          <p>
            Just feel free to contact if you wanna collaborate with me, or simply have a conversation.
          </p>
          <h3>
            <a href="https://lomando.com/englishtop.html" class="text-white text-decoration-none">angkuehkuh@maryattha.com</a>
          </h3>
        </div>
      </div>
      <div class="row">
        <p>©2024 Dimas FR. definitely a human artist. not ai generated  </p>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="js/jquery-1.11.0.min.js"></script> <!-- jquery file-->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script> <!--cdn link-->
  <script src="js/plugins.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>

  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="js/script.js"></script>

    <!-- animation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="{{ asset('storage/js/control.js') }}"></script>
    <script>

      AOS.init();
    </script>

</body>

</html>
