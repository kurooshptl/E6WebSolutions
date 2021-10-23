<?php

namespace App\Repositories;

use App\Models\Blog;
use App\Models\Portfolio;


class PortfolioRepository
{
    public function __construct(Portfolio $portfolio)
    {

        $this->model = $portfolio;
    }

    public function all(){
        return $this->model->all();
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
