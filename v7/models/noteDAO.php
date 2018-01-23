<?php

require_once(PATH_MODELS."DAO.php");

class noteDAO extends DAO{

	public function calculDeciles(){
		$batteries = $this->queryAll("SELECT capacite_batterie FROM telephones WHERE pertinence = 1 ORDER BY capacite_batterie ASC");
		if ($batteries) {
			foreach ($batteries as $key => $value) {
				$batterie[$key] = $value[0]; 
			}
			$nb_bat = count($batteries);
			for ($i=1; $i < 10; $i++) { 
				$id_decile[$i] = round($i*($nb_bat/10));
			}
			$deciles[0] = 0;
			for ($i=1; $i < 10; $i++) { 
				$deciles[$i] = $batterie[$id_decile[$i]];
			}
			return $deciles;
		}
		else return false;
	}

	public function calculAllNotesBatterie($deciles){
		$telephones = $this->queryAll("SELECT capacite_batterie, ID FROM telephones WHERE pertinence = 1");
		if ($telephones) {
			foreach ($telephones as $key => $value) {
				$telephone[$value['ID']] = $value['capacite_batterie'];
			}
			foreach ($telephone as $key => $value) {
				$i = 0;
				while ($value >= $deciles[$i] && $i < 9) {
					if ($value < $deciles[$i+1]) {
						$notes[$key] = $i+1;
					}
					$i++;
				}
				if ($value > $deciles[9]) {
					$notes[$key] = 10;
				}
			}
			return $notes;
		}
		else return false;
	}

	public function uptadeNotesBatteries($notes){
		foreach ($notes as $key => $value) {
			$res = $this->queryRowIns("UPDATE notes SET note_autonomie = :capac WHERE id = :id", array(
				'id' => $key,
				'capac' => $value));
			if (!$res) {
				return false;
			}
		}
		return true;
	}
}