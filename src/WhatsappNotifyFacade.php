<?php

namespace Artisanpay\WhatsappNotify;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Artisanpay\WhatsappNotify\WhatsappNotify
 */
class WhatsappNotifyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return WhatsappNotify::class;
    }
}
