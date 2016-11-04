<?php
namespace Pyntax\Http\Controllers;

use Illuminate\Http\Request;
use Pyntax\Repositories\RepositoryInterface;

/**
 * Class RecordController
 * @package Pyntax\Http\Controllers
 */
class RecordController extends ApiController implements ApiRecordControllerInterface
{
    /**
     * @param $resourceName
     * @param $recordId
     * @param Request $request
     * @return array|mixed
     */
    public function getRecord($resourceName, $recordId, Request $request)
    {
        $resource = $this->getResourceName($request);
        $model = config('pyntax.api.resources.' . $resource . ".model");

        if (!empty($resource) && !empty($model)) {
            $repository = $this->loadRepository($model);

            if (!empty($repository) && $repository instanceof RepositoryInterface) {
                return $repository->findById($recordId);
            }
        }

        return [];
    }

    /**
     * @param $resourceName
     * @param Request $request
     * @return array|bool|mixed
     */
    public function createRecord($resourceName, Request $request)
    {
        $resource = $this->getResourceName($request);
        $model = config('pyntax.api.resources.' . $resource . ".model");

        if (!empty($resource) && !empty($model)) {
            $repository = $this->loadRepository($model);

            if (!empty($repository) && $repository instanceof RepositoryInterface) {
                return $repository->save($request->all());
            }
        }

        return [];
    }

    /**
     * @param $resourceName
     * @param $recordId
     * @param Request $request
     * @return array|bool|mixed
     */
    public function updateRecord($resourceName, $recordId, Request $request)
    {
        $resource = $this->getResourceName($request);
        $model = config('pyntax.api.resources.' . $resource . ".model");

        if (!empty($resource) && !empty($model)) {
            $repository = $this->loadRepository($model);

            if (!empty($repository) && $repository instanceof RepositoryInterface) {
                return $repository->save($request->all(), intval($recordId));
            }
        }

        return [];
    }

    /**
     * @param $resourceName
     * @param $recordId
     * @param Request $request
     * @return array|bool|mixed|null
     */
    public function deleteRecord($resourceName, $recordId, Request $request)
    {
        $resource = $this->getResourceName($request);
        $model = config('pyntax.api.resources.' . $resource . ".model");

        if (!empty($resource) && !empty($model)) {
            $repository = $this->loadRepository($model);

            if (!empty($repository) && $repository instanceof RepositoryInterface) {
                return $repository->delete(intval($recordId));
            }
        }

        return [];
    }
}