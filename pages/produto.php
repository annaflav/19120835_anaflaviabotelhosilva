<div class="container my-5 py-5 z-depth-1">

  <!--Section: Content-->
  <section class="text-center">

    <!-- Section heading -->
    <h3 class="font-weight-bold mb-5">Detalhes do produto</h3>
    <div class="row">

      <div class="col-lg-6">

        <!--Carousel Wrapper-->
        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

          <!--Slides-->
          <div class="carousel-inner text-center text-md-left" role="listbox">
            <div class="carousel-item active">
              <img src="images/produtos/<?= $prod['img'] ?>" alt="First slide" height="img-fluid">
            </div>
          </div>
          <!--/.Slides-->
          <!--Thumbnails-->
          <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
          <!--/.Thumbnails-->
        </div>
        <!--/.Carousel Wrapper-->
      </div>
      <div class="col-lg-5 text-center text-md-left">

        <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
          <strong><?=$prod['nome'];?></strong>
        </h2>
        <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">bestseller</span>
        <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
          <span class="red-text font-weight-bold">
            <strong>R$ <?=$prod['preco'];?></strong>
          </span>
        </h3>

        <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
          <!-- Accordion card -->
          <div class="card">
            <!-- Card header -->
            <div class="card-header" role="tab" id="headingOne1">
                  Descrição
            </div>
            <!-- Card body -->
              <div class="card-body">
              <?=$prod['desc'];?>
          </div>
      </div>
    </div>
  </section>
  <!--Section: Content-->
</div>