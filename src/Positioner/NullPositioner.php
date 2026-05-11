<?php
/**
 * @package dompdf-utf8
 * @link    https://github.com/flawlessnode/dompdf-utf8
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace Dompdf\Positioner;

use Dompdf\FrameDecorator\AbstractFrameDecorator;

/**
 * Dummy positioner
 *
 * @package dompdf-utf8
 */
class NullPositioner extends AbstractPositioner
{

    /**
     * @param AbstractFrameDecorator $frame
     */
    function position(AbstractFrameDecorator $frame): void
    {
        return;
    }
}
