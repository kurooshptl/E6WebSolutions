<?php

namespace App\Repositories;

use App\Models\Quotes;

class QuoteRepository
{
    public function __construct(Quotes $quotes)
    {

        $this->model = $quotes;
    }


    /**
     * @param $data
     */
    public function store($data)
    {

        $this->model->create($data);
    }
}
