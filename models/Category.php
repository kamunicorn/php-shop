<?php
/**
 * Created by PhpStorm.
 * User: Unicorn
 * Date: 17.04.2019
 * Time: 19:01
 */

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function getCategories()
    {
        return Category::find()->asArray()->all();
    }

    //    Получение названия категории для отображения в title
    public function getGoodsCategory($cat_id) {
        return Category::find()->where(['cat_name' => $cat_id])->asArray()->one();
    }
}