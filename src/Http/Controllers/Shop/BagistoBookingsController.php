<?php

namespace CodeRomeos\BagistoBookings\Http\Controllers\Shop;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BagistoBookingsController extends Controller
{
    use DispatchesJobs, ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('bagistobookings::shop.index');
    }
}
