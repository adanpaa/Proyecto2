@extends('layouts.app')

@section('contenido')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{ asset ('img/slide/slide-1.jpg')}})">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Bienvenido a <span>BlowShop</span></h2>
              <p class="animate__animated animate__fadeInUp">La mejor tienda para vender tus productos en todo Mexico</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Leer Más</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{ asset ('/img/slide/slide-2.jpg')}})">
          <div class="carousel-container">
            <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Bienvenido a <span>BlowShop</span></h2>
              <p class="animate__animated animate__fadeInUp">La mejor tienda para vender tus productos en todo Mexico</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Leer Más</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{asset ('/img/slide/slide-3.jpg')}})">
          <div class="carousel-container">
            <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Bienvenido a <span>BlowShop</span></h2>
              <p class="animate__animated animate__fadeInUp">La mejor tienda para vender tus productos en todo Mexico</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Leer Más</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row content">
      <div class="col-lg-6">
        <h2>La mejor pagina web para compra-venta en Mexico</h2>
        <h3>Somos una pagina web que te ayuda a promocionar tus productos a la venta con costos mas accesibles</h3>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <p>
          Entre las paginas que podemos promocionar tus productos de encuentran: 
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Facebook Marketplace</li>
          <li><i class="ri-check-double-line"></i> MercadoLibre</li>
          <li><i class="ri-check-double-line"></i> Amazon </li>
        </ul>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h2>Productos</h2>
      <p>Productos Recientes</p>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Todos</li>
          <li data-filter=".filter-eco">Ecologicos</li>
          <li data-filter=".filter-tech">Tecnologia</li>
          <li data-filter=".filter-home">Hogar</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-eco">
        <div class="portfolio-wrap">
          <img src="/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Termo</h4>
            <p>Termo ecologico 500ml</p>
            <div class="portfolio-links">
              <a href="/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="Termo"><i class="bx bx-plus"></i></a>
              <a href="/productos-detalles" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-eco">
        <div class="portfolio-wrap">
          <img src="/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Caja de Té</h4>
            <p>Té de manzanilla natural</p>
            <div class="portfolio-links">
              <a href="/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Te"><i class="bx bx-plus"></i></a>
              <a href="/productos-detalles" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-home">
        <div class="portfolio-wrap">
          <img src="/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Maceta</h4>
            <p>Maceta pequeña</p>
            <div class="portfolio-links">
              <a href="/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="Maceta"><i class="bx bx-plus"></i></a>
              <a href="/productos-detalles" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-eco">
        <div class="portfolio-wrap">
          <img src="/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Lentes</h4>
            <p>Lentes RayBan hechos con materiales reciclados</p>
            <div class="portfolio-links">
              <a href="/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Lentes"><i class="bx bx-plus"></i></a>
              <a href="/productos-detalles" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-home">
        <div class="portfolio-wrap">
          <img src="/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Lampara</h4>
            <p>Lampara de escritorio</p>
            <div class="portfolio-links">
              <a href="/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Lampara"><i class="bx bx-plus"></i></a>
              <a href="/productos-detalles" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-home">
        <div class="portfolio-wrap">
          <img src="/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Banco</h4>
            <p>Banco para barra 150cm</p>
            <div class="portfolio-links">
              <a href="/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="Banco"><i class="bx bx-plus"></i></a>
              <a href="/productos-detalles" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-tech">
        <div class="portfolio-wrap">
          <img src="/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Lente</h4>
            <p>Lente Canon 50mm</p>
            <div class="portfolio-links">
              <a href="/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Lente"><i class="bx bx-plus"></i></a>
              <a href="/productos-detalles" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-tech">
        <div class="portfolio-wrap">
          <img src="/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Reloj</h4>
            <p>Reloj Rolex</p>
            <div class="portfolio-links">
              <a href="/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Reloj"><i class="bx bx-plus"></i></a>
              <a href="/productos-detalles" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->

</main><!-- End #main -->
@endsection