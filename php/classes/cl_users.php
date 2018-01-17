<?php
include_once("../dbconn.php");
include_once("../console.php");

class Users implements JsonSerializable{

  //Database Variables

  var $userid;
  var $name;
  var $role;
  var $birthday;
  var $lastblog;
  var $firstblog;
  var $accountdate;
  var $description;
  var $active;
  var $password;
  var $email
  var $emailverify

  var $devices;

  public static $instances = array();

  public static function Instance($id){
    if(array_key_exists($userid,Users::$instances)){
      return Users::$instances[$id];
    }else{
      $obj = new Users($id);
      Users::$instances[$id] = $obj;
      return $obj;
    }
  }

function __construct($userid){
  $this->userid = $useridid;
  $this->create_owner_with_id();
}
function create_owner_with_id(){
  global $conn;
  $sql = "SELECT * FROM user WHERE userid = $this->userid;";
  $result = mysqli_query($conn,$sql);
  consollog($result)

  while($row = mysqli_fetch_array($result)){
    $this->name = $row[2];
    $this->role = $row[3];
    $this->birthday = $row[4];
    $this->lastblog = $row[5];
    $this->firstblog = $row[6];
    $this->accountdate = $row[7];
    $this->description = $row[8];
    $this->active = $row[9];
    $this->password = Users::HashPassword($row[10]);
    $this->email = $row[11];
    $this->blocked = $row[12];
    $this->photo_url = $row[13];


  }
}


  public static function Instance($userid){
    if(array_key_exists($userid,USER::$instances)){
      return USER::$instances[$userid];
    }else{
      $obj = new USER($userid);
      USER::$instances[$userid] = $obj;
      return $obj;
    }
  }



  // public function connect()   {   }
  // public function disconnect()    {   }

  public function select($userid) {

  }

  public function insert($post) {
    global $conn;

    $userid = (isset($post["userid"])) ? $post["userid"] : "";
    $name = (isset($post["name"])) ? $post["name"] : "";
    $role = (isset($post["role"])) ? $post["role"] : "";
    $birthday = (isset($post["birthday"])) ? $post["birthday"] : "";
    // $lastblog = (isset($post["lastblog"])) ? $post["lastblog"] : "";
    // $firstblog = (isset($post["firstblog"])) ? $post["firstblog"] : "";
    // $accountdate = (isset($post["accountdate"])) ? $post["accountdate"] : "";
    $description = (isset($post["description"])) ? $post["description"] : "";
    $active = (isset($post["active"])) ? $post["active"] : "";
    $password = (isset($post["password"])) ? $post["password"] : "";

    $password = password_hash($password, PASSWORD_DEFAULT);

     }

     public function delete()        {   }
     public function HashPassword()        {   }

  public function update()    {   }

  function jsonSerialize(){
    return [
      "userid" => $this->$userid,
      "name" => $this->$name,
      "role" => $this->$role,
      "birthday" => $this->$birthday,
      "lastblog" => $this->$lastblog,
      "firstblog" => $this->$firstblog,
      "accountdate" => $this->$accountdate,
      "description" => $this->$description,
      "active" => $this->$active,
      "password" => $this->$password
    ];
}

}

?>
