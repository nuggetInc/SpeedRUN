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

    public function getRender() {
        $str = "<div style='margin-bottom:2rem;'>";
        $str.= "<p>{$this->name} : €{$this->price}</p>";
        $str.= "<p>{$this->description}</p>";
        $str.= "</div>";

        return $str;
    }
}
?>
