<?php
namespace Pyntax\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Interface ApiListControllerInterface
 * @package Pyntax\Http\Controllers
 */
interface ApiSearchControllerInterface
{
    /**
     * @param $resourceName
     * @param $searchString
     * @param Request $request
     * @return mixed
     */
    public function search($resourceName, $searchString, Request $request);
}