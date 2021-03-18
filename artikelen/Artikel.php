<?php
class Artikel
{
    protected int $id;
    protected string $name;
    protected float $price;
    protected string $description;
    protected string $previewUrl;

    public function __construct(int $id) {
        $this->id = $id;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setPrice(int $price) {
        $this->price = $price;
    }

    public function setDescription(string $description) {
        $this->description = $description;
    }

    public function setPreviewUrl(string $previewUrl) {
        $this->previewUrl = $previewUrl;
    }

    public function getRender(): string {
        $str = "<div style='margin-bottom:2rem;'>";
        $str.= "<p>{$this->name} : €{$this->price}</p>";
        $str.= "<p>{$this->description}</p>";
        $str.= "</div>";

        return $str;
    }
}
?>
