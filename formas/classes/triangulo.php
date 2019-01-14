<?php

	Class Triangulo extends Formas {
		public $larg;
		public $alt;	

		public function __construct ($larg, $alt) {
			parent::__construct('Triangulo');
			$this->larg = $larg;
			$this->alt = $alt;
		}

		public function setColor($color) {
			parent::setColor($color);
		}

		public function area() {
			return round ((intval($this->larg) * intval($this->alt)) / 2, 2);
		}

		public function perimetro() {
			$hipo = round (sqrt (pow(intval($this->larg), 2) + pow(intval($this->alt), 2)), 2);
			return round (intval($this->larg) + intval($this->alt) + $hipo, 2);
		}

		public function texto() {
			parent::texto();
		}

		public function allocateCollor($image) {
			$background_color = parent::allocateCollor($image);
			return $background_color;
		}

		public function makeShape($image, $background_color, $espacio) {
			$x = $this->larg;
			$y = $this->alt;
			$marg_x = ($espacio - $x) / 2;
			$marg_y = ($espacio - $y) / 2;
			$valores = [$marg_x, $marg_y, $marg_x, ($y + $marg_y), ($x + $marg_x), ($y + $marg_y) ];
			imagefilledpolygon($image, $valores, 3, $background_color);
		}

	}

?>