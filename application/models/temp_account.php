<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Temp_account extends CI_Model 
	{
		function __construct()
			{
				parent::__construct();
			}
#############################################################################################################################
//CRUD for temp_account
//SELECT
	function temp_account($passkey)
		{
			return $this->db->get_where('Temp_Account', array('passkey' => $passkey));
		}

//UPDATE

//INSERT
	function insert_temp_account($username, $password, $email, $passkey)
		{
			$array = array
							(
								'username' => $username,
								'password' => $password,
								'email' => $email,
								'passkey' => $passkey,
								'date' =>  mssqldate()
							);
			return $this->db->insert('Temp_Account', $array );
		}

//DELETE
	function delete_temp_account($passkey)
		{
			return $this->db->delete('Temp_Account', array('passkey' => $passkey));
		}
#############################################################################################################################
	}
?>