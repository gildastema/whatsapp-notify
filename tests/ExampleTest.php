<?php

namespace Artisanpay\WhatsappNotify\Tests;

use Orchestra\Testbench\TestCase;
use Artisanpay\WhatsappNotify\WhatsappNotifyServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [WhatsappNotifyServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
