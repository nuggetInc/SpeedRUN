<?php
class KledingStuk extends Artikel
{
    private array $possibleSizes;
    private array $aviableSizes;

    public function setPossibleSizes(int ...$possibleSizes): KledingStuk {
        $this->possibleSizes = $possibleSizes;
        return $this;
    }

    public function addPossibleSizes(int ...$possibleSize): KledingStuk {
        array_push($this->possibleSizes, $possibleSize);
        return $this;
    }

    public function setAviableSizes(array $aviableSizes): KledingStuk {
        $this->aviableSizes = $aviableSizes;
        return $this;
    }

    public function addAviableSizes(int ...$aviableSizes): KledingStuk {
        array_push($this->aviableSizes, $aviableSizes);
        return $this;
    }
}
?>
