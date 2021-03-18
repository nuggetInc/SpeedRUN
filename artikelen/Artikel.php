<?php
class Artikel
{
    private int $id;
    private string $name;
    private float $price;
    private string $description;

    public function __construct(int $id) {
        $this->id = $id;
    }

    public function setName(string $name): Artikel {
        $this->name = $name;
        return $this;
    }

    public function setPrice(int $price): Artikel {
        $this->price = $price;
        return $this;
    }

    public function setDescription(string $description): Artikel {
        $this->description = $description;
        return $this;
    }

    public function render(): void {
        $str = "<div style='margin-bottom:2rem;'>";
        $str.= "<p>{$this->name} : €{$this->price}</p>";
        $str.= "<p>{$this->description}</p>";
        $str.= "</div>";

        echo $str;
    }
}
?>
