<?php
// Produto qualquer
class Product {
    private int $id;
    private ?string $name;
    private $price;
    private int $quantity;
    private $averageRating;
    private int $storeId;

    // Construtor
    public function __construct(int $id, int $storeId, ?string $name, $price, int $quantity = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->storeId = $storeId;
    }

    // Retornar ID
    public function getId() {
        return $this->name;
    }

    // Retornar nome
    public function getName() {
        return $this->name;
    }

    // Retornar preço
    public function getPrice() {
        return $this->price;
    }

    // Retornar quantidade em estoque
    public function getQuantity() {
        return $this->quantity;
    }

    // Retornar avaliação média
    public function getAverageRating() {
        return $this->averageRating;
    }

    // Retornar ID da loja
    public function getStoreId() {
        return $this->storeId;
    }
}
