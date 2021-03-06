<?php
/**
 * Created by PhpStorm.
 * User: Unicorn
 * Date: 17.04.2019
 * Time: 18:07
 */

namespace app\models;
use yii\db\ActiveRecord;
use Yii;

class Good extends ActiveRecord
{
    public static function tableName()
    {
        return 'good';
    }

    public function getAllGoods()
    {
        $goods = Yii::$app->cache->get('goods');
        if (!$goods) {
            $goods = Good::find()->asArray()->all();
            Yii::$app->cache->set('goods', $goods, 60);
        }
        return $goods;
    }

// Получение одного товара для карточки товара
    public function getOneGood($name) {
        return Good::find()->where(['link_name' => $name])->asArray()->one();
    }

// cat_id - название категории. Получение товаров в определенной категории
    public function getGoodsCategorized($cat_id)
    {
        $goods = Yii::$app->cache->get('goods_' . $cat_id);
        if (!$goods) {
            $goods = Good::find()->where(['category' => $cat_id])->asArray()->all();
            Yii::$app->cache->set('goods_' . $cat_id, $goods, 60);
        }
        return $goods;
    }

    public function getSearchResults($text)
    {
        return Good::find()->where(['like', 'name', $text])->asArray()->all();
    }

}