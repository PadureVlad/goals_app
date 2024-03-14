<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Models\Goal;

    class GoalsController {
        public function index(Request $request, Response $response) {
            $goals = Goal::all();
            ob_start();
            include __DIR__ . "/../../views/index.view.php";
            $html = ob_get_clean();
            $response->getBody()->write($html);
            return $response;
        }
        public function create(Request $request, Response $response) {
            ob_start();
            include __DIR__ . "/../../views/create.view.php";
            $html = ob_get_clean();
            $response->getBody()->write($html);
            return $response;
        }
        public function store(Request $request, Response $response) {
            $data = $request->getParsedBody();
            $goal = new Goal($data);
            $goal->save();
            return $response
                ->withHeader('Location', '/')
                ->withStatus(302);
        }
        public function find(Request $request, Response $response, $args) {
            $data = $request->getParsedBody();
            $name = $data['name'];
            $goals = Goal::where('name', 'like', '%'.$name.'%')->get();
            ob_start();
            include __DIR__ . "/../../views/index.view.php";
            $html = ob_get_clean();
            $response->getBody()->write($html);
            return $response;
        }
    }
?>