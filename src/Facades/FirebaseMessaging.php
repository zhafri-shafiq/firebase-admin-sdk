<?php

namespace ZhafriShafiq\FirebaseAdminSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kreait\Firebase\Messaging
 */
final class FirebaseMessaging extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'firebase.messaging';
    }
}