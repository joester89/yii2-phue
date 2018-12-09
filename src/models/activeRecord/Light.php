<?php

namespace joester89\yii2\phue\models\activeRecord;

use joester89\yii2\models\ActiveRecord;

/**
 * Class Light
 * @package joester89\yii2\phue\models\activeRecord
 *
 * @property int $id
 * @property string $source_id
 * @property string $name
 * @property int $status
 * @property strint $created_at
 * @property string $updated_at
 */
class Light extends ActiveRecord
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