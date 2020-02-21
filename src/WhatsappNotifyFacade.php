<?php

namespace Artisanpay\WhatsappNotify;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Artisanpay\WhatsappNotify\Skeleton\SkeletonClass
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
        return 'whatsapp';
    }
}
