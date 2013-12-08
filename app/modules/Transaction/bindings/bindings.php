<?php

App::instance('Transaction\Repositories\TransactionRepository', new Transaction\Repositories\EloquentPaymentRepository());