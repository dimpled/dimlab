<?php
/**
* @link http://www.yiiframework.com/
* @copyright Copyright (c) 2008 Yii Software LLC
* @license http://www.yiiframework.com/license/
*/

namespace app\assets;

use yii\web\AssetBundle;

/**
* Configuration for `backend` client script files
* @since 4.0
*/
class AdminLteAsset extends AssetBundle
{
  public $sourcePath = '@bower/';
  public $css = [ 'font-awesome/css/font-awesome.min.css'];
  public $js = [
    
  ];
  public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
    'yii\bootstrap\BootstrapPluginAsset',
  ];
}
