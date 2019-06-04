<?php
namespace App\Service;


class Manager implements IRun
{
    public function can()
    {
        echo "set tasks\n";
    }
}