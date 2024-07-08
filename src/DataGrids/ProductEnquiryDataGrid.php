<?php

namespace CodeRomeos\BagistoProductEnquiries\DataGrids;

use Illuminate\Support\Facades\DB;
use Webkul\DataGrid\DataGrid;

class ProductEnquiryDataGrid extends DataGrid
{
    /**
     * Prepare query builder.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('product_enquiries')
            ->select('product_name', 'product_id', 'id', 'name', 'email', 'phone', 'message', 'ip', 'created_at');

        $this->addFilter('product_id', 'product_id');
        $this->addFilter('product_name', 'product_name');
        $this->addFilter('name', 'name');
        $this->addFilter('email', 'email');
        $this->addFilter('phone', 'phone');
        $this->addFilter('ip', 'ip');

        return $queryBuilder;
    }

    /**
     * Add columns.
     *
     * @return void
     */
    public function prepareColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => 'ID',
            'type'       => 'integer',
            'searchable' => true,
            'filterable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'product_name',
            'label'      => 'Product',
            'type'               => 'string',
            'filterable'         => true,
            // 'filterable_type'    => 'dropdown',
            // 'filterable_options'    => app('Webkul\Product\Repositories\ProductFlatRepository')->all(['name as label', 'id as value'])->toArray(),
            'closure' => function ($value) {
                return "<a style='color:blue' href='/admin/catalog/products/edit/$value->product_id' target='_blank'>$value->product_name</a>";
            },
            'searchable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'name',
            'label'      => 'Name',
            'type'       => 'string',
            'searchable' => true,
            'filterable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'email',
            'label'      => 'Email',
            'type'       => 'string',
            'searchable' => true,
            'filterable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'phone',
            'label'      => 'Phone',
            'type'       => 'string',
            'searchable' => true,
            'filterable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'message',
            'label'      => 'Message',
            'type'       => 'string',
            'searchable' => true,
            'filterable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'ip',
            'label'      => 'IP',
            'type'       => 'string',
            'searchable' => true,
            'filterable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'created_at',
            'label'      => trans('admin::app.catalog.attributes.index.datagrid.created-at'),
            'type'       => 'string',
            // 'type'            => 'date',
            // 'filterable_type'  => 'date_range',
            'searchable' => true,
            'filterable' => true,
            'sortable'   => true,
        ]);
    }

    /**
     * Prepare actions.
     *
     * @return void
     */
    public function prepareActions()
    {
        
    }

    /**
     * Prepare mass actions.
     *
     * @return void
     */
    public function prepareMassActions()
    {
    }
}
