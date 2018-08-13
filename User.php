<?php

class User {
    public $user_id,$firstname,$lastname,$email,$gender,$companyname,$city,$country,$password,$isadmin,$status;
    
    public function __construct($email, $password, $firstname, 
                                $lastname, $city, $country, $companyname, $isadmin, $status, $user_id) {
        $this->email = $email;
        $this->password = $password;
        $this->user_id=$user_id;
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->city=$city;
        $this->country=$country;
        $this->isadmin=$isadmin;
        $this->status=$status;
        $this->companyname=$companyname;
    }
    
    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
/**
 * 
 */
    public function get_is_block() {
        return $this->is_block;
    }
    /**
     *
     */
    public static function hash_password($password) {
        return hash('ripemd160', $password);
    }
    /**
     *
     */ 
    public function compare_password($password) {
        $hash = self::hash_password($password);
        return $this->password == $hash;
    }
    
   
}