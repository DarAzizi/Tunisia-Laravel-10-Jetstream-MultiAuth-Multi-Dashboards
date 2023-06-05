<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SellerController extends Controller
{
    public function index()
    {
        if (Gate::denies('manage-products')) {
            return view('error.403');
        }
        return view('seller.dashboard.index');
    }
}
