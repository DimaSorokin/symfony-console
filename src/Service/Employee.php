<?php
namespace App\Service;

abstract class Employee
{

    // Factory method
    abstract protected function makeAction(): IRun;

    public function takeAction()
    {
        $action = $this->makeAction();
        $action->can();
    }
}
