<?php

namespace CodeRomeos\BagistoProductEnquiries\Repositories;

use Illuminate\Container\Container;
use Webkul\Core\Eloquent\Repository;
use CodeRomeos\BagistoProductEnquiries\Models\ProductEnquiry;

class ProductEnquiryRepository extends Repository
{
    protected $attributes = [];

    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        Container $container
    ) {
        parent::__construct($container);
    }

    /**
     * Specify model class name.
     */
    public function model(): string
    {
        return ProductEnquiry::class;
    }
}