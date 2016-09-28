<?php
/**
 * Created by PhpStorm.
 * User: vadim
 * Date: 27.01.16
 * Time: 0:24
 */

namespace blacksesion\widgets;


class NestableAsset extends \kartik\base\AssetBundle {
    public function init() {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/nestable']);
        parent::init();
    }

}