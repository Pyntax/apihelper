<?php
namespace Pyntax\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Pyntax\Repositories\Repository;

/**
 * Class ApiController
 * @package Pyntax\Http\Controllers
 */
class ApiController extends Controller
{
    /**
     * @param Request $request
     * @return bool|\Illuminate\Routing\Route|object|string
     */
    public function getResourceName(Request $request) {
        return !empty($request->route('resourceName')) ? $request->route('resourceName') : false;
    }

    /**
     * @param $modelName
     * @return bool|Repository
     */
    public function loadRepository($modelName)
    {
        $model = app($modelName);

        if (!$model instanceof Model) {
            return new Repository($model);
        }

        return false;
    }
}