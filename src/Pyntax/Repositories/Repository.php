<?php
namespace Pyntax\Repositories;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Repository
 * @package Pyntax\Repositories
 */
class Repository extends RepositoryAbstract
{
    /**
     * @param $id
     * @return mixed
     */
    public function findById($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param array $where
     * @return mixed
     */
    public function find($where = [])
    {
        return $this->model->find($where);
    }

    /**
     * @param array $where
     * @param int $page
     * @param int $size
     *
     * @return mixed
     */
    public function paginate($where = [], $page = 1, $size = 25)
    {
        return $this->find($where)->skip($size)->take($page)->paginate($size);
    }

    /**
     * @param array $data
     * @param null $id
     *
     * @return bool
     */
    public function save($data = [], $id = null)
    {
        if(intval($id) > 0) {
            $model = $this->findById($id);
            return $model->fill($data)->save();
        }

        return $this->model->fill($data)->save();
    }

    /**
     * @param $id
     * @return bool|null
     */
    public function delete($id)
    {
        if(intval($id) > 0) {
            $model = $this->findById($id);

            if(!empty($model) && $model instanceof Model) {
                return $model->delete();
            }
        }

        return false;
    }
}