<?php 
	/**
	 * 
	 */
	class diagram_pie_it extends CI_Model{
		public function get_all_data(){
			$query = $this->db->query("SELECT COUNT(*) AS jml, untuk FROM feedback WHERE untuk = 'IT' GROUP BY untuk");
			return $query;
		}
	}
?>