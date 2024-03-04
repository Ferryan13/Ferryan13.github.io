
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" href="css/stylesppl.css">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Quicksand:wght@500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    
    <!--Logo Title Bar -->
    <link rel="icon" href="Assest/Group 1.png">
    
    <title>Electrical Motor PriceList</title>
  </head>
  <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="Assest/Group 1.png" alt="" width="30" height="24" class="d-inline-block align-text-top me-3">
                CV. CITRA DIMAS SEJAHTERA</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item mx-2">
                  <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" href="index.html">ABOUT</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" href="Services.html">SERVICES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="PriceList.html">PRICELIST</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" href="Download.html">DOWNLOAD</a>
                  </li>
                  <li class="nav-item mx-2">
                    <a class="nav-link" href="Contact Us.php">CONTACT US</a>
                  </li>
                </ul>
      
          </nav>

    <!-- Section PriceList Electrical Motor -->
    <section id="empl" class="d-flex align-item-center">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="mt-5">Price List Submersible Pump Services</h2>
            <h4>(Not Include : Bearings, Mechanical Seal, O-Ring Seal + Oli, Power Cable)</h4>
            </div>
          </div>

                    <hr>
                    <br>

                    <table class="table">
                        <thead class="thead">
                            <td>Harga</td>
                            <td>Harga</td>
                        </thead>
                    <?php
                   $koneksi = mysqli_connect('localhost','root','','priceem');

                   if($koneksi){
                       echo 'berhasil'
                   } else {
                       echo 'gagal'
                   }
                   
                    $ambildata = mysqli_query($koneksi,"select * from daftarharga");

                    while($loop = mysqli_fetch_array($ambildata)){
                        $price2pole = $loop['harga2pole'];
                        $price4pole = $loop['harga4pole'];

                        echo '<tr>
                                <td>'.$price2pole.'</td>
                                <td>'.$price4pole.'</td>
                                </tr>
                                ';
                    }
                    ?>       

                     </table>             
                </div>
              </div>
        </div>
    </section>

<!-- Footer -->
<footer class="d-flex align-items-center position-relative">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-7 d-flex align-items-center justify-content-lg-start justify-content-center">
            <img src="Assest/LOGO 90x90.png" alt="">
            <a href="#" class="ms-3">CV. Citra Dimas Sejahtera</a>
          </div>
          <div class="col-md-5 d-flex justify-content-evenly justify-content-center">
            <a href="index.html">Home</a>
            <a href="#">About</a>
            <a href="Services.html">Services</a>
            <a href="PriceList.html">Pricelist</a>
            <a href="Download.html">Download</a>
            <a href="Contact Us.php">Contact</a>
          </div>
        </div>
        <div class="row position-absolute copyright start-50 translate-middle">
          <div class="col-12">
            <p class="text-center">Copyright  bg  Sir John Al Ferryan </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <script src="js/scriptempl.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>