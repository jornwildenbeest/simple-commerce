<?php

namespace Damcclean\Commerce\Fieldtypes;

use Statamic\CP\Column;
use Statamic\Fieldtypes\Relationship;
use Damcclean\Commerce\Models\Customer as CustomerModel;

class Customer extends Relationship
{
    protected $canCreate = false;
    protected $canEdit = false;
    protected $taggable = false;

    protected function toItemArray($id)
    {
        dd($id);
    }

    public function getIndexItems($request)
    {
        return $request->search
            ? $this->formatCustomers($this->searchCustomers($request->search))
            : $this->formatCustomers(CustomerModel::all());
    }

    public function formatCustomers($customers)
    {
        return collect($customers)
            ->map(function ($customer) {
                return [
                    'id' => $customer['id'],
                    'title' => $customer['name'],
                    'email' => $customer['email'],
                ];
            });
    }

    protected function getColumns()
    {
        return [
            Column::make('name'),
            Column::make('email'),
        ];
    }

    public function searchCustomers($query)
    {
        return $results = CustomerModel::all()
            ->filter(function ($item) use ($query) {
                return false !== stristr((string) $item['name'], $query);
            });
    }
}
