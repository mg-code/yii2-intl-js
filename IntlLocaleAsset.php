<?php

namespace mgcode\intljs;

/**
 * This package is deprecated, use https://github.com/mg-code/yii2-intl-js instead.
 */
class IntlLocaleAsset extends \mgcode\assets\IntlJsLocaleAsset
{
    public function init()
    {
        parent::init();
        \Yii::warning('This package is deprecated, use `mg-code/yii2-assets` instead.', 'mgcode/intljs');
    }
}