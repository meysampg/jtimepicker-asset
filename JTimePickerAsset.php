<?php

namespace meysampg\assets;

use yii\web\AssetBundle;

class JTimePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/meysampg/jqueryui-jtimepicker-addon/';

    public $js = [
        YII_ENV_DEV ? 'jquery-ui-timepicker-cc.js' : 'jquery-ui-timepicker-cc.min.js',
        YII_ENV_DEV ? 'jquery-ui-timepicker-addon.js' : 'jquery-ui-timepicker-addon.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
