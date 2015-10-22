<?php
/**
 * Created by IntelliJ IDEA.
 * User: howard
 * Date: 10/21/15
 * Time: 11:18 PM
 */

namespace Archon\Tests;


use Archon\Slash;

class SlashTest extends \PHPUnit_Framework_TestCase
{

    public function testInstantiation()
    {
        $expected = true;
        $slash = new Slash($expected);
        $data = $slash->getData();
        $this->assertSame($expected, $data);
    }
}
