<?php

/**
 * Created by PhpStorm.
 * User: Ahmad Gomaa
 * Date: 31/05/20
 * Time: 05:44 AM
 */
class ComputerFacade
{
    /**
     * @var Computer
     */
    private Computer $computer;

    /**
     * ComputerFacade constructor.
     * @param Computer $computer
     */
    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function turnOn(): void
    {
        $this->computer->getElectricShock();
        $this->computer->makeSound();
        $this->computer->showLoadingScreen();
        $this->computer->bam();
    }

    public function turnOff(): void
    {
        $this->computer->closeEverything();
        $this->computer->pullCurrent();
        $this->computer->sooth();
    }
}