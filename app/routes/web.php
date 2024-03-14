<?php
    use Slim\Psr7\Request;
    use Slim\Psr7\Response;
    use App\Controllers\GoalsController;

    $app->get('/', [GoalsController::class, 'index']);
    $app->get("/goal/adauga", [GoalsController::class, "create"]);
    $app->post("/goal/store", [GoalsController::class, "store"]);
    $app->post("/goal/find", [GoalsController::class, "find"]);
?>