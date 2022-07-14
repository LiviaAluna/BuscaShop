<?php
class Product {
	private int $id;
	private ?string $name;
	private float $price;
	private int $quantity;
	private float $ratingAvg;
	private int $storeId;

	public function __construct(?string $name, float $price, int $quantity, int storeId) {
		$this->name = $name;
		$this->price = $price;
		$this->quantity = $quantity;
		$this->storeId = $storeId;
	}

	public function getName() {
		return $this->name;
	}

	public function setName(?string $name) {
		$this->name = $name;
	}

	public function getPrice() {
		return $this->price;
	}

	public function setPrice(float $price) {
		$this->price = $price;
	}

	public function getQuantity() {
		return $this->quantity;
	}

	public function setQuantity(int $quantity) {
		$this->quantity = $quantity;
	}

	public function getStoreId() {
		return $this->storeId;
	}
}
?>
