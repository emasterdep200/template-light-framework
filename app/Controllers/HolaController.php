<?php
// File: /app/Controllers/HolaController.php
namespace MiWeb\Controllers;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HolaController extends BaseController
{
    /**
    * Usando inyección de dependencia se le pasa al constructor
    * el contenedor de la aplicación. Así se dispone de las
    * dependencias establecidas en config/dependencies.php.
    *
    * @param $container \Pimple\Container Contenedor de la aplicación
    */
    public function __construct($container)
    {
        parent::__construct($container);
    }
    /**
    * Acción única de la aplicación que demuestra el paso de argumentos
    * a la platilla.
    *
    * @param $request \Psr\Http\Message\ServerRequestInterface Petición a la
    * que servir.
    * @param $response \Psr\Http\Message\ResponseInterface Respuesta a la
    * petición.
    * @param $array array Contiene cada uno de los parámetros de la petición
    *
    * @return string con la plantilla ya renderizada.
    */
    public function index(Request $request, Response $response, $args): string
    {
        // Ejemplo de uso del array $args. El contenido de este array estará
        // disponible en la plantilla en el array $data.
        $nombre = $args['nombre'] ?? 'mundo';
        return $this->view->render('hola/index', [
            'nombre' => $nombre
        ]);
    }
}