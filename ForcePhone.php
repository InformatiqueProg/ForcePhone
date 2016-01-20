<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace ForcePhone;

use Propel\Runtime\Connection\ConnectionInterface;
use Thelia\Module\BaseModule;

/**
 * Class ForcePhone
 * @package ForcePhone
 * @author Etienne Perriere <eperriere@openstudio.fr>
 */
class ForcePhone extends BaseModule
{
    /** @var string */
    const DOMAIN_NAME = 'forcephone';


    public function postActivation(ConnectionInterface $con = null)
    {
        // Define default values
        if (null === self::getConfigValue('force_phone', null)) {
            self::setConfigValue('force_phone', 1);
        }
    }
}
