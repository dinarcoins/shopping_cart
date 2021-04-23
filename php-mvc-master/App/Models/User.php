<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT * FROM user');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function registerUser($data)
    {
        $db = static::getDB();
        $sql = "INSERT INTO user (firstname, email, passwordHash) VALUES (:firstname , :email, :password)";
        $sth = $db->prepare($sql); //use the Bind for check infomations
        $sth->bindValue(':firstname', $data['fisrtname']); //include $sth with $data[$...]
        $sth->bindValue(':email',$data['email']);
        $sth->bindValue(':password', $data['password']);
        $sth->execute();
    }

}
