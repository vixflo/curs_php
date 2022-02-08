<?php
// Se defineste clasa User
class User
{
    # definim proprietatile, fara valoare
    public $id;
    public $first_name;
    public $last_name;
    public $age;
    
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

    public function nume_prenume()
    {
        return $this->first_name ." ".$this->last_name;
    }
  
    public function minor_major()
    {
        return ($this->age >= 18);
    }
 
}


