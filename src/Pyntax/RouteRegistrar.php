<?php
namespace Pyntax;

use Illuminate\Contracts\Routing\Registrar as Router;
use Pyntax\Http\Controllers\ListController;
use Pyntax\Http\Controllers\RecordController;

/**
 * Class RouteRegistrar
 * @package Pyntax
 */
class RouteRegistrar
{
    /**
     * @var Router
     */
    protected $router;

    /**
     * RouteRegistrar constructor.
     * @param Router $router
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * @return void
     */
    public function all()
    {
        $this->registerRecordRoutes();
        $this->registerRecordListRoutes();
    }

    /**
     * @return void
     */
    public function registerRecordListRoutes()
    {
        $this->router->get('/api/{resourceName}', [
            'uses' => ListController::class . '@getList'
        ]);
    }

    /**
     * @return void
     */
    public function registerRecordRoutes()
    {
        $this->router->get('/api/{resourceName}/{recordId}', [
            'uses' => RecordController::class . '@getRecord'
        ]);

        $this->router->post('/api/{resourceName}', [
            'uses' => RecordController::class . '@createRecord'
        ]);

        $this->router->put('/api/{resourceName}/{recordId}', [
            'uses' => RecordController::class . '@updateRecord'
        ]);

        $this->router->delete('/api/{resourceName}/{recordId}', [
            'uses' => RecordController::class . '@deleteRecord'
        ]);
    }
}