<?php

namespace App\Service;

class DevelopmentManager extends Employee
{
    private $var;
    public function __construct($var) {
        $this->var = $var;
    }

    protected function makeAction(): IRun
    {
        switch($this->var){
            case 'programmer':
                return new Developer();
                break;
            case 'designer':
                return new Designer();
                break;
            case 'tester':
                return new Tester();
                break;
            case 'manager':
                return new Manager();
                break;
            default:
                return new Error();
        }
    }
}
