<?php
function get_dbh() {
    $servername = "localhost";
    $username = "root";
    $password = "test123";
    $database = "m5project";
    try {
        return new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // echo "Connected successfully";
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

abstract class ManagerDB {
    public static $table_name;

    public static function dosql($sql, $vals=false) 
    {
        
        
        $db = get_dbh();
        
        try {
            $stmt = $db->prepare($sql);
            if ($vals) {
                $stmt->execute($vals);  
                
            } else {
                $stmt->execute();
            }
        } 
        catch (PDOException $e) 
        {
              $stmt = false;
        }

        $db = null;
        return $stmt;
    }
    
    /**
     * select all user 
     */
    public static function all() {
        $sql = "select * from ". static::$table_name;
        return self::dosql($sql)->fetchAll();
    }
    
    /**
     * 
     * to get user by user id 
     * @return mixed
     */
    public static function get($id) {
        $sql = "select * from ". static::$table_name. " where user_id = ?";
        return self::dosql($sql, array($id))->fetch();
    }
    
    /**
     * 
     * to delete user by id 
     */
        public static function delete($id) {
        
        $sql = "delete from ". static::$table_name. " where user_id = ?";
        return self::dosql($sql, array($id));
    }
    
    /**
     * 
     * to update user profile byid 
     * @return boolean|PDOStatement
     */
    public static function update_one($id, $attr, $val) {
        $sql = "update " . static::$table_name . " set $attr = ? where user_id = ?";
        return self::dosql($sql, array($val, $id));
    }
    
}

class UserManagerDB extends ManagerDB {
    public static $table_name = 'user';
    
   /**
    * 
    * to get user info by email
    * @return mixed
    */
    public static function get_by_email($email) {
        $sql = "select * from ". static::$table_name. " where email = ?";
        return self::dosql($sql, array($email))->fetch();
    }
    /**
     *
     * to create user in database
     * @return number
     */
    public static function create($email,$password,$firstname,$lastname,$gender,$company,$city,$country,$subscription) {
        $sql = "insert into " . static::$table_name . " (email, password,firstname,lastname,gender,companyname,city,country,subscription, status, isadmin) values (?,?,?,?,?,?,?,?,? ,0, 0)";
        return self::dosql($sql, array($email,$password,$firstname,$lastname,$gender,$company,$city,$country,$subscription));
    }
    /**
     * to update profile
     
     * @return boolean
     */
    public static function update_all($firstname,$lastname,$city,$country,$companyname, $user_id)
    {
        $sql = "update " . static::$table_name . " set firstname=?,lastname=?,city=?, country =?, companyname=? where user_id = ?";
        return self::dosql($sql, array($firstname,$lastname,$city,$country,$companyname, $user_id));
    }
    /**
     *to search a user
     *
     * @return array
     */
    public static function search($search, $field) {
        $sql = "select * from ". static::$table_name. " where $field = ?";
        return self::dosql($sql, array($search))->fetchAll();
    }
}