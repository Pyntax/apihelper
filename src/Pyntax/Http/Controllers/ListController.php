<?php
namespace Pyntax\Http\Controllers;

use Illuminate\Http\Request;
use Pyntax\Repositories\RepositoryInterface;

/**
 * Class ListController
 * @package Pyntax\Http\Controllers
 */
class ListController extends ApiController implements ApiListControllerInterface
{
    /**
     * @param $resourceName
     * @param Request $request
     *
     * @return array|mixed
     */
    public function getList($resourceName, Request $request)
    {
        $resource = $this->getResourceName($request);
        $model = config('pyntax.api.resources.' . $resource . ".model");

        if (!empty($resource) && !empty($model)) {
            $repository = $this->loadRepository($model);

            if (!empty($repository) && $repository instanceof RepositoryInterface) {
                return $repository->find([]);
            }
        }

        return [];
    }
}