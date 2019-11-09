<?php 
	class Contacts{
		var $id;
		var $name;
		var $phone;
		var $email;

		function __construct($id, $name, $phone, $email){
			$this->id = $id;
			$this->name = $name;
			$this->phone = $phone;
			$this->email = $email;
		}
		
		static function getListFromDB() {
			$conn = new mysqli("localhost", "admin", "987", "contacts");
			$conn->set_charset("utf8");
			if($conn->connection_error)
				die("Connect failed. Error: " . $conn->connection_error);

			$query = "SELECT * from contact";
			$result = $conn->query($query);
			$rs = array();
			if($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					array_push($rs, new Contacts(
						$row["id"],
						$row["name"],
						$row["phone"],
						$row["email"],
					));
				};
			}
			return $rs;
		}

		static function addContact($contact) {
			$conn = new mysqli("localhost", "admin", "987", "contacts");
			$conn->set_charset("utf8");
			if($conn->connection_error)
				die("Connect failed. Error: " . $conn->connection_error);

			$query = "INSERT INTO `contact`(`name`, `phone`, `email`) values ('" . $contact["name"] . "','" . $contact["phone"] . "','" . $contact["email"] . "')";
			
			return $conn->query($query);
		}

		static function editContact($contact) {
			$conn = new mysqli("localhost", "admin", "987", "contacts");
			$conn->set_charset("utf8");
			if($conn->connection_error)
				die("Connect failed. Error: " . $conn->connection_error);

			$query = "UPDATE `contact` SET `name`='" . $contact["name"] . "',`phone`='" . $contact["phone"] . "',`email`='" . $contact["email"] . "' WHERE `id`='" . $contact["id"] . "'";
			return $conn->query($query);
		}

		static function removeContact($id) {
			$conn = new mysqli("localhost", "admin", "987", "contacts");
			$conn->set_charset("utf8");
			if($conn->connection_error)
				die("Connect failed. Error: " . $conn->connection_error);

			$query = "DELETE FROM `contact` WHERE `contact`.`id` = '$id'";
			
			return $conn->query($query);
		}
		
		static function searchContact($keyword) {
			$conn = new mysqli("localhost", "admin", "987", "contacts");
			$conn->set_charset("utf8");
			if($conn->connection_error)
				die("Connect failed. Error: " . $conn->connection_error);

			$query = "SELECT * from contact WHERE `name` LIKE '%". $keyword ."%'";
			$result = $conn->query($query);
			$rs = array();
			if($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					array_push($rs, new Contacts(
						$row["id"],
						$row["name"],
						$row["phone"],
						$row["email"],
					));
				};
			}
			return $rs;
		}

		static function searchByFirstLetter($keyword) {
			$conn = new mysqli("localhost", "admin", "987", "contacts");
			$conn->set_charset("utf8");
			if($conn->connection_error)
				die("Connect failed. Error: " . $conn->connection_error);

			$query = "SELECT * from contact WHERE `name` LIKE '%". $keyword ."'";
			$result = $conn->query($query);
			$rs = array();
			if($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					array_push($rs, new Contacts(
						$row["id"],
						$row["name"],
						$row["phone"],
						$row["email"],
					));
				};
			}
			return $rs;
		}
	}
?>