<?php
namespace app\models;
use yii\db\ActiveRecord;

class Image extend ActiveRecord {
	cconst STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return '{{image}}';
    }
}