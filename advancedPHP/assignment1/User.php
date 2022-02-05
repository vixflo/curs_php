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
}
// Cream instanta de obiecte la clasa User
$major = new User("Este adult", "Popescu", "Ion", true);
// echo $major->get_first_name();
// echo "<br>";
// echo $major->get_last_name();
// echo "<br>";
// echo $major->get_age();
// echo "<br>";

$minor = new User("Este minor", "Popescu", "Ion", false);
// echo $minor->get_first_name();
// echo "<br>";
// echo $minor->get_last_name();
// echo "<br>";
// echo $minor->get_age();

//  echo "<pre>";
//  var_dump($major);
//  echo "<br>";
//  var_dump($minor);
