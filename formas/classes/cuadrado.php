<?php

	Class Cuadrado extends Rectangulo  {

		public function __construct ($lado) {
			parent::__construct($lado, $lado);
		}

		public function setColor($color) {
			parent::setColor($color);
		}

		public function area() {
			echo parent::area();
		}

		public function perimetro() {
			echo parent::perimetro();
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