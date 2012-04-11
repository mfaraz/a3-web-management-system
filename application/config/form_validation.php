<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
##################################################################################################

//form validation through controller
//format
/*
$config = array	( 
					'controller/function' => array
					( 
						array
							(
								'field' => 'login',
								'label' => 'Login',
								'rules' => 'trim|required|min_length[6]|max_length[12]|xss_clean'
							)
					)
				);
*/
##################################################################################################

$config = array	( 
					'a3/login' => array
					(
						array
							(
								'field' => 'login',
								'label' => 'Login',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'passwd',
								'label' => 'Login Password',
								'rules' => 'trim|required|min_length[6]|xss_clean'
							)
					),
					'a3/register' => array
					(
						array
							(
								'field' => 'username',
								'label' => 'Username',
								'rules' => 'trim|required|min_length[6]|max_length[10]|is_unique[Account.c_id]|xss_clean'
							),
						array
							(
								'field' => 'password1',
								'label' => 'Password',
								'rules' => 'trim|required|matches[password2]|min_length[6]|xss_clean'
							),
						array
							(
								'field' => 'password2',
								'label' => 'Retype Password',
								'rules' => 'trim|required|min_length[6]|xss_clean'
							),
						array
							(
								'field' => 'email',
								'label' => 'Email',
								'rules' => 'trim|required|valid_email|is_unique[Account.c_headerb]|xss_clean'
							),
						array
							(
								'field' => 'verify',
								'label' => 'Image Verification',
								'rules' => 'trim|required|min_length[5]|max_length[5]|is_natural|xss_clean'
							)
					),
					'a3/password_retrieve' => array
					(
						array
							(
								'field' => 'username',
								'label' => 'Username',
								'rules' => 'trim|required|min_length[6]|max_length[10]|xss_clean'
							),
						array
							(
								'field' => 'email',
								'label' => 'Email',
								'rules' => 'trim|required|valid_email|min_length[6]|xss_clean'
							)
					),
					'user/change_password' => array
					(
						array
							(
								'field' => 'old_password',
								'label' => 'Old Password',
								'rules' => 'callback_old_password_check|trim|required|min_length[6]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'password1',
								'label' => 'Password',
								'rules' => 'trim|required|matches[password2]|min_length[6]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'password2',
								'label' => 'Retype Password',
								'rules' => 'trim|required|min_length[6]|max_length[12]|xss_clean'
							)
					),
					'user/offline_town_portal' => array
					(
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'town',
								'label' => 'Town',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'user/acquire_super_shue' => array
					(
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					)



































				)
?>