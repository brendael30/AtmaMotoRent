<template>
    <div>

    <!-- Bagian navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img class="logo" src="/images/PAW.png">ATMAMOTORENT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="logo" href="#"></a>
          <li class="nav-item">
            <a class="nav-link" href="">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!--  bagian menu utama -->

    <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Selamat Datang di AtmaMotorRent !</div>
        <div class="intro-heading text-uppercase">Login dulu sebelum order</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">About Us</a>
      </div>
    </div>
  </header>


  <!--  bagian list motor -->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase ">List Motor</h2>
                    <h3 class="section-subheading text-muted">Beberapa Motor terlaris</h3>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                        </div>
                        <img class="img-fluid" src="Motor/hondamegapro.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Sewa Motor</h4>
                        <p class="text-muted">Honda Mega Pro</p>
                    </div>
                    </div>
                        <div class="col-md-4 col-sm-6 portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                            </div>
                            <img class="img-fluid"  src="Motor/suzukitu250x.jpg" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Sewa Motor</h4>
                            <p class="text-muted">suzukitu250x</p>
                        </div>
                        </div>
                    <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="gambar/hondaScoopy.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Sewa Motor</h4>
            <p class="text-muted">Honda Scoopy</p>
          </div>
        </div>
            </div>
        </div>
    </section>
    

<!-- About -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Pinjaman Motor terpercaya sejak dulu</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="gambar/x.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Call us if you have problem</h4>
                  <h4 class="subheading">contact person</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"> Email : </p>
                  <p class="text-muted"> atmamotorent@photographermuda.com </p>
                  <p class="text-muted"> Phone : </p>
                  <p class="text-muted"> 081271142541 </p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="gambar/y.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Location</h4>
                  <h4 class="subheading"></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"> (-) Yogyakarta</p>
                  <p class="text-muted"> (-) Jakarta</p>
                  <p class="text-muted"> (-) Yogyakarta</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="gambar/z.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4></h4>
                  <h4 class="subheading">Moto</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">kami dibentuk untuk mempermudah kalian dalam penyewaan motor</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

   <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; ATMAMOTORENT</span>
        </div>

      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Motor 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Honda Megapro</h2>
                <p class="item-intro text-muted">Yamaha semakin di depan</p>
                <img class="img-fluid d-block mx-auto" src="Motor/hondamegapro.jpg" alt="">
                <p>Mesin 1000cc 
                  dan memiliki 240 horsepower menggunakan Torsi Maksimal 176KW
                  transmisi yang digunakan Six-speed cassette-type gearbox with alternative gear ratios available
                </p>
                <ul class="list-inline">
                  <li>Tanggal Pembelian: January 2008</li>
                  <li>Tipe Motor: Motor Sport Jadul</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  TUTUP</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Motor 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Suzuki</h2>
                <p class="item-intro text-muted">Terdepan dan Terpercaya</p>
                <img class="img-fluid d-block mx-auto" src="Motor/suzukitu250x.jpg" alt="">
                <p>Suzuki ini adalah motor jadul dengan kecepatan sedang dan sangat mudah digunakan</p>
                <ul class="list-inline">
                  <li>Tanggal Pembelian: febuary 2017</li>
                  <li>Tipe Motor: Motor Jadul</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  TUTUP</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Motor 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Honda Scoppy</h2>
                <p class="item-intro text-muted">Matic dan mudah diguanakan</p>
                <img class="img-fluid d-block mx-auto" src="gambar/hondaScoopy.jpg" alt="">
                <p>honda scoopy ini mudah digunakan dan irit bahan bakar</p>
                <ul class="list-inline">
                  <li>Tanggal Pembelian: January 2016</li>
                  <li>Tipe Motor : Motor Matic</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  TUTUP</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        
    </div>
</template>
