<?php
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


?>