<?php

namespace App\Repositories;

use App\Models\Blog;


class BlogRepository
{
    public function __construct(Blog $blog)
    {

        $this->model = $blog;
    }


    /**
     * @param $data
     */
    public function store($data)
    {

        $this->model->create($data);
    }

    public function show($id){

        return $this->model->find($id);
    }
}
