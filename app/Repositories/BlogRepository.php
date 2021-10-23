<?php

namespace App\Repositories;

use App\Models\Blog;


class BlogRepository
{
    public function __construct(Blog $blog)
    {

        $this->model = $blog;
    }

    public function all(){
        return $this->model->orderBy('id','desc')->get();
    }

    public function getBlogsWithLimit($limit){
        return $this->model->orderBy('id','desc')->limit($limit)->get();

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
