<?php
namespace Sitegeist\Fusion\Standalone\FusionObjects;

use Sitegeist\Fusion\Standalone\Service\HtmlAugmenter;
use Sitegeist\Fusion\Standalone\Core\Runtime;

/**
 * A Fusion Augmenter-Object
 *
 * The fusion object can be used to add html-attributes to the rendered content
 */
class AugmenterImplementation extends ArrayImplementation
{
    /**
     * @var HtmlAugmenter
     */
    protected $htmlAugmenter;

    public function __construct(Runtime $runtime, $path, $fusionObjectName)
    {
        $this->htmlAugmenter = new HtmlAugmenter();
        parent::__construct($runtime, $path, $fusionObjectName);
    }

    /**
     * Properties that are ignored
     *
     * @var array
     */
    protected $ignoreProperties = ['__meta', 'fallbackTagName', 'content'];

    /**
     * @return void|string
     */
    public function evaluate()
    {
        $content = $this->fusionValue('content');
        $fallbackTagName = $this->fusionValue('fallbackTagName');

        $sortedChildFusionKeys = $this->sortNestedFusionKeys();

        $attributes = [];
        foreach ($sortedChildFusionKeys as $key) {
            if ($fusionValue = $this->fusionValue($key)) {
                $attributes[$key] = $fusionValue;
            }
        }

        if ($attributes && is_array($attributes) && count($attributes) > 0) {
            return $this->htmlAugmenter->addAttributes($content, $attributes, $fallbackTagName);
        } else {
            return $content;
        }
    }
}
