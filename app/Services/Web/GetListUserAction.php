<?php

namespace App\Services\Web;

use App\Filters\FreewordNameFilter;
use App\Packages\Papagroup\L8core\Src\Criteria\FilterCriteria;
use App\Packages\Papagroup\L8core\Src\Criteria\OrderCriteria;
use App\Packages\Papagroup\L8core\Src\Criteria\WithRelationsCriteria;
use App\Repositories\UserRepository;
use App\Services\Action;

class GetListUserAction extends Action
{
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($data)
    {
        try {
            $order = $data['sort'] ?? '-id';
            $with = $data['with'] ?? '';

            $this->repository
                ->pushCriteria(new WithRelationsCriteria($with, $this->repository->allowRelations()))
                ->pushCriteria(new FilterCriteria($data, $this->allowFilters()))
                ->pushCriteria(new OrderCriteria($order, $this->allowOrderableFields()));

            return [
                'users' => !empty($data['limit'])
                    ? $this->repository->paginate($data['limit'])
                    : $this->repository->all(),
                'employee_update' => $this->repository
                    ->pushCriteria(new FilterCriteria($data, $this->allowFilters()))
                    ->pushCriteria(new OrderCriteria('-updated_at', ['updated_at']))->first()
            ];
        } catch (\Exception $e) {
            throw $e;
        }
    }

    private function allowFilters()
    {
        return [
            'name' => FreewordNameFilter::class,
        ];
    }

    private function allowOrderableFields()
    {
        return [
            'id',
            'name',
            'created_at'
        ];
    }
}