<?php

	Class Circulo extends Formas {
		public $radio;

		public function __construct ($radio) {
			parent::__construct('Circulo');
			$this->radio = $radio;
		}

		public function setColor($color) {
			parent::setColor($color);
		}

		public function area() {
			return round ( pi() * pow($this->radio, 2), 2 );
		}

		public function perimetro() {
			return round ( 2 * pi() * $this->radio, 2 );
		}

		public function texto() {
			parent::texto();
		}

		public function allocateCollor($image) {
			$background_color = parent::allocateCollor($image);
			return $background_color;
		}

		public function makeShape($image, $background_color, $espacio) {
			$radio = $this->radio;
			$marg = ($espacio - $radio*2) / 2;
			imagefilledellipse($image, $marg + $radio, $marg + $radio, $radio*2, $radio*2, $background_color);
		}

	}

?>