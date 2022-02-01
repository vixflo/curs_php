<?php
/* Exemple: Adaugarea metodelor class */

class Form
{
    var $fields = array(); # conține nume și etichete de câmp
    var $processor; # acesta este numele programului care procesează formularul var $submit = "Trimite formularul"; # valoarea butonului
    var $Nfields = 0; # numărul de câmpuri adăugate la acest formular 
    /* Constructor: Utilizatorii transmit numele scriptului care primește date de la ($processor) și textul care va fi afișat pe butonul de confirmare
    */
    function __construct($processor, $submit)
    {
        $this->processor = $processor;
        $this->submit = $submit;
    }
    /* Funcția responsabilă pentru afișarea formularului   */
    function displayForm()
    {
        echo "<form action='{$this->processor}' method='post'>";
        echo "<table width='100%'>";
        for ($j = 1; $j <= sizeof($this->fields); $j++) {
            echo "<tr><td align=\"right\">
            {$this->fields[$j - 1]['label']}: </td>\n";
            echo "<td>
            <input type='text'
            name='{$this->fields[$j - 1]['name']}'>
            </td></tr>\n";
        }
        echo "<tr><td colspan=2 align='center'>
            <input type='submit'
            value='{$this->submit}'></td></tr>\n";
        echo "</table>";
    }
    /* Funcție care adaugă câmpul în formular. Utilizatorul trebuie să transmită numele câmpului și eticheta care va fi afișată.*/
    function addField($name, $label)
    {
        $this->fields[$this->Nfields]['name'] = $name;
        $this->fields[$this->Nfields]['label'] = $label;
        $this->Nfields = $this->Nfields + 1;
    }
}


?>
