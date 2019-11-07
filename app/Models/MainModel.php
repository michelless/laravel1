<?php

namespace App\Models;

trait MainModel
{
    /**
     * Update Row by ID
     * @param  integer $id
     * @param  array  $data
     * @return Object
     */
    public function updateById($id, $data = [])
    {
        $model = $this->findOrFail($id)->fill($data);
        $model->save();

        return $model;
    }
}
