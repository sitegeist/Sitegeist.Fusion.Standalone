<?php
namespace Sitegeist\Fusion\Standalone\FusionObjects;

/**
 * Value object for simple type handling as Fusion objects
 */
class ValueImplementation extends AbstractFusionObject
{
    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->fusionValue('value');
    }

    /**
     * Just return the processed value
     *
     * @return mixed
     */
    public function evaluate()
    {
        return $this->getValue();
    }
}
