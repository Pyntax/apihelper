<?php
namespace Pyntax\Repositories;

/**
 * Interface RepositoryInterface
 * @package Pyntax\Repositories
 */
interface RepositoryInterface
{
    /**
     * @param $id
     * @return mixed
     */
    public function findById($id);

    /**
     * @param array $where
     * @return mixed
     */
    public function find($where = []);

    /**
     * @param array $where
     * @param int $page
     * @param int $size
     * @return mixed
     */
    public function paginate($where = [], $page = 1, $size = 25);

    /**
     * @param array $data
     * @param null $id
     * @return mixed
     */
    public function save($data = [], $id = null);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}