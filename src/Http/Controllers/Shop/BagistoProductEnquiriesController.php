<?php

namespace CodeRomeos\BagistoProductEnquiries\Http\Controllers\Shop;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class BagistoProductEnquiriesController extends Controller
{
    use DispatchesJobs, ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $product = null;
        if($request->filled('product_id')) {
            $product = app('Webkul\Product\Repositories\ProductRepository')->find($request->product_id);
        }
        return view('bagistoProductEnquiries::shop.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'customer_id' => optional($request->user())->id,
            'product_id' => $request->product_id,
            'product_name' => $request->product_name,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'ip' => $request->ip()
        ];
        
        app('CodeRomeos\BagistoProductEnquiries\Repositories\ProductEnquiryRepository')->create($data);

        return redirect(route('shop.bagistoProductEnquiries.create', ['product_id' => $request->product_id]))->with(['flash_message' => 'Enquiry sent successfully!']);
    }
}
