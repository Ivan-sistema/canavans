<?php

if ( in_category('padreadores-matrizes')) {

	include 'single-padreadores-matrizes.php';

} else if ( in_category('ninhadas')){
include 'single-ninhadas.php';
}else {

	include 'single-padrao.php';

}

?>