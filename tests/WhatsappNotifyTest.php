<?php


namespace Artisanpay\WhatsappNotify\Tests;


use Artisanpay\WhatsappNotify\WhatsappChannel;
use Artisanpay\WhatsappNotify\WhatsappNotifyFacade;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;
use Orchestra\Testbench\TestCase;

class WhatsappNotifyTest extends TestCase
{
    /**
     * @test
     */
    public function send()
    {
        $notification = new WhatsappNotification();
        $notifiable = new WhatsappNotfiableTest();
        $channel = new WhatsappChannel();
        WhatsappNotifyFacade::shouldReceive('send')->with('237691131446@c.us', 'hello from artisan 🛫')->andReturn(true);
        $channel->send($notifiable, $notification);
    }
}


class WhatsappNotfiableTest{
    use Notifiable;

    public function routeNotificationForWhatsapp()
    {
        return '237691131446@c.us';
    }
}


class WhatsappNotification extends Notification {
    public function toWhatsapp($notifiable)
    {
        return [
            'message' => 'hello from artisan 🛫'
        ];
    }
}
