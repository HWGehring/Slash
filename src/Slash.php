<?php
/**
 * Created by IntelliJ IDEA.
 * User: howard
 * Date: 10/21/15
 * Time: 11:16 PM
 */

namespace Archon;

class Slash
{

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}