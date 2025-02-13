<?php
class VueMot {
    private $mot;

    public function __construct($mot)
    {
        $this->mot = $mot;
    }

    public function show()
    {
        $output = "";
        $lettres = str_split($this->mot);
        foreach ($lettres as $lettre) {
            $output .= $lettre . "\n";
        }
        return $output;
    }
}
?>