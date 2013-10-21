<?php
		class file {
			public $file_name = 'images/countrylist.csv';
			protected function read_csv(){
				$first_run = TRUE;
				if ($handle = fopen($this -> $file_name, "r") !== FALSE){
					while(($data = fgetcsv($handle , 0, ",")) !== FALSE){
						if($first_run = TRUE){
							$field_name = $this -> create_field_names($data);
							$first_run = FALSE; 
						}else{
							$record[] = $this -> create_record($data ,$field_name);
						}
					}
					fclose($handle);
					html::createTable($records);
					//print_r($records);	
				}
			}
			
			public function create_field_names($data){
				return $data;
			}
			
			public function create_record($data, $field_name){
				$data = array_combine($field_name , $data);
				return $data;
			}
			
			public function writecsv($data){
				$fp = fopen('images/countrylist.csv' , "w");
				foreach($data as $fields){
					fputcsv($fp , $fields);
				}
				fclose($fp);
			}
			
		}
		
		class html extends file{
			public static function createTable($data){
				echo "<table>";
				foreach($data as $key -> $row){
					echo "<tr>";
					foreach($row as $key2 -> $row2){
						echo "<td>" . $row2 . "</td> \n";
						
					}
					echo "</tr> \n";
				}
				echo "</table>";
			}
		}
?>

