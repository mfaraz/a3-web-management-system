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
								'rules' => 'trim|callback_username_check|required|min_length[2]|max_length[12]|xss_clean'
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
								'rules' => 'trim|callback_username_check|required|min_length[6]|max_length[10]|is_unique[Account.c_id]|xss_clean'
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
								'rules' => 'trim|callback_username_check|required|min_length[6]|max_length[10]|xss_clean'
							),
						array
							(
								'field' => 'email',
								'label' => 'Email',
								'rules' => 'trim|required|valid_email|min_length[6]|xss_clean'
							)
					),
					'user/index' => array
					(
						array
							(
								'field' => 'bil_post',
								'label' => 'Bil Post',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'news_reply',
								'label' => 'Reply Section',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							)
					),
					'user/event' => array
					(
						array
							(
								'field' => 'bil_post',
								'label' => 'Bil Post',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'news_reply',
								'label' => 'Reply Section',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							)
					),
					'user/download' => array
					(
						array
							(
								'field' => 'bil_post',
								'label' => 'Bil Post',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'news_reply',
								'label' => 'Reply Section',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
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
					),
					'user/buy_all_skill' => array
					(
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'user/equip_super_super_shue' => array
					(
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'user/buy_lore' => array
					(
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'lore',
								'label' => 'Lore Points',
								'rules' => 'trim|required|min_length[1]|max_length[8]|is_natural_no_zero|xss_clean'
							)
					),
					'user/rebirth' => array
					(
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'user/reset_rebirth' => array
					(
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'user/mercenary_rebirth' => array
					(
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'merc',
								'label' => 'Mercenary',
								'rules' => 'trim|required|is_natural|xss_clean'
							)
					),
					'user/mercenary_reset_rebirth' => array
					(
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'merc',
								'label' => 'Mercenary',
								'rules' => 'trim|required|is_natural|xss_clean'
							)
					),
					'user/char_points' => array
					(
						array
							(
								'field' => 'str',
								'label' => 'Strength',
								'rules' => 'trim|required|is_natural|callback_points_check|xss_clean'
							),
						array
							(
								'field' => 'int',
								'label' => 'Intelligence',
								'rules' => 'trim|required|is_natural|callback_points_check|xss_clean'
							),
						array
							(
								'field' => 'dex',
								'label' => 'Dexterity',
								'rules' => 'trim|required|is_natural|callback_points_check|xss_clean'
							),
						array
							(
								'field' => 'vit',
								'label' => 'Vitality',
								'rules' => 'trim|required|is_natural|callback_points_check|xss_clean'
							),
						array
							(
								'field' => 'mana',
								'label' => 'Mana',
								'rules' => 'trim|required|is_natural|callback_points_check|xss_clean'
							)
					),
					'user/merc_points' => array
					(
						array
							(
								'field' => 'str',
								'label' => 'Strength',
								'rules' => 'trim|required|is_natural|callback_points_check|xss_clean'
							),
						array
							(
								'field' => 'int',
								'label' => 'Intelligence',
								'rules' => 'trim|required|is_natural|callback_points_check|xss_clean'
							),
						array
							(
								'field' => 'dex',
								'label' => 'Dexterity',
								'rules' => 'trim|required|is_natural|callback_points_check|xss_clean'
							),
						array
							(
								'field' => 'vit',
								'label' => 'Vitality',
								'rules' => 'trim|required|is_natural|callback_points_check|xss_clean'
							),
						array
							(
								'field' => 'mana',
								'label' => 'Mana',
								'rules' => 'trim|required|is_natural|callback_points_check|xss_clean'
							)
					),
					'vip/salary' => array
					(
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'admin/index' => array
					(
						array
							(
								'field' => 'subject',
								'label' => 'Subject',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'news_add',
								'label' => 'News',
								'rules' => 'trim|required|prep_for_form|xss_clean'
							),
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'admin/news_edit' => array
					(
						array
							(
								'field' => 'subject',
								'label' => 'Subject',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'news_edit',
								'label' => 'News',
								'rules' => 'trim|required|prep_for_form|xss_clean'
							),
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'admin/editing_download' => array
					(
						array
							(
								'field' => 'subject',
								'label' => 'Subject',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'download_add',
								'label' => 'Download',
								'rules' => 'trim|required|prep_for_form|xss_clean'
							),
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'admin/download_edit' => array
					(
						array
							(
								'field' => 'subject',
								'label' => 'Subject',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'download_edit',
								'label' => 'Download',
								'rules' => 'trim|required|prep_for_form|xss_clean'
							),
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'admin/editing_event' => array
					(
						array
							(
								'field' => 'subject',
								'label' => 'Subject',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'event_add',
								'label' => 'Event',
								'rules' => 'trim|required|prep_for_form|xss_clean'
							),
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'admin/event_edit' => array
					(
						array
							(
								'field' => 'subject',
								'label' => 'Subject',
								'rules' => 'trim|required|xss_clean'
							),
						array
							(
								'field' => 'event_edit',
								'label' => 'Event',
								'rules' => 'trim|required|prep_for_form|xss_clean'
							),
						array
							(
								'field' => 'character',
								'label' => 'Character',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'admin/info_account' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							)
					),
					'admin/changing_account_type' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'acc',
								'label' => 'Account Type',
								'rules' => 'trim|required|alpha|min_length[2]|max_length[6]|xss_clean'
							)
					),
					'admin/paid_membership' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'paid',
								'label' => 'Type Of Membership',
								'rules' => 'trim|required|alpha|min_length[2]|max_length[5]|xss_clean'
							),
						array
							(
								'field' => 'month',
								'label' => 'Month',
								'rules' => 'trim|required|is_natural|max_length[2]|xss_clean'
							)
					),
					'admin/account_ban' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'banning',
								'label' => 'Ban Type',
								'rules' => 'trim|required|is_natural_no_zero|xss_clean'
							)
					),
					'admin/equipping_equipment_and_passive_skill' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'eq',
								'label' => 'Equipment',
								'rules' => 'trim|required|min_length[2]|xss_clean'
							),
						array
							(
								'field' => 'psskill',
								'label' => 'Passive Skill',
								'rules' => 'trim|required|min_length[2]|xss_clean'
							)
					),
					'admin/equip_super_super_shue' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'sss',
								'label' => 'Super Super Shue',
								'rules' => 'trim|required|xss_clean'
							)
					),
					'admin/learn_episode_5_skill' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							)
					),
					'admin/altering_level' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'level',
								'label' => 'Level',
								'rules' => 'trim|required|is_natural_no_zero|xss_clean'
							)
					),
					'admin/inserting_lore' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'lore',
								'label' => 'Lore',
								'rules' => 'trim|required|is_natural_no_zero|xss_clean'
							)
					),
					'admin/grace_of_silbadu_insertion' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							)
					),
					'admin/inserting_1_box_of_items' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'item',
								'label' => 'Item',
								'rules' => 'trim|required|is_natural_no_zero|exact_length[4]|xss_clean'
							),
						array
							(
								'field' => 'slot',
								'label' => 'Slot',
								'rules' => 'trim|required|is_natural_no_zero|min_length[1]|max_length[2]|xss_clean'
							)
					),
					'admin/inserting_1_item' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'item',
								'label' => 'Item',
								'rules' => 'trim|required|min_length[2]|xss_clean'
							),
						array
							(
								'field' => 'slot',
								'label' => 'Slot',
								'rules' => 'trim|required|is_natural|min_length[1]|max_length[2]|xss_clean'
							)
					),
					'admin/character_clone' => array
					(
						array
							(
								'field' => 'char1',
								'label' => 'Character Backup',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'char2',
								'label' => 'Character Restore',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							)
					),
					'admin/guild_removal' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							)
					),
					'admin/info_pk' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							)
					),
					'admin/altering_PK_timer' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'timer',
								'label' => 'Timer',
								'rules' => 'trim|required|is_natural|max_length[12]|xss_clean'
							)
					),
					'admin/inserting_items_manually' => array
					(
						array
							(
								'field' => 'char',
								'label' => 'Character',
								'rules' => 'trim|required|min_length[2]|max_length[12]|xss_clean'
							),
						array
							(
								'field' => 'code',
								'label' => 'code',
								'rules' => 'trim|required|xss_clean'
							)
					)



































				);
?>