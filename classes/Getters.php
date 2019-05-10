<?php
class GetErratas {
	public function getRoute($id){
		$path = "erratas/" . $id;
		$path .= ".json";

		if (is_file($path)) {
			$output = json_decode(file_get_contents($path));
		}
		else {
			http_response_code(404);
			$output ='Recurso não encontrado';
		}
		return json_encode($output);
	}
}

class GetEndPoints {
	public function listJsonFiles($folder, $base_url) {
		$endpoints = array();
		
		foreach (array_filter(glob($folder."/*"), 'is_file') as $key => $file) {
			$id = basename($file, '.json'); 
			$url = $base_url . '?id=' . $id;

			array_push($endpoints, $url);
		}

		$output = array(
			"Descrição" => "Lista de erros das consultas públicas publicadas no http://participe.gestaourbana.prefeitura.sp.gov.br/",
			$folder => $endpoints
		);
		return json_encode($output);
	}
}

