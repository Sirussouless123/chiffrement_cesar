<?php 

declare (strict_types = 1);

function chiffrement(string $message, int $dec) : string {

     $message_chiffre = "";
   

       for ($i=0;$i<strlen($message);$i++){
                    if (ctype_alpha($message[$i]) == true){
                         $base = ctype_upper($message[$i]) ? 'A' : 'a';
                         $message_chiffre .= chr( (ord($message[$i]) - ord($base) + $dec) % 26 + ord($base));
                    } else {
                         $message_chiffre .= $message[$i];
                    }
       }

       return $message_chiffre;
}

function dechiffrement(string $message, int $dec) : string{

     return chiffrement($message,-$dec);
}

