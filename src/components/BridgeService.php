<?php

namespace joester89\yii2\phue\components;

use joester89\yii2\models\activeRecord\Bridge;
use Phue\Client;

/**
 * Class BridgeService
 * @package Joester89\Yii2\PHue\components
 */
class BridgeService
{
    /**
     * @param Client $client
     * @return Bridge[]
     */
    public function syncBridges(Client $client): array
    {

    }

    /**
     * @param \Phue\Bridge $sourceBridge
     * @param Bridge $targetBridge
     */
    public function syncBridge(\Phue\Bridge $sourceBridge, Bridge $targetBridge): Bridge
    {

    }
}