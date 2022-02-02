<?php

/**
 * Exemplul 3
 * 
 * Trebuie să fie creată clasa Page. Clasa trebuie să aibă câmpurile head, body, scripts, styles şi title. Aceste date se introduc prin * intermediul constructorului clasei. Clasa ar trebui să aibă metoda render, care afișează codul html al paginii. Clasa trebuie să aibă * metoda overridden toString, care returnează codul html al paginii.
 */

class Page
{
    public $head;
    public $body;
    public $title;
    public $styles;
    public $scripts;
     
    public function __construct($head,$body,$title,$styles,$scripts)
    {
     $this->body=$body;
     $this->head=$head;
     $this->title=$title;
     $this->styles=$styles;
     $this->scripts=$scripts;
    }
    public function render()
    {
       echo $this;
    }
    public function __toString()
    {
        $res = "<head>";
        $res.= "<title>" . $this->title . "</title>";
        $res.= $this->head;
        $res.= "<script>". $this->scripts ."</script>";
        $res.= "<style>" . $this->styles . "</style>";
        $res.= "</head>";
        $res.= "<body>" . $this->body . "</body>";
        return $res;
    }
}
$pg = new Page("","<div>PAGE BODY</div>","MY PAGE","","");
$pg->render();

/*
Explicație:

Așa cum este specificat în setarea sarcinii, trebuie definite câmpurile (proprietățile) clasei. Deoarece proprietățile unei pagini sunt tagurile ei primare, avem câmpurile head, body, title, styles şi scripts. Următorul pas este definirea constructorului acestei funcții. Parametrii lui vor fi exact cinci variabile care vor păstra aceste valori. În cadrul constructorului, alocăm valorile introduse în câmpurile clasei.

După aceasta avem metoda render. Scopul ei este de a afișa date și, prin urmare, avem doar o imprimare a valorilor câmpului. După aceea vedem încă o metodă,_toString. Cu această metodă, specificăm că tot ce este scris în ea ar trebui tratat ca un string, deoarece avem nevoie ca totul să fie afișat ca text, pentru că va fi conținutul tagurilor HTML.

Apoi avem definiția variabilei pg, în care instanţiem clasa Page, căreia i se transmit acum valorile. În primul câmp, specificăm un string gol, deoarece acesta este conținutul head, după care conținutul tagului body, apoi conținutul tagului title (pe care în cadrul metodei toString l-am definit ca partea head) și în final conținutul gol pentru styles şi scripts. Cu următoarea linie de cod apelăm metoda render, care imprimă valori pe pagină.
*/


?>