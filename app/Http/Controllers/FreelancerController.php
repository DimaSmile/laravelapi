<?php

namespace App\Http\Controllers;

use App\Freelancer;
use App\Http\Requests\FreelancerRequest;

class FreelancerController extends ApiControllers
{
    /**
     * FreelancerController counstructor
     *
     * @param Freelancer $model
     */
    public function __construct(Freelancer $model)
    {
        $this->model = $model;
    }

    public function createFreelancer(FreelancerRequest $request)
    {
        return $this->create($request);
    }

    public function updateFreelancer(int $entityId, FreelancerRequest $request)
    {
        return parent::update($entityId, $request);
    }
}
