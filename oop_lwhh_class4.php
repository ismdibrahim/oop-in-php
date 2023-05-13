<?php 
    // Hexadecimal to RGB 

    class RGB{
        private $color;
        private $red;
        private $green;
        private $blue;

        public function __construct($colorCode = '')
        {
            $this->color = ltrim($colorCode, '#');
            $this->parseColor();
        }

        public function getColor()
        {
            return $this->color;    
        }
        public function getRGBColor()
        {
            return array($this->red, $this->green, $this->blue);
        }
        public function readRGBColor()
        {
            echo "Red = {$this->red}, Green = {$this->green}, Blue = {$this->blue}";
        }

        public function setColor($colorCode)
        {
            $this->color = ltrim($colorCode, '#');
        }
        public function parseColor()
        {
            if ($this->color) {
                list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
            }else{
                list($this->red, $this->green, $this->blue) = array(0,0,0);
            }
        }

    }

    $myColor = new RGB("#ffffff");
    $myColor->readRGBColor();

?>