<?php
/**
 * @package dompdf-utf8
 * @link    https://github.com/flawlessnode/dompdf-utf8
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace Dompdf\Positioner;

use Dompdf\FrameDecorator\AbstractFrameDecorator;

/**
 * Positions table rows
 *
 * @package dompdf-utf8
 */
class TableRow extends AbstractPositioner
{

    /**
     * @param AbstractFrameDecorator $frame
     */
    function position(AbstractFrameDecorator $frame): void
    {
        $cb = $frame->get_containing_block();
        $p = $frame->get_prev_sibling();

        if ($p) {
            $y = $p->get_position("y") + $p->get_margin_height();
        } else {
            $y = $cb["y"];
        }
        $frame->set_position($cb["x"], $y);
    }
}
