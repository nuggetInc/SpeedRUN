<?php
class KledingStuk extends Artikel
{
    private array $possibleSizes;
    private array $aviableSizes;

    public function setPossibleSizes(array $possibleSizes) {
        $this->possibleSizes = $possibleSizes;
    }

    public function setAviableSizes(array $aviableSizes) {
        $this->aviableSizes = $aviableSizes;
    }

    public function getRender(): string {
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
