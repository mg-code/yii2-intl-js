<?php
/**
 * @link https://github.com/mg-code/yii2-intl-js
 */

namespace mgcode\intljs;

use yii\web\AssetBundle;

/**
 * @author Maris Graudins
 */
class IntlAsset extends AssetBundle
{
    public $sourcePath = '@bower/intl/dist';
    public $js = [];
    public $depends = [];

    public function init() {
        parent::init();
        $this->js[] = YII_DEBUG ? 'Intl.js' : 'Intl.min.js';
    }
}