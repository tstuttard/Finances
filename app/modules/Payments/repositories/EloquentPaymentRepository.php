<?php
/**
 * Created by PhpStorm.
 * User: thomasstuttard
 * Date: 28/11/2013
 * Time: 10:51
 */

namespace Payments\Repositories;

use Payments\Models\EloquentPaymentModel as Payment;

class EloquentPaymentRepository implements PaymentRepository {

    public function getAll() {
        return Payment::all();
    }
} 