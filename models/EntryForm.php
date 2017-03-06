<?php
/**
 * Created by PhpStorm.
 * User: serjo
 * Date: 03.03.17
 * Time: 7:59
 */

namespace app\models;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules(){
        return [
            [['name','email'],'required'],
        ['email','email'],];
    }
}