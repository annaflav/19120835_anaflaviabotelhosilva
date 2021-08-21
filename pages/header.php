<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark green darken-2">
  <a class="navbar-brand" href="index.php">Loja 123</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcontent"
    aria-controls="navbarcontent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarcontent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= is_active('')?>">
        <a class="nav-link" href="index.php">Início
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item <?= is_active('sobre')?>">
        <a class="nav-link" href="index.php?u=sobre">Quem somos</a>
      </li>
      <li class="nav-item <?= is_active('contato')?>">
        <a class="nav-link" href="index.php?u=contato">Contato</a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->