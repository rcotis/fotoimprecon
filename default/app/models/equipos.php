<?php  
class equipos extend ActiveRecord
{
	public $ubicfisica;
	public $ubicadmin;
	public $estatus;
	public $cantusuarios;
	public $contadorcopias;
	public $codigoserial;
	public $codigoactivo;
	public $observacion;
	public $fechaingreso;
	public $id_marca;
	public $id_modelo;
	public $conexiones;
	public $multifuncion;
	public function nuevoequipo()
	{
		$nuevoequipo = new equipos();
	}

}
?>