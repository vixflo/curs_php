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
    public function get_id()
    # returnam valoarea proprietatilor
    {
        return $this->id;
    }
    public function get_first_name()
    {
        return $this->first_name;
    }
    public function get_last_name()
    {
        return $this->last_name;
    }
    public function get_age()
    {
        return $this->age;
    }

    public function getCompleteName(){
        return $this->first_name." ".$this->last_name;
    }

    public function isAdult(){
        return $this->age >= 18;
    }
}

