<?php
/**
 * @package dompdf-utf8
 * @link    https://github.com/flawlessnode/dompdf-utf8
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace Dompdf\FrameReflower;

use Dompdf\Frame;
use Dompdf\FrameDecorator\Block as BlockFrameDecorator;

/**
 * Dummy reflower
 *
 * @package dompdf-utf8
 */
class NullFrameReflower extends AbstractFrameReflower
{

    /**
     * NullFrameReflower constructor.
     * @param Frame $frame
     */
    function __construct(Frame $frame)
    {
        parent::__construct($frame);
    }

    /**
     * @param BlockFrameDecorator|null $block
     */
    function reflow(?BlockFrameDecorator $block = null)
    {
        return;
    }

}
