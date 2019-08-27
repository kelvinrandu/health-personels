<?php

namespace App\Helpers;
 
 
class Carbon {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
    public static function diffForHumans($time) {
      
         
        return \Carbon\Carbon::parse($time)->diffForHumans();
    }
}