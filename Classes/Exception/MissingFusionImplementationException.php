<?php
namespace Sitegeist\Fusion\Standalone\Exception;

/*
 * This file is part of the Neos.Fusion package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */
use Sitegeist\Fusion\Standalone\Exception;

/**
 * This exception is thrown if the PHP implementation class for a given Fusion
 * object could not be found; i.e. it was not set using @class.
 */
class MissingFusionImplementationException extends Exception
{
}
