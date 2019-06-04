<?php
namespace App\Service;


class Tester implements IRun
{
    public function can()
    {
        echo "code testing, communication with manager, set tasks\n";
    }
}
