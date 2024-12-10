<?php

    use App\RoutesManager;

    use App\Controller\
    {

        AparelhoController,
        ClienteController,
        ModeloController,
        OrcamentoController,
        TecnicoController,
        TelefoneController

    };

    $routes_manager = new RoutesManager();

    // GET.

    $routes_manager->Define("GET", "/", [VIEWS . "../Inicio.php"]);

    $routes_manager->Define("GET", "/modelo", [ModeloController::class, "Form"]);

    $routes_manager->Define("GET", "/modelo/alternar_ativacao", [ModeloController::class, "Toggle"]);

    $routes_manager->Define("GET", "/modelo/listagem", [ModeloController::class, "List"]);

    $routes_manager->Define("GET", "/aparelho", [AparelhoController::class, "Form"]);

    $routes_manager->Define("GET", "/aparelho/alternar_ativacao", [AparelhoController::class, "Toggle"]);

    $routes_manager->Define("GET", "/aparelho/listagem", [AparelhoController::class, "List"]);

    $routes_manager->Define("GET", "/cliente", [ClienteController::class, "Form"]);

    $routes_manager->Define("GET", "/cliente/alternar_ativacao", [ClienteController::class, "Toggle"]);

    $routes_manager->Define("GET", "/cliente/listagem", [ClienteController::class, "List"]);

    $routes_manager->Define("GET", "/tecnico", [TecnicoController::class, "Form"]);

    $routes_manager->Define("GET", "/tecnico/alternar_ativacao", [TecnicoController::class, "Toggle"]);

    $routes_manager->Define("GET", "/tecnico/listagem", [TecnicoController::class, "List"]);

    $routes_manager->Define("GET", "/orcamento", [OrcamentoController::class, "Form"]);

    $routes_manager->Define("GET", "/orcamento/apagar", [OrcamentoController::class, "Erase"]);

    $routes_manager->Define("GET", "/orcamento/listagem", [OrcamentoController::class, "List"]);

    // POST.

    $routes_manager->Define("POST", "/modelo/salvar", [ModeloController::class, "Save"]);

    $routes_manager->Define("POST", "/aparelho/salvar", [AparelhoController::class, "Save"]);

    $routes_manager->Define("POST", "/cliente/salvar", [ClienteController::class, "Save"]);

    $routes_manager->Define("POST", "/tecnico/salvar", [TecnicoController::class, "Save"]);

    $routes_manager->Define("POST", "/orcamento/salvar", [OrcamentoController::class, "Save"]);

    // Abrindo a rota especificada.

    $route = substr(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), strlen(ROOT));

    $routes_manager->Open($route);

?>