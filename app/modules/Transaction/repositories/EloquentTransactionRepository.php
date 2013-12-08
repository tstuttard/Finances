<?php
/**
 * Created by PhpStorm.
 * User: thomasstuttard
 * Date: 28/11/2013
 * Time: 10:51
 */

namespace Transaction\Repositories;

use Transaction\Models\EloquentTransactionModel as Transaction;

class EloquentTransactionRepository implements TransactionRepository
{

    /**
     * @var Transaction
     */
    protected $transaction;

    /**
     * @param Transaction $transaction
     */
    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->transaction->all();
    }
} 