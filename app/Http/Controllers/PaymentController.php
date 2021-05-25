<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentService;

class PaymentController extends Controller
{
    protected $transactionService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function webhook(Request $request) {
        $this->paymentService->webhook($request);
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback()
    {
        return $this->paymentService->callback();
    }

    public function status()
    {
        return view('bootcamp.success');
    }
}
