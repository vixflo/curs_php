<?php
# Exemplul 1
/* Trebuie creată o clasă care va stoca datele despre punct în spațiu. Cu metoda vom prezenta rezultatul. Clasa va avea câmpurile x și y și metoda Show. În câmpurile x și y se vor afla coordonatele.
Puncte şi metoda Show va afișa mesajul:
Position is x: 23, y: 32
*/

# Pasul 1.
# Vom începe prin crearea clasei, folosind cuvântul-cheie class:

// class Point
// {
// }

/* 
Următorul pas este adăugarea câmpului (proprietate). Cum pentru un punct din spațiu este relevantă doar informaţia unde se află exact, adică coordonatele lor, avem nevoie doar de două proprietăți, acestea sunt x și y. Deci:
*/

// class Point
// {
// var $x;
// var $y;
// }
 
/* 
După aceea, avem nevoie de definiția metodei Show, care va afișa mesajul. Aşa cum am menționat anterior, metoda nu este altceva decât o funcție în cadrul clasei, așa că la codul anterior adăugăm:
*/

// class Point
// {
// var $x;
// var $y;
// function Show(){}
// }
 
/* 
Acum trebuie să scriem imprimarea datelor, deci în cadrul metodei Show, adăugăm:
*/

// class Point
// {
// var $x;
// var $y;
//     function Show(){ 
//         echo "Position is x:{$this->x} y: {$this->y}";    
//     }
// }
 
/* 
Aşa cum puteți vedea, în imprimare folosim $this, deoarece dorim să apelăm doar la variabilele care se referă la clasă.
Următorul pas este să instanţiem clasa, după principiul similar ca la funcții, iar până nu apelăm funcția - aceasta nu se va executa. Este similar şi pentru clasă, dacă nu o instanţiem - nu putem face schimbări. Prin urmare:
*/

// class Point
// {
// var $x;
// var $y;
//     function Show(){   
//         echo "Position is x:{$this->x} y: {$this->y}";    
//     }
// } 
// $p = new Point();
 
/* 
După clasa instanţiată, putem atribui anumite valori proprietăților x și y. Prin urmare:
*/

// class Point
// {
// var $x;
// var $y;
//     function Show(){    
//         echo "Position is x:{$this->x} y: {$this->y}";   
//     }
// }
// $p = new Point();
// $p->x=23;
// $p->y=32;
 
/* 
În felul acesta, am atribuit valori și mai rămâne doar să imprimăm datele, aşadar activăm metoda Show, care are pentru funcție să înscrie datele:
*/

class Point
{
var $x;
var $y;
    function Show(){
        echo "Position is x:{$this->x} y: {$this->y}";   
    }
}
    $p = new Point();
    $p->x=23;
    $p->y=32;
    $p->Show();

 #   Se afiseaza rezultatul in browser:   Position is x:23 y: 32
 
/* 
Acesta a fost ultimul pas și acum obținem o imprimare pe ecran. Așadar, am creat o clasă, am definit proprietățile ei, am atribuit valori proprietăților. Am creat metoda clasei, am instanţiat clasa și am afișat rezultatul.
*/