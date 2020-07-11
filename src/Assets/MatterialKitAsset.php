<?php

declare(strict_types=1);

namespace Schmasterz\Yii\MaterialKit\Assets;

use Yiisoft\Assets\AssetBundle;

/**
 * Asset bundle for the Material Kit css files.
 *
 * MaterialKitAsset.
 *
 * @package Bootstrap4
 */
class MaterialKitAsset extends AssetBundle
{
    public ?string $basePath = '@assets';

    public ?string $baseUrl = '@assetsUrl';

    public ?string $sourcePath = '@npm/material-kit/assets';

    public array $css = [
        'css/material-kit.css'
    ];

    public array $js = [
        'js/material-kit.js'
    ];

    public array $publishOptions = [
        'only' => [
            'css/material-kit.css',
            'js/material-kit.js'
        ],
    ];

    public array $depends = [
    ];
}
