<?php
    class Vertex {
        private $_x;
        private $_y;
        private $_z;
        private $_w;
        private $_color;
        public static $verbose = false;

        public static function doc() {
            return file_get_contents('Vertex.doc.txt') . PHP_EOL;;
        }
        public function __toString() {
            if (Self::$verbose == true)
                return sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, color: %s)", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
            else
                return sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f)", $this->_x, $this->_y, $this->_z, $this->_w); 
        }
        public function __construct($vertex) {
            $this->_x = $vertex['x'];
            $this->_y = $vertex['y'];
            $this->_z = $vertex['z'];
            if (isset($vertex['w']))
                $this->_w = $vertex['w'];
            else
                $this->_w = 1.0;
            if (isset($vertex['color']))
                $this->_color = $vertex['color'];
            else
                $this->_color = new Color(['rgb' => 0xffffff]);
            if (Self::$verbose == true)
                echo $this->__toString() . 'constructed' . PHP_EOL;
        }
        public function __destruct() {
            if (Self::$verbose == true)
                echo $this->__toString() . 'destructed' . PHP_EOL;
        }
        public function get_prop($prop) {
            if (property_exists(Self, $prop))
                return $this->$prop;
        }
        public function set_prop($prop, $value) {
            if (property_exists(Self, $prop))
                $this->$prop = $value;
        }
    }
?>