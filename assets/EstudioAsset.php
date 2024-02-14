<?php

namespace app\assets;

use yii\web\AssetBundle;

class EstudioAsset extends AssetBundle
{
    public $basePath = "@webroot";
    public $baseUrl = "@web";
    public $css = [
        'css/estudio/estudio.css',
    ];
}