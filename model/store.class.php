<?php
class Store {
	private int $id;
	private ?string $name;
	private ?string $description;
	private User $owner;
	private Product $products;
	private ?string $location;
	private float $ratingAvg;

	public function __construct(?string $name, User $owner, ?string location, ?string $description) {
		$this->name = $name;
		$this->owner = $owner;
		$this->location = $location;
		$this->description = $description;
	}

	public function getId() {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}

	public function setName(?string $name) {
		$this->name = $name;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription(?string $description) {
		$this->description = $description;
	}

	public function getOwner() {
		return $this->owner;
	}

	public function setOwner(Owner $owner) {
		$this->owner = $owner;
	}

	public function getProducts() {
		return $this->products;
	}

	public function getLocation() {
		return $this->location;
	}

	public function setLocation(?string $location) {
		$this->location = $location;
	}
	
	public function getRatingAvg() {
		return $this->ratingAvg;
	}
}
?>
