<?php
/**
 * Created by PhpStorm.
 * User: thomasstuttard
 * Date: 28/11/2013
 * Time: 08:47
 */

namespace Transaction\Tests\Controllers;

use Mockery as m;
use URL;

class TransactionControllerTest extends \Tests\TestCase {

    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        m::close();
    }

    public function mock($class)
    {
        $mock = m::mock($class);

        $this->app->instance($class, $mock);

        return $mock;
    }

    public function testGetIndex()
    {
        $this->mock('Transaction\Repositories\PaymentRepository')->shouldReceive('getAll')->once();

        $this->call('GET', URL::route('transactions.index'));

        $this->assertResponseOk();


    }

}
 