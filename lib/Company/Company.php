<?php
namespace lib\Company;

class Company
{
    public function __construct($name, $departments)
    {
        $this->companyName = $name;
        $this->departments = $departments;
        echo "<br> corporation: <i><b>". $this->companyName. "</b></i> <br> departments: " . $this->departments . "<br><br><hr><br>";
    }

    public $companyName;
    public $departments;

}