<?php
/**
 * Created by PhpStorm.
 * User: thomasstuttard
 * Date: 28/11/2013
 * Time: 09:19
 */

namespace Transaction\Controllers;

use BaseController;
use Transaction\Repositories\TransactionRepository;
use URL;

class TransactionController extends BaseController
{

    /**
     * @var \Transaction\Repositories\EloquentTransactionRepository
     */
    protected $transactionRepository;

    /**
     * @param TransactionRepository $transactionRepository
     */
    function __construct(TransactionRepository $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }

    public function getIndex()
    {
        $this->transactionRepository->getAll();

        return URL::route('transactions.index');
    }

}