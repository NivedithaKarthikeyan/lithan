<?php
include_once ("User.php");
include ('mangerdb.php');

class UserManager {
    /**
     * 
     * to create user in database
     * @return number
     */
    public static function create_user($email,$password,$firstname,$lastname,$gender,$company,$city,$country,$subscription) {
        if (self::user_exists($email)) {
            return 1;
        } else {
            $password = User::hash_password($password);
            UserManagerDB::create($email,$password,$firstname,$lastname,$gender,$company,$city,$country,$subscription);
            return 0;
        }
    }

    public static function fillUser($row) {
        return new User(
            $row["email"],
            $row["password"],
            $row["firstname"],
            $row["lastname"],
            $row["city"],
            $row["country"],
            $row["companyname"],
            $row["isadmin"],
            $row["status"],
            $row["user_id"],
            $row["subscription"]
        );
    }
    /**
     * 
     *
     * @return User|boolean
     */
    public static function get_user($user_id) {
        $user = UserManagerDB::get($user_id);
        if ($user) {
            return self::fillUser($user);
        }
        return false; 
    }
    /**
     * to display all user
     */
    public static function all( ){
        $users = UserManagerDB::all();
        return $users;
    }
    /**
     *to search a user 
     * 
     * @return array
     */
    public static function search($search, $field) {
        $users = UserManagerDB::search($search, $field);
        return $users;
    }
/**
 * to chcek whether the user exits or not
 * 
 * @return User|boolean
 */
    public static function user_exists($email) {
       $user = UserManagerDB::get_by_email($email);
       if ($user) {
           return self::fillUser($user);
       }
       return false;
    }
   /**
    * to update profile
   
    * @return boolean
    */
    public static function update_all($firstname,$lastname,$city,$country,$companyname, $user_id)
    {
        $up=UserManagerDB::update_all($firstname,$lastname,$city,$country,$companyname, $user_id);
        
        if($up) return true;
        return false;
    }
    /**
     * to delete user by admin 
     * 
     * @return boolean
     */
    public static function delete($id)
    {
        $del=UserManagerDB::delete($id);
       
        if($del) return true;
        return false;
    }
   
}