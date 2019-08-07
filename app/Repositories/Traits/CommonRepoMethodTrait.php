<?php

namespace App\Repositories\Traits;


Trait CommonRepoMethodTrait {

	public function find(int $id) {
		return $this->model->find($id);
	}
	
	public function get() {
		return $this->model->get();
	}

	/*
    * Common Method to to call model collection with trashed
    */
    public function getWithTrash()
    {
        return $this->model->withTrashed()->get();
	}
	
	/*
    * Common Method to to call model current id record with eloquent relationships
    */
    public function getWithRelationships(int $id, string $eloquentRelationships = '')
    {
        $model = $this->model;
        
        if (!empty($eloquentRelationships)) {
            $model = $model->with(explode(',', str_replace(' ', '', $eloquentRelationships)));
        }

        return $model->find($id);
    }


    /*
    * Common Method to to call model with whereIn condition with specified column and array values
    */
    public function getWithRelationshipsWhereIn(string $column, array $values, string $eloquentRelationships = '', $first = true)
    {
        $model = $this->model;
        
        if (!empty($eloquentRelationships)) {
            $model = $model->with(explode(',', str_replace(' ', '', $eloquentRelationships)));
        }

        if ($first) {
            return $model->where($column, $values)->first();
        }

        return $model->whereIn($column, $values)->get();
    }


    /*
    * Common Method to to call model with whereIn condition with specified column and array values
    */
    public function getWithRelationshipsWhere(string $column, string $values, string $eloquentRelationships = '', $first = true)
    {
        $model = $this->model;
        
        if (!empty($eloquentRelationships)) {
            $model = $model->with(explode(',', str_replace(' ', '', $eloquentRelationships)));
        }

        if ($first) {
            return $model->where($column, $values)->first();
        }

        return $model->where($column, $values)->get();
    }


    public function updateOrCreate(array $condition, array $data) {
        return $this->model->updateOrCreate($condition, $data);
    }

}