<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">Serviços Matheus</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URL; ?>home">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URL; ?>novo-servico">Novo Serviço</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URL; ?>consulta-servico">Consultar serviços ativos</a>
        </li>
        

        <!-- verificação se quer o todos os serviços -->
        <?php
        if (isset($_SESSION['sessao'])) 
          
          echo"
              <li class='nav-item'>
                <a class='nav-link active' aria-current='page' href='".URL."consulta-todos-servicos'>Consultar TODOS os serviços</a>
              </li>"
        
        
        ?>


      </ul>
    </div>
  </div>
</nav>