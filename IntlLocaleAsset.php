<?php
/**
 * @link https://github.com/mg-code/yii2-intl-js
 */

namespace mgcode\intljs;

use yii\web\AssetBundle;

/**
 * By default it uses locale defined in Formatter configuration.
 * If you want to override it you can define it in application `params` section:
 * ~~~
 * return [
 *     ..... application configuration ....
 *     'params' => [
 *          'intlJsLocale' => 'en-US',
 *          ...
 *      ]
 * ]
 * ~~~
 * @author Maris Graudins
 */
class IntlLocaleAsset extends AssetBundle
{
    public $sourcePath = '@bower/intl/locale-data/jsonp';
    public $js = [];
    public $depends = [
        'mgcode\intljs\IntlAsset'
    ];

    public function init()
    {
        parent::init();

        $locale = isset(\Yii::$app->params['intlJsLocale']) ? \Yii::$app->params['intlJsLocale'] : \Yii::$app->formatter->locale;
        $this->js[] = $locale.'.js';
    }
}