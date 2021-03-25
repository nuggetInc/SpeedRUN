<?php
class Artikel
{
    protected $id;
    protected $name;
    protected $price;
    protected $description;
    protected $previewUrl;

    public function __construct($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setPreviewUrl($previewUrl) {
        $this->previewUrl = $previewUrl;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPreviewUrl() {
        return $this->previewUrl;
    }
}
?>
