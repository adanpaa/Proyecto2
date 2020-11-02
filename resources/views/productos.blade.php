@extends('layouts.app')
@section('contenido')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Productos</h2>
      <ol>
        <li><a href="/inicio">Home</a></li>
        <li>Productos</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">


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