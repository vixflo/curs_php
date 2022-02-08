<?php
// Se defineste clasa User
class User
{
    # definim proprietatile, fara valoare
    private $id;
    private $first_name;
    private $last_name;
    private $age;
// Constructor
    public function __construct($id, $first_name, $last_name, $age)
    {
        # se atribuie proprietatilor valoarea din parametri
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }
// Metode
    public function getCompleteName(){
        return $this->first_name." ".$this->last_name;
    }

    public function isAdult(){
        return $this->age >= 18;
    }
}

