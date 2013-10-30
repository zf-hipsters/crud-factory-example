<?php
namespace People\Service;

use CrudFactory\Service\CrudFactory;
use CrudFactory\Service\ServiceInterface;

class People extends CrudFactory implements ServiceInterface
{
    public function create($entity)
    {
        return false;
    }

    public function read($id)
    {
        return array(
            'id' => '1',
            'name' => 'Person 1',
            'age' => 20,
            'created' => time(),
            'delete' => 0
        );
    }

    public function readAll()
    {
        return array(
            array(
                'id' => '1',
                'name' => 'Person 1',
                'age' => 20,
                'created' => time(),
                'delete' => 0
            )
        );
    }

    public function update($entity)
    {
        return false;
    }

    public function delete($id)
    {
        return false;
    }
}