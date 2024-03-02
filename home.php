</html>
<html>
<head>
 <meta charset="UTF-8">
    <title>Home</title>
	<link rel="stylesheet" type="" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
.navbar-nav{
         /* position: absolute; */
  right: 0;
  list-style-type: none;
  margin: 0;
  margin-left: 80%;
  padding: 20px;
  padding-right: -20%;
  /* overflow: hidden; */
  /* background-color: SkyBlue; */
  text-align: center;
  width: 90%;
  border: 3px solid none;
  border-radius: 30px;
    }
</style>
</head>
<body>
    <br>
<?php
include "options.php";
?>
<header> <br>
 <!------------------------------------- Navbar ---------------------------------------------------->
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-info-subtle row-cols-lg-2">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <div class="nav_bar">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Books">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#Order">Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#Rent">Rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#Contact">Contact</a>
                        </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>     

<!------------------------------------------ Image slider ------------------------------------------->
<br>
<br>
<section class="container" id="Home">
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div  class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="p-3 mb-2 bg-info text-dark row imp-bg p-5 d-flex align-items-center">
                            <div class="col-lg-7">
                                <h1>Book Genres</h1>
                                <br>
                                <p>Books are for everyone.
                                    So we rent different genres of book for all the book lovers.</p>   
                                <h2>We collect popular & rare books.</h2>
                                <p>Latest & popular editions</p>
                            </div>
                            <div class="col-lg-5">
                                <img src="images/genres.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="p-3 mb-2 bg-info text-dark row imp-bg p-5 d-flex align-items-center">
                            <div class="col-lg-6">
                                <h1>Place your booking anytime</h1>
                                <p>You can rent the book for 15 days / 1 month.</p>
                                <h2>Delivery charge 60 tk inside Dhaka</h2>
                                
                            </div>
                            <div class="col-lg-6">
                                <img src="images/group.png" class="d-block w-100" alt="...">
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="p-3 mb-2 bg-info text-dark row imp-bg p-5 d-flex align-items-center">
                            <div class="col-lg-8">
                                <h1>Earn money by giving us your undamaged books</h1>
                                <br>
                                <p>On the Give Rent section you can basically give rent to books from your collection & earn money.</p>
                                <p>Delivery charge will be added for taking the books from your home</p>
                            </div>
                            <div class="col-lg-4">
                                <img src="images/money.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </header>
<br>
<br>
    <script src="//my.visme.co/visme-embed.js"></script><div class="visme_d" data-title="Artistic Wallpaper" data-url="z4rwxxdy-new-project" data-w="2560" data-full-h="false" data-h="1440" data-domain="my"></div><p style="width:142px !important;border-radius:3px !important;padding:3px !important;font-size:12px !important;font-family:Arial, sans-serif !important;color:#314152 !important;white-space:nowrap !important"><a href="https://www.visme.co/?vc=Made-With-Visme&amp;utm_medium=Embed" target="_blank" rel="noreferrer" style="font-weight:600 !important;text-decoration:none !important;font-size:12px !important;font-family:Arial, sans-serif !important;color:#314152 !important;white-space:nowrap !important"></a></p>
<br>
<!-- ----------------------------------------------- Books ------------------------------------------------- -->
<div class="links"  id="Books">
        <h1>Books</h1>
</div>
<section class="container">
    <br>
            <h2>Adventure</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Adventure1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The Hobbit</h5>
                            <br>
                            <h6 class="card-text">Author: J.R.R. Tolkien</h6>
                            <br>
                            <h6 class="card-text">Price: 160 Tk(15 days)
                               / 200 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Adventure2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The Sea of Monsters</h5>
                            <br>
                            <h6 class="card-text">Author: Rick Riordan</h6>
                            <br>
                            <h6 class="card-text">Price: 140 Tk(15 days)
                               / 180 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Adventure3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Life of Pi</h5>
                            <br>
                            <h6 class="card-text">Author: Yann Martel</h6>
                            <br>
                            <h6 class="card-text">Price: 120 Tk(15 days)
                               / 160 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Adventure4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Treasure Island</h5>
                            <br>
                            <h6 class="card-text">Author: Robert Louis Stevenson</h6>
                            <br>
                            <h6 class="card-text">Price: 150 Tk(15 days)
                               / 190 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
        </section>
<section class="container">
    <br>
            <h2>Mystery</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Mystery1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Shutter Island</h5>
                            <br>
                            <h6 class="card-text">Author: Dennis Lehane</h6>
                            <br>
                            <h6 class="card-text">Price: 160 Tk(15 days)
                               / 200 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Mystery2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The Silent Killer</h5>
                            <br>
                            <h6 class="card-text">Author: Alex Michaelides</h6>
                            <br>
                            <h6 class="card-text">Price: 150 Tk(15 days)
                               / 190 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Mystery3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">In The Woods</h5>
                            <br>
                            <h6 class="card-text">Author: Tana French</h6>
                            <br>
                            <h6 class="card-text">Price: 130 Tk(15 days)
                               / 170 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Mystery4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The Da Vinci Code</h5>
                            <br>
                            <h6 class="card-text">Author: Dan Brown</h6>
                            <br>
                            <h6 class="card-text">Price: 140 Tk(15 days)
                               / 180 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
        </section>
<section class="container">
    <br>
            <h2>Horror</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Horror1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The Exorcist</h5>
                            <br>
                            <h6 class="card-text">Author: William Peter Blatty </h6>
                            <br>
                            <h6 class="card-text">Price: 140 Tk(15 days)
                               / 180 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Horror2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bird Box</h5>
                            <br>
                            <h6 class="card-text">Author: Josh Malerman</h6>
                            <br>
                            <h6 class="card-text">Price: 170 Tk(15 days)
                               / 210 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Horror3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The Hunger</h5>
                            <br>
                            <h6 class="card-text">Author: Alma Katsu</h6>
                            <br>
                            <h6 class="card-text">Price: 160 Tk(15 days)
                               / 200 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
                <div class="col">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="images/Horror4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The Haunting of Hill House</h5>
                            <br>
                            <h6 class="card-text">Author: Shirley Jackson</h6>
                            <br>
                            <h6 class="card-text">Price: 150 Tk(15 days)
                               / 190 Tk(30 days)</h6>
                        </div>
                        <!-- <div class="m-3">
                            <button class="panda-btn">Buy now</button>
                        </div> -->
                    </div>
                </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<div class="links"  id="Order">
        <h1>Order</h1>
</div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<div class="links"  id="Rent">
        <h1>Rent</h1>
</div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<div class="links"  id="Contact">
        <h1>Contact</h1>
</div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>