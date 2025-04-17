<div class="flex h-screen">
  <!-- Barra lateral -->
  <aside class="w-64 bg-gradient-to-b from-blue-500 via-blue-600 to-blue-700 text-white">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex items-center justify-center" href="../index.php">
      <div class="sidebar-brand-icon transform -rotate-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">
        Infinity <sup class="text-xs">1.0</sup>
      </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-4">

    <!-- Nav Item - Dashboard -->
    <ul class="nav-item">
      <li class="nav-link active">
        <a href="../index.php" class="flex items-center">
          <i class="fas fa-fw fa-tachometer-alt mr-2"></i>
          <span>Dashboard</span>
        </a>
      </li>
    </ul>

    <!-- Nav Item - Financeiro -->
    <div class="sidebar-heading text-gray-200 my-3">Financeiro</div>

    <ul class="nav-item">
      <li class="nav-link">
        <a href="#" class="nav-link-collapsed flex items-center" data-toggle="collapse" data-target="#collapseFinance"
           aria-expanded="true" aria-controls="collapseFinance">
          <i class="fas fa-dollar-sign mr-2"></i>
          <span>Contas</span>
        </a>
        <div id="collapseFinance" class="collapse" aria-labelledby="headingFinance">
          <ul class="bg-white py-2 mt-1 rounded">
            <li class="collapse-item"><a href="/contasReceber">Contas a Receber</a></li>
            <li class="collapse-item"><a href="/contasPagar">Contas a Pagar</a></li>
            <li class="collapse-item"><a href="planer.php">Planejamento</a></li>
          </ul>
        </div>
      </li>
    </ul>

    <ul class="nav-item">
      <li class="nav-link">
        <a href="#" class="nav-link-collapsed flex items-center" data-toggle="collapse" data-target="#collapseReports"
           aria-expanded="true" aria-controls="collapseReports">
          <i class="fa fa-file mr-2"></i>
          <span>Relatórios</span>
        </a>
        <div id="collapseReports" class="collapse" aria-labelledby="headingReports">
          <ul class="bg-white py-3 rounded mt-1">
            <li class="collapse-header text-gray-600">Reports:</li>
            <li class="collapse-item"><a href="utilities-color.html">Custos</a></li>
            <li class="collapse-item"><a href="utilities-border.html">Gastos</a></li>
            <li class="collapse-item"><a href="utilities-animation.html">Planejamento</a></li>
            <li class="collapse-item"><a href="utilities-other.html">Other</a></li>
          </ul>
        </div>
      </li>
    </ul>

    <!-- Divider -->
    <hr class="sidebar-divider my-4">

    <!-- Heading -->
    <div class="sidebar-heading text-gray-200 my-3">Sistema</div>

    <ul class="nav-item">
      <li class="nav-link">
        <a href="#" class="nav-link-collapsed flex items-center" data-toggle="collapse" data-target="#collapseCadastro"
           aria-expanded="true" aria-controls="collapseCadastro">
          <i class="fa fa-plus mr-2"></i>
          <span>Cadastro</span>
        </a>
        <div id="collapseCadastro" class="collapse" aria-labelledby="headingCadastro">
          <ul class="bg-white py-2 rounded mt-1">
            <li class="collapse-header text-gray-600">Fundos:</li>
            <li class="collapse-item"><a href="contas.php">Patrimônios</a></li>
            <li class="collapse-item"><a href="contas.php">Bancos</a></li>
            <li class="collapse-item"><a href="contas.php">Corretoras</a></li>
            <li class="collapse-item"><a href="contas.php">Investimentos</a></li>
            <hr class="sidebar-divider">
            <li class="collapse-divider"></li>
            <li class="collapse-header text-gray-600">Crédito:</li>
            <li class="collapse-item"><a href="cartoes.php">Cartões</a></li>
            <hr class="collapse-divider">
            <li class="collapse-header text-gray-600">Sistema:</li>
            <li class="collapse-item"><a href="categorias.php">Grupos</a></li>
            <li class="collapse-item"><a href="categorias.php">Categorias</a></li>
            <li class="collapse-item"><a href="categorias.php">Destinos</a></li>
          </ul>
        </div>
      </li>
    </ul>

    <ul class="nav-item">
      <li class="nav-link">
        <a href="#" class="nav-link-collapsed flex items-center" data-toggle="collapse" data-target="#collapseUsers"
           aria-expanded="true" aria-controls="collapseUsers">
          <i class="fa fa-users mr-2"></i>
          <span>Usuários</span>
        </a>
        <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers">
          <ul class="bg-white py-2 rounded mt-1">
            <li class="collapse-header text-gray-600">Users:</li>
            <li class="collapse-item"><a href="utilities-color.html">Cadastro</a></li>
            <li class="collapse-item"><a href="utilities-border.html">Permissões</a></li>
            <li class="collapse-item"><a href="utilities-other.html">Other</a></li>
          </ul>
        </div>
      </li>
    </ul>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </aside>

  <!-- Conteúdo principal -->
  <main class="flex-1 p-6 bg-gray-100">
    <!-- Conteúdo da página principal -->
    <h1 class="text-2xl font-semibold mb-4">Página Principal</h1>
    <p class="text-gray-800">Bem-vindo à sua aplicação. Aqui está o conteúdo da página principal.</p>
  </main>
</div>
