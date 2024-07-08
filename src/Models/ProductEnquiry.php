<?php

namespace CodeRomeos\BagistoProductEnquiries\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webkul\Customer\Models\CustomerProxy;
use Webkul\Product\Models\ProductProxy;

class ProductEnquiry extends Model
{
    use HasFactory, SoftDeletes;

    public $translatedAttributes = ['name'];

    protected $fillable = [
        'customer_id',
        'product_id',
        'product_name',
        'name',
        'email',
        'phone',
        'message',
        'ip',
    ];

    public function product() {
        return $this->belongsTo(ProductProxy::modelClass());
    }

    public function customer() {
        return $this->belongsTo(CustomerProxy::modelClass());
    }

}
