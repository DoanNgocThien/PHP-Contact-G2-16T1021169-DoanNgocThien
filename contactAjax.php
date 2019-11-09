
<?php
include_once("./contact.php");

$type = $_REQUEST["type"];
if(isset($_REQUEST)){
  if($type == "all") {
    $data = Contacts::getListFromDB();
    $jsonUser = json_encode($data);
    echo $jsonUser; 
  }
  if($type == "delete") {
    $id = $_REQUEST["id"];

    $data = Contacts::removeContact($id);
    $json = json_encode($data);
    echo $json; 
  }

  // if($type == "add") {
  //   if (empty($_REQUEST["name"]) || empty($_REQUEST["phone"])) {
  //     echo json_encode(false);
  //   } else {
  //     $data = Contacts::addContact($_REQUEST);
  //     $json = json_encode($data);
  //     echo $json;
  //   }
  // }

  if($type == "add") {
    if (empty($_REQUEST["name"]) || empty($_REQUEST["phone"])) {
      $array = array(
        'success' => false,
        'msg' => 'Name and phone must be exist. Please check and submit again.'
      );
      echo json_encode($array);
    } else {
      $data = Contacts::addContact($_REQUEST);
      
      if($data == true) {
        $array = array(
          'success' => $data,
          'msg' => 'Contact added.'
        );
        echo json_encode($array);
      } else {
        $array = array(
          'success' => false,
          'msg' => 'Cannot add. Please check and submit later.'
        );
        echo json_encode($array);
      }
    }
  }

  if($type == "edit") {
    if (empty($_REQUEST["name"]) || empty($_REQUEST["phone"])) {
      $array = array(
        'success' => false,
        'msg' => 'Name and phone must be exist. Please check and submit again.'
      );
      echo json_encode($array);
    } else {
      $id = $_REQUEST["id"];
      $data = Contacts::editContact($_REQUEST);

      if($data == true) {
        $array = array(
          'success' => $data,
          'msg' => 'Contact edited.'
        );
        echo json_encode($array);
      } else {
        $array = array(
          'success' => false,
          'msg' => 'Cannot edit. Please check and submit later.'
        );
        echo json_encode($array);
      }
    }
  }

  if($type == "search") {
    $data = Contacts::searchContact($_REQUEST["keyword"]);
    $jsonUser = json_encode($data);
    echo $jsonUser;
  }

  if($type == "searchByFirstLetter") {
    $data = Contacts::searchByFirstLetter($_REQUEST["keyword"]);
    $jsonUser = json_encode($data);
    echo $jsonUser;
  }

} else echo "{}";
?>