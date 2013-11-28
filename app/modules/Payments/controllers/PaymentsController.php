<?php
/**
 * Created by PhpStorm.
 * User: thomasstuttard
 * Date: 28/11/2013
 * Time: 09:19
 */

namespace Payments\Controllers;

use Payments\Repositories\PaymentRepository;
use BaseController;
use URL;

class PaymentsController extends BaseController {

    /**
     * @var Payments\Repositories\PaymentRepository
     */
    protected $paymentRepository;

    function __construct(PaymentRepository $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function getIndex()
    {
        $this->paymentRepository->getAll();

        return URL::route('payments.index');
    }

} 