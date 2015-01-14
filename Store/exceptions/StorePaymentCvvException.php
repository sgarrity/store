<?php

require_once 'Store/exceptions/StorePaymentException.php';

/**
 * Exception that is thrown for CVV (Card Verification Value) checks
 *
 * @package   Store
 * @copyright 2007-2015 silverorange
 * @license   http://www.gnu.org/copyleft/lesser.html LGPL License 2.1
 * @see       StorePaymentProvider
 */
class StorePaymentCvvException extends StorePaymentException
{
}

?>
