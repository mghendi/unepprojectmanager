<?php
    class queries extends CI_Model{
        /*public function __construct() {
            parent::__construct();
        }*/

        public function getActivities(){
            $query = $this->db->get('project_activities');
            if ($query->num_rows() > 0 ){
                return $query->result();
            }
        }

        public function addActivities($data){
            return $this->db->insert('project_activities', $data);
        }

        public function getSingleActivities($Activity_Key){
            $query = $this->db->get_where('project_activities', array('Activity_Key' => $Activity_Key));
            if ($query->num_rows() > 0 ){
                return $query->row();
            }
        }

        public function updateActivities($data, $Activity_Key){
            return $this->db->where('Activity_Key', $Activity_Key)->update('project_activities', $data);
        }

        public function deleteActivities($Activity_Key){
            return $this->db->delete('project_activities', ['Activity_Key'=>$Activity_Key]);
        }

        public function get_total()
        {
            return $this->db->count_all("project_activities");
        }
        
        public function get_current_page_records($limit, $start)
            {
                $this->db->limit($limit, $start);
                $query = $this->db->get("project_activities");
            
                if ($query->num_rows() > 0)
                {
                    foreach ($query->result() as $row)
                    {
                        $data[] = $row;
                    }
                    
                    return $data;
                }
            
                return false;
            }

            //chart data
	    public function get_data(){
		    $this->db->select('PIMS_project_number,Status,Modified,User');
		    $result = $this->db->get('project_activities');
		    return $result;
            }
    }
?>