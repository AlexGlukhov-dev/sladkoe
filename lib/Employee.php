<?php
namespace lib;

class Employee extends User
{
    private $salary;
    private $position;


    public function getSalary()
    {
        return $this->salary;
    }


    public function setSalary($salary)
    {
        $this->salary = $salary;
    }


    public function getPosition()
    {
        return $this->position;
    }


    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function __construct($name, $age, $salary, $position)
    {
        parent::__construct($name, $age);
        $this->setSalary($salary);
        $this->setPosition($position);
        echo  '<br><hr><br> name: <b>'. $this->getName($name) . "</b><br> age: " . $this->getAge($age) . "<br> salary: ". $this->getSalary($salary) . "<br> position: " . $this->getPosition($position);
    }

}