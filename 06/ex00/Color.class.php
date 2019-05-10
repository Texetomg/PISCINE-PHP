<?php
    class Color {
        public $red;
        public $green;
        public $blue;
        public static $verbose = false;

        public function __construct($color) {
            if (isset($color['rgb'])) {
                $this->red = (((int)$color['rgb'] & (0xFF << 16)) >> 16);
                $this->green = (((int)$color['rgb'] & (0xFF << 8)) >> 8);
                $this->blue = ((int)$color['rgb'] & 0xFF);
            }
            else {
                $this->red = ((int)$color['red']);
                $this->green = ((int)$color['green']);
                $this->blue = ((int)$color['blue']);
            }
            if (Self::$verbose == true)
                echo $this->__toString() . 'constructed' . PHP_EOL;
        }
        public function __destruct() {
            if (Self::$verbose == true)
                echo $this->__toString() . 'destructed' . PHP_EOL;
        }
        public function __toString() {
            return sprintf("Color (red: %3d, green: %3d, blue: %3d)", $this->red, $this->green, $this->blue);
        }
        public static function doc() {
            return file_get_contents('Color.doc.txt');
        }
        public function add($color) {
            $red = $this->red + $color->red;
            $green = $this->green + $color->green;
            $blue = $this->blue + $color->blue;
            return new Color(['red' => $red, 'green' => $green, 'blue' => $blue]);
        }
        public function sub($color) {
            $red = $this->red - $color->red;
            $green = $this->green - $color->green;
            $blue = $this->blue - $color->blue;
            return new Color(['red' => $red, 'green' => $green, 'blue' => $blue]);
        }
        public function mult($factor) {
            $red = $this->red * $factor;
            $green = $this->green * $factor;
            $blue = $this->blue * $factor;
            return new Color(['red' => $red, 'green' => $green, 'blue' => $blue]);
        }
    }
?>