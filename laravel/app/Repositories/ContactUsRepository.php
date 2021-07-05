<?php

namespace App\Repositories;

use App\Models\Contacts;

/**
 * Class ContactUsRepository
 * @package app\Repositories
 */
class ContactUsRepository
{
    /**
     * ContactUsRepository constructor.
     *
     * @param Contacts $contacts
     */
    public function __construct(Contacts $contacts)
    {

        $this->model = $contacts;
    }


    /**
     * @param $data
     */
    public function store($data)
    {

        $this->model->create($data);
    }
}
