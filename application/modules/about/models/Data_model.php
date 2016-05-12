<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Data_model extends CI_Model
{
	public function index()
	{
		echo 'Nothing to see here!';
	}

	public function get_user_by_id($id) {
		$this->db->where('id', $id); 
		$query = $this->db->get('users');
		foreach ($query->result() as $row){
			return $row;
		}
	}



	public function load_contacts($id=''){
		$this->db->where('user_id', $id); 
		$query = $this->db->get('contacts_rel');

		foreach ($query->result() as $row){
			$data = $this->get_user_by_id($row->contact_id);
			echo '<tr>';
			echo '<td>'.$data->first_name.' '.$data->last_name.'</td>';
			echo '<td>'.$data->email.'</td>';
			echo '<td>'.$row->status.'</td>';
			echo '<td>'.$row->timestamp.'</td>';
			echo '<td>

                         <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select A project
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">One </a></li>
                        <li><a href="#">Two</a></li>
                        <li><a href="#">Three</a></li>
                      </ul>
                    </div>

                        </td>
                        <td> 
                     <div class="btn-group">
                      <button type="button" class="btn btn-warning"><i class="fa fa-ban"></i> Block</button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-user-times"></i> Remove</button>
                    </div>

                    </td>';
			echo '</tr>';

		}
		
		//name
		//email
		//status
		//since
		//add to project
		//actions
			  
	}

}