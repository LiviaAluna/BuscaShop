<?php
// Loja qualquer
class Store {
    private int $id;
    private ?string $name;
    private User $owner;
    private Product $products;
    private $location;
    private $averageRating;

	// Construtor
    public function __construct(?string $name, User $owner) {
        $this->name = $name;
        $this->owner = $owner;
    }

    // Retornar ID
    public function getId() {
        return $this->id;
    }

    // Retornar dono
    public function getOwner() {
        return $this->owner;
    }

    // Filtrar produto(s)
    public function getProduct(int $id = null, $name) {
        // TODO
    }

    // Retornar número de produtos
    public function getProductQuantity() {
        return count($this->products);
    }

    // Retornar localização
    public function getLocation() {
        return $this->location;
    }

    // Retornar média de avaliação
    public function getAverageRating() {
        return $this->averageRating;
    }
}
