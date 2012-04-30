<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
#############################################################################################################################

function ckeditor($textarea_id, $initialValue, $group = '')
	{
		/*
		* Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
		* For licensing, see LICENSE.html or http://ckeditor.com/license
		*/
		
		/*! \mainpage CKEditor - PHP server side intergation
		* \section intro_sec CKEditor
		* Visit <a href="http://ckeditor.com">CKEditor web site</a> to find more information about the editor.
		* \section install_sec Installation
		* \subsection step1 Include ckeditor.php in your PHP web site.
		* @code
		* <?php
		* include("ckeditor/ckeditor.php");
		* ?>
		* @endcode
		* \subsection step2 Create CKEditor class instance and use one of available methods to insert CKEditor.
		* @code
		* <?php
		* $CKEditor = new CKEditor();
		* echo $CKEditor->textarea("field1", "<p>Initial value.</p>");
		* ?>
		* @endcode
		*/

		if ( !function_exists('version_compare') || version_compare( phpversion(), '5', '<' ) )
			include_once( 'ckeditor_php4.php' ) ;
		else
			include_once( 'ckeditor_php5.php' ) ;

		// Create a class instance.
		$CKEditor = new CKEditor();

		// Path to the CKEditor directory.
		$CKEditor->basePath = base_url().'js/ckeditor/';

		// Set global configuration (used by every instance of CKEditor).
		$CKEditor->config['width'] = 600;

		$CKEditor->textareaAttributes = array("cols" => 50, "rows" => 10);

		//must restrict some of the ckeditor features to non admin users
		if ($group == 'Normal' || $group == 'BM' || $group == 'SM' || $group == 'GoldM')
			{
				$CKEditor->config['toolbar'] = 'Basic';
			}

		// Change default textarea attributes.
		$CKEditor->textareaAttributes = array("cols" => 80, "rows" => 10);

		return $CKEditor->editor($textarea_id, $initialValue);
	}

#############################################################################################################################

?>