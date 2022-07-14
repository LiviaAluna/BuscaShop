<?php
class User {
	private int $id;
	private ?string $name;
	private ?string $email;
	private ?string $password;
	private Store store;

	public function __contruct(?string $name, ?string $email, ?string $password) {
		$this->email = $email;
		$this->password = $password;
	}

	public function getId() {
		return $this->id;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getStore() {
		return $this->store;
	}

	public function setStore($store) {
		$this->store = $store;
	}
}
?>
