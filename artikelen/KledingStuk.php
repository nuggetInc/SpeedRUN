<?php
class KledingStuk extends Artikel
{
    private $possibleSizes;
    private $aviableSizes;

    public function setPossibleSizes($possibleSizes) {
        $this->possibleSizes = $possibleSizes;
    }

    public function setAviableSizes($aviableSizes) {
        $this->aviableSizes = $aviableSizes;
    }

    public function getRender() {
        $str = "<div class='item' style='margin-bottom:2rem;'>";
        $str.= "<div class='preview-wrapper'>";
        $str.= "<img class='preview' src='{$this->previewUrl}' alt='voorbeeld'>";
        $str.= "</div>";
        $str.= "<div class='info-wrapper'>";
        $str.= "<h1><span>{$this->name}</span><span>€{$this->price}</span></h1>";
        $str.= "<h2>{$this->description}</h2>";
        $str.= "</div>";
        $str.= "</div>";

        return $str;
    }
}
?>
