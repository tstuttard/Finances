<?php
/**
 * Created by PhpStorm.
 * User: thomasstuttard
 * Date: 28/11/2013
 * Time: 08:57
 */

namespace Payments\Tests\Routes;

use URL;
use Mockery as M;

class PaymentsRouteTest extends \Tests\TestCase {

    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        M::close();
    }

    public function testGetIndex()
    {
        $this->call('GET', URL::route('payments.index'));
    }

}
 