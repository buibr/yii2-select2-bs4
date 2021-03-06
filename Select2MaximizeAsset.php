<?php
/**
 * @link https://github.com/borodulin/yii2-select2
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-select2/blob/master/LICENSE
 */

namespace buibr\select2;

use yii\web\AssetBundle;

/**
 * Class Select2MaximizeAsset
 * @package buibr\select2
 * @link https://github.com/panorama-ed/maximize-select2-height
 * @author Andrey Borodulin
 */
class Select2MaximizeAsset extends AssetBundle
{
    public $sourcePath = '@buibr/select2/assets';
    
    public $js=[
        'maximize-select2-height.min.js',
    ];
    
    public $depends= [
        'buibr\select2\Select2Asset',
    ];
}