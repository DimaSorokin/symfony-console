<?php
namespace App\Service;

class Developer implements IRun
{
    public function can()
    {
        echo "code writing, code testing, communication with manager\n";
    }
}

