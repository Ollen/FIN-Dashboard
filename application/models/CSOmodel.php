<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CSOmodel extends CI_Model{
  /**
   * CRUD for the Organization Table.
   *
   * @author Gonzales, Eldes
   * @author Nato, Allendale
   * @author Sanchez, Mark
   * @author Sotalbo, Faith
   */

   public function __construct(){
     parent::__construct();
     $this->load->database();
   }

   /**
    * Gets all the data of an organization
    * @param string The initlas of the organization.
    * @return mixed - returns false if org does not exists
    */
   public function getOrgData($initials){

     $this->db->where('acronym', $initials);
     $query = $this->db->get('organization');

     $row = $query->row_array();
     // Return false if page does not exist within an org
     return ($query->num_rows() != 1) ? false : $row;
   }

}
