<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//abstraktní trida ustredny a v ni protected $napetí
abstract class  ustredny_Slovak_Jiri{

    protected $napeti_Slovak_Jiri;
    /**
     * parametr muze byt pouze realne cislo (float)
     * kontrola taky jen realne cislo (float
     * a cteni také jen float
 */
    public function setNapeti_Slovak_Jiri(float $napeti_Slovak_Jiri) : float{
        $this->napeti_Slovak_Jiri = $napeti_Slovak_Jiri;
    }
    //přečtení napětí
    public function getNapeti_Slovak_Jiri() : float {
        return $this-> napeti_Slovak_Jiri;
    }
}
// class ustredna se dedi do abs. class ustredny
class  ustredna_Slovak_Jiri extends ustredny_Slovak_Jiri{
   public $Napeti_Slovak_Jiri= 15;

   //nastaveni konstanty type
   const TYPE ="12";
}
//class iustredna dedi interface od abs. class ustredny
    interface iustredna_Slovak_Jiri extends ustredny_Slovak_Jiri{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Slovak_Jiri);
}

//pres vardummp vypise hodnotu v type a hodnotu napeti na ustredne
 var_dump (ustredna_Slovak_Jiri::TYPE);
 var_dump (ustredna_Slovak_Jiri::Napeti_Slovak_Jiri);
?>
