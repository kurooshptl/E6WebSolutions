<?php

namespace App\Repositories;

use App\Models\Subscription;

class SubscriptionRepository
{
    /**
     * ContactUsRepository constructor.
     *
     * @param Subscription $subscription
     */
    public function __construct(Subscription $subscription)
    {

        $this->model = $subscription;
    }


    /**
     * @param $data
     */
    public function store($data)
    {

        $this->model->create($data);
    }
}
