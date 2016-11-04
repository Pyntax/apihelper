<?php
namespace Pyntax\Repositories;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RepositoryAbstract
 * @package Pyntax\Repositories
 */
abstract class RepositoryAbstract implements RepositoryInterface
{
    protected $model = null;

    /**
     * Repository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}