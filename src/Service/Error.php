<?php
namespace App\Service;


class Error implements IRun
{
    public function can()
    {
        echo "Error\n";
    }
}