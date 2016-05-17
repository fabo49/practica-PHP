<?php
// Modelo:  visita.  Una visita tiene dos posibles m�todos grabe y liste.

// Funcion que revisa que todos los parametros tengan datos
function check_parameters($post){
	if(!empty($post['nombre']) && !empty($post['apellidos']) && !empty($post['tel_casa']) && !empty($post['direccion_casa']) && !empty($post['tel_trabajo']) && !empty($post['direccion_trabajo']) && !empty($post['correo'])){
		return 0;
	}else{
		return -1;
	}
}

function grabe($post)
{
	if(check_parameters($post) == 0){
		$file = fopen('direcciones.csv', 'a+');
		$id = date("Y.m.d")."-". date("h:i:sa");
		$data = array(
			$id,
			strip_tags($post['nombre']),
			strip_tags($post['apellidos']),
			strip_tags($post['tel_casa']),
			strip_tags(str_replace("\r\n", '', nl2br($post['direccion_casa']))),
			strip_tags($post['tel_trabajo']),
			strip_tags(str_replace("\r\n", '', nl2br($post['direccion_trabajo']))),
			strip_tags($post['correo'])
		);
		if (fputcsv($file,  $data) > 0)
		{
			fclose($file);
			return 'Sus datos han sido recibido satisfactoriamente.';
		}
		else
		{
			fclose($file);
			return 'Sus datos no se guardaron, vuelva a intentarlo.';
		}
	}else{
		return 'Sus datos no se guardaron ya que envió campos vacíos, revise el formulario y vuelva a intentarlo';
	}
}

function liste() {
	$file = fopen('direcciones.csv', 'r');

	$visitas = array();
	while(!feof($file))
	{
		$data = fgetcsv($file);
		if($data[0] != ''){ //Quita las lineas vacias
			$visita = array('id'=>$data[0], 'nombre'=>$data[1], 'apellidos' => $data[2], 'tel_casa' => $data[3], 'direccion_casa' => $data[4], 'tel_trabajo' => $data[5], 'direccion_trabajo' => $data[6], 'correo' => $data[7]);
			array_push($visitas, $visita);
		}
	} // while

	fclose($file);
	return $visitas;
}
function salvar($post){
	// TODO
	//return 'Falta implementar esta función!!';

	if(check_parameters($post) == 0){
		delete($post['id']);
		$file = fopen('direcciones.csv', 'a+');
		$data = array(
			$post['id'],
			strip_tags($post['nombre']),
			strip_tags($post['apellidos']),
			strip_tags($post['tel_casa']),
			strip_tags(str_replace("\r\n", '', nl2br($post['direccion_casa']))),
			strip_tags($post['tel_trabajo']),
			strip_tags(str_replace("\r\n", '', nl2br($post['direccion_trabajo']))),
			strip_tags($post['correo'])
		);
		if (fputcsv($file,  $data) > 0)
		{
			fclose($file);
			return 'Sus datos han sido actualizado satisfactoriamente.';
		}
		else
		{
			fclose($file);
			return 'Sus datos no se actualizaron, vuelva a intentarlo.';
		}
	}else{
		return 'Sus datos no se actualizaron ya que envió campos vacíos, revise el formulario y vuelva a intentarlo';
	}
}

function edit($id){
	// TODO
	//return 'Falta implementar esta función!!';
	$file = fopen('direcciones.csv', 'r');
	while(!feof($file)){
		$vec_line = fgetcsv($file);
		if(strcmp($vec_line[0], $id) == 0){
			// Se convierte el indexed array a un fields array
			$vec_data = array('id'=>$vec_line[0], 'nombre'=>$vec_line[1], 'apellidos' => $vec_line[2], 'tel_casa' => $vec_line[3], 'direccion_casa' => $vec_line[4], 'tel_trabajo' => $vec_line[5], 'direccion_trabajo' => $vec_line[6], 'correo' => $vec_line[7]);
			fclose($file);
			return $vec_data;
		}
	}
}

function delete($id){

	$file = fopen('direcciones.csv', 'r');
	$vec_data = array();

	while(!feof($file)){
		$vec_line = fgetcsv($file);
		if(strcmp($vec_line[0], $id) != 0){
			// Se convierte el indexed array a un fields array
			$vec_tmp = array(
				$vec_line[0],
				$vec_line[1],
				$vec_line[2],
				$vec_line[3],
				$vec_line[4],
				$vec_line[5],
				$vec_line[6],
				$vec_line[7]
			);
			array_push($vec_data, $vec_tmp);
		}
	}

	fclose($file);
	$file = fopen('direcciones.csv', 'w+');
	foreach($vec_data as $data){
		fputcsv($file, $data);
	}
	fclose($file);

	return 'Se elminó el usuario correctamente.';

}

// Controlador:

class VisitasController extends Solsoft\ekeke\Controller {
	function index()
	{
	}

	function salvar(){
		// TODO
		$this->view->assign('mensaje', salvar($_POST));
	}
	function edit()
	{
		// TODO
		if(isset($_GET['id'])){
			$this->view->assign('vec_data', edit($_GET['id']));
		}
	}

	function delete()
	{
		if(isset($_GET['id'])){
			$this->view->assign('mensaje', delete($_GET['id']));
		}
	}

	function ver()
	{
		$visitas = liste();
		$this->view->assign('visitas', $visitas);
	}

	function grabar()
	{
		$this->view->assign('mensaje', grabe($_POST));
	}
}

?>
