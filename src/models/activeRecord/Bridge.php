<?php

namespace Joester89\Yii2\models\activeRecord;

use Joester89\Yii2\models\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * Class Bridge
 * @package Joester89\Yii2\models\activeRecord
 * 
 * @property int $id
 * @property string $source_id
 * @property string $name
 * @property string $ip_address
 * @property string $username
 * @property int $status
 * @property strint $created_at
 * @property string $updated_at
 */
class Bridge extends ActiveRecord
{
    /**
     * @return array
     */
    public function behaviors(): array
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                TimestampBehavior::class => [
                    'class' => TimestampBehavior::class
                ]
            ]
        );
    }
}