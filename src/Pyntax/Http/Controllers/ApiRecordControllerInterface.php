<?php
namespace Pyntax\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Interface ApiRecordControllerInterface
 * @package Pyntax\Http\Controllers
 */
interface ApiRecordControllerInterface
{
    /**
     * @param $resourceName
     * @param $recordId
     * @param Request $request
     * @return mixed
     */
    public function getRecord($resourceName, $recordId, Request $request);

    /**
     * @param $resourceName
     * @param Request $request
     * @return mixed
     */
    public function createRecord($resourceName, Request $request);

    /**
     * @param $resourceName
     * @param $recordId
     * @param Request $request
     * @return mixed
     */
    public function updateRecord($resourceName, $recordId, Request $request);

    /**
     * @param $resourceName
     * @param $recordId
     * @param Request $request
     * @return mixed
     */
    public function deleteRecord($resourceName, $recordId, Request $request);
}