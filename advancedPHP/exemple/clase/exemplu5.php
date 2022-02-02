<?php

/*
Exercițiul 5
Trebuie creată clasa Form. Clasa trebuie să conțină câmpuri publice action, method, enctype şi controls. Clasa trebuie să conțină trei constante pentru trei tipuri enctype. Constructorul clasei acceptă trei parametri: action, method şi enctype și ar trebui să asigure valori implicite pentru acești trei parametri. Clasa conține metoda addControls, care permite setarea valorilor câmpului controls. Această metodă acceptă ca parametru string care reprezintă controalele. Clasa conține o metodă render, care prezintă formularul și controalele din cadrul ei. După toate controalele, este prezentat şi control submit care activează formularul.
*/

class Form
{
    const MULTIPART = "multipart/form-data";
    const APP = "application/x-www-form-urlencoded";
    const TEXT = "text/plain";
     
    public $method;
    public $action;
    public $enctype;   
    public $controls;
     
    public function __construct($method="post",$action="",$enctype=self::MULTIPART)
    {
        $this->method = $method;
        $this->action = $action;
        $this->enctype = $enctype;
    }    
     
    public function addControls($controls)
    {
        $this->controls = $controls;
    }
     
    public function render()
    {
        echo "<form method='".$this->method."' action='".$this->action."' enctype='".$this->enctype."' >";
        echo $this->controls;
         
        echo "<br><input type='submit' value='confirm' />";
        echo "</form>";
    } 
}
 
$ctrls = <<<CTRLS
<input type="text" name="name" />
<input type="text" name="password" />
CTRLS;
 
$f=new Form();
$f->addControls($ctrls);
$f->render();

?>