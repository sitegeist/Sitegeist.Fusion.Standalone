<?php
namespace Sitegeist\Fusion\Standalone\FusionObjects;

/**
 * Render a Fusion collection of nodes
 *
 * //tsPath collection *Collection
 * //tsPath itemRenderer the TS object which is triggered for each element in the node collection
 */
class CollectionImplementation extends AbstractCollectionImplementation
{
    /**
     * Evaluate the collection nodes
     *
     * @return string
     */
    public function evaluate()
    {
        return parent::evaluate();
    }
}
