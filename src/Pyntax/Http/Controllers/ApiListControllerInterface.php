<?php
namespace Pyntax\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Interface ApiListControllerInterface
 * @package Pyntax\Http\Controllers
 */
interface ApiListControllerInterface
{
    /**
     * @param $resourceName
     * @param Request $request
     * @return mixed
     */
    public function getList($resourceName, Request $request);
}