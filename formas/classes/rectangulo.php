<?php

	Class Rectangulo extends Formas {
		public $larg;
		public $anch;	

		public function __construct ($larg, $anch) {
			if ($larg === $anch) {
				parent::__construct('Cuadrado');
			} else {
				parent::__construct('Rectangulo');
			}
			$this->larg = $larg;
			$this->anch = $anch;
		}

		public function setColor($color) {
			parent::setColor($color);
		}

		public function area() {
			return intval($this->larg) * intval($this->anch);
		}

		public function perimetro() {
			return (2 * intval($this->larg)) + (2 * intval($this->anch));
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
			$y = $this->anch;
			$marg_x = ($espacio - $x) / 2;
			$marg_y = ($espacio - $y) / 2;
			imagefilledrectangle($image, $marg_x, $marg_y, $x + $marg_x, $y + $marg_y, $background_color);
		}

	}

?>