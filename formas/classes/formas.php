<?php

	Abstract Class Formas {
		public $nombre;
		public $color;

		public function __construct($nombre) {
			$this->nombre = $nombre;
		}

		public function setColor ($color) {
			$this->color = $color;
		}

		public abstract function area();

		public abstract function perimetro();

		public function texto() {
			echo 'Mi area es ';
			echo $this->area();
			echo '.  Mi perimetro es ';
			echo $this->perimetro();
			echo '.';
		}

		public function allocateCollor($image) {
			$color_array = str_split($this->color, 1);

			$rojo = hexdec($color_array[1].$color_array[2]);
			$verde = hexdec($color_array[3].$color_array[4]);
			$azul = hexdec($color_array[5].$color_array[6]);

			$background_color = imagecolorallocate($image, $rojo, $verde, $azul);
			return $background_color;
		}

	}

?>