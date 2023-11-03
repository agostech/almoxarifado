<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 200px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <img src="#" height="30px" alt="Logo">
    </a>

    <hr>

        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('dashboards.index') }}" class="nav-link text-white btn btn-primary text-start">
                    <i class="bi bi-bar-chart mx-2 fs-5 align-middle"></i>Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('movimentacoes.index') }}" class="nav-link text-white btn btn-primary text-start">
                    <i class="bi bi-clock-history mx-2 fs-5 align-middle"></i>Movimentações
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('produtos.index') }}" class="nav-link text-white btn btn-primary text-start">
                    <i class="bi bi-box mx-2 fs-5 align-middle"></i>Produtos
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('categorias.index') }}" class="nav-link text-white btn btn-primary text-start">
                    <i class="bi bi-tag mx-2 fs-5 align-middle"></i>Categorias
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('funcionarios.index') }}" class="nav-link text-white btn btn-primary text-start">
                    <i class="bi bi-people mx-2 fs-5 align-middle"></i>Funcionários
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('departamentos.index') }}" class="nav-link text-white btn btn-primary text-start">
                    <i class="bi bi-building mx-2 fs-5 align-middle"></i>Departamentos
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link text-white btn btn-primary text-start">
                    <i class="bi bi-person mx-2 fs-5 align-middle"></i>Usuários
                </a>
            </li>
        </ul>
    <hr>

    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
        </a>

        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="">Alterar dados</a></li>

            <li>
                <hr class="dropdown-divider">
            </li>

            <li><a class="dropdown-item" href="">Sair</a></li>
        </ul>
    </div>
</div>
