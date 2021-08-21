<?php include_once('dados/loja.php'); ?>
<div class="container mt-5">
  <!--Section: Content-->
  <section class="dark-grey-text text-center">
    <!-- Section heading -->
    <h3 class="font-weight-bold mb-4 pb-2">Nossos campeões em vendas</h3>
    <!-- Section description -->
    <p class="grey-text w-responsive mx-auto mb-5">A moda você encontra aqui, nossos produtos tem qualidade e bom preço.</p>
    <!-- Grid row -->
    <div class="row">
      <?php foreach (produto(-1) as $p) { ?>
        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch prod_card" data-link="index.php?u=produto&i=<?= $p['id'] ?>">
          <!-- Card -->
          <div class="card align-items-center">
            <!-- Card image -->
            <div class="view overlay">
              <img src="images/produtos/<?= $p['img'] ?>" class="card-img-top" alt="">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card image -->
            <!-- Card content -->
            <div class="card-body text-center">
              <!-- Category & Title -->
              <h6><?= $p['nome'] ?></h6>
              <h5 class="mb-3">
                <strong>
                  <a class="dark-grey-text"><?= $p['desc'] ?></a>
                </strong>
              </h5>
              <h5 class="font-weight-bold blue-text mb-0">
                <strong><?= $p['preco'] ?></strong>
              </h5>
            </div>
            <!-- Card content -->
          </div>
          <!-- Card -->
        </div>
        <!-- Grid column -->
      <?php } ?>
    </div>
    <!-- Grid row -->
  </section>
  <!--Section: Content-->
</div>

<script>
  // Aqui é adicionado um script que só irá rodar após a página carregar
  window.addEventListener('load', function(){
    $(".prod_card").on('click', function(){
      window.location = $(this).data('link');
    });
  });

</script>