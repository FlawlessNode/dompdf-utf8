<?php
/**
 * @package dompdf-utf8
 * @link    https://github.com/flawlessnode/dompdf-utf8
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace Dompdf\Exception;

use Dompdf\Exception;

/**
 * Image exception thrown by DOMPDF
 *
 * @package dompdf-utf8
 */
class ImageException extends Exception
{

    /**
     * Class constructor
     *
     * @param string $message Error message
     * @param int $code       Error code
     */
    function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }

}
