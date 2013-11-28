<?php
/**
 * Created by PhpStorm.
 * User: thomasstuttard
 * Date: 28/11/2013
 * Time: 08:47
 */

namespace Payments\Tests\Controllers;

use Mockery as M;
use URL;

class PaymentsControllerTest extends \Tests\TestCase {

    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        M::close();
    }

    public function mock($class)
    {
        $mock = M::mock($class);

        $this->app->instance($class, $mock);

        return $mock;
    }

    public function testGetIndex()
    {
        $this->mock('Payments\Repositories\PaymentRepository')->shouldReceive('getAll')->once();

        $this->call('GET', URL::route('payments.index'));

        $this->assertResponseOk();


    }

}
 