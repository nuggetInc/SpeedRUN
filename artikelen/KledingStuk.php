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
        $str.= "<a href='schoenPagina.php?naam={$this->name}' class='info-wrapper'>";
        $str.= "<h1><span>{$this->name}</span><span>€{$this->price}</span></h1>";
        $str.= "<h2>{$this->description}</h2>";
        $str.= "</a>";
        $str.= "</div>";

        return $str;
    }

    public function getPossibleSizes() {
        return $this->possibleSizes;
    }

    public function getAviableSizes() {
        return $this->aviableSizes;
    }

    public function getAviable() {
        for ($i=0; $i < count($this->aviableSizes); $i++) { 
            if ($this->aviableSizes[$i]) return true;
        }
        return false;
    }
}
?>
