<?php
/**
 * @link https://github.com/borodulin/yii2-select2
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-select2/blob/master/LICENSE
 */

namespace buibr\select2;

use yii\web\AssetBundle;

/**
 * Class Select2BootstrapAsset
 * @package buibr\select2
 * @link http://select2.github.io/select2-bootstrap-theme/
 * @author Andrey Borodulin
 */
class Select2BootstrapAsset extends AssetBundle
{
    // public $sourcePath = '@bower/select2-bootstrap-theme/dist';
    public $sourcePath = '@buibr/select2/assets';

    public $css = [
        'select2-bootstrap.min.css',
    ];

    public $depends = [
        'yii\bootstrap4\BootstrapAsset',
        'buibr\select2\Select2Asset',
    ];
}