<?php
// Usuário qualquer
class User {
    private int $id;
    private ?string $name;
    private ?string $email;
    private ?string $password;
    private Store $stores;

	// Construtor
    public function __construct(int $id, ?string $name, ?string $email, ?string $password) {
        $this->id = genId();
        $this->name = $name;
        $this->email = $email;
        $this->$password = $password;
    }

	// Gerar ID alatório de 5 dígitos
	public function genId() {
		return rand(10000, 99999);
	}

	// Retornar ID
	public function getId() {
    	return $this->id;
	}

	// Retornar nome
	public function getName() {
    	return $this->name;
	}

	// Definir nome
	public function setName($newName) {
    	// TODO
    	$this->name = $newName;
	}

	// Retornar endereço de e-mail
	public function getEmail() {
    	return $this->email;
	}

	// Definir endereço de e-mail
	public function setEmail($newEmail) {
    	// TODO
    	$this->email = $newEmail;
	}

	// Retornar número de lojas
	public function getStoreQuantity() {
    	return count($this->stores);
	}

	// Definir senha
	public function setPassword($newPassword) {
    	// TODO
    	$this->password = $newPassword;
	}

	// Adicionar loja
	public function addStore(Store $store) {
    	// TODO
	}
}
