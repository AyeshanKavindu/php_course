<?php

require_once "Book.php";

$book1 = new Book("Sherlock Holmes", 10.99, 20);
echo "Title: " . $book1->getTitle() . "<br>";
echo "Price: $" . $book1->getPrice() . "<br>";
echo "Price with VAT: $" . $book1->getTotalWithVat() . "<br>"."<br>";

class Manga extends Book {
    public string $mangaType;

    public function __construct(string $title, float $price, float $vat, string $mangaType) {
        parent::__construct($title, $price, $vat);
        $this->mangaType = $mangaType;
    }

    public function getMangaType(): string {
        return $this->mangaType;
    }

    public function setMangaType(string $mangaType): void {
        $this->mangaType = $mangaType;
    }
}

$manga = new Manga("Naruto", 15.0, 5.0, "Shonen");
echo "Title: " . $manga->getTitle() . "<br>". " Type: " . $manga->getMangaType() . "<br>" . "  Price with VAT: $" . $manga->getTotalWithVat();



?>