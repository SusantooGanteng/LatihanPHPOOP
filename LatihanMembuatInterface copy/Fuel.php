<?php
//interface adalah antar muka 
/* syarat dalam membuat interface:
     1. interface tidak boleh memiliki properties
     2. interface tidak boleh memiliki code body
     3. interface hanya boleh memiliki assign function 
     4. type akses modifier hanya bisa public 
 */
 
 interface Fuel{
    //public $type;
    public function getType($type);

 }
