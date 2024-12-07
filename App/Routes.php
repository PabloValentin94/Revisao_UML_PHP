<?php

    use App\RoutesManager;

    $routes_manager = new RoutesManager();

    // GET.

    $routes_manager->Define("GET", "/", [VIEWS . "../Inicio.php"]);

    // POST.



    // Abrindo a rota especificada.

    $route = substr(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), strlen(ROOT));

    $routes_manager->Open($route);

?>