<?php

// Suppression de certaines entrées du menu Admin

	function lignes_studio_remove_menus(){
	  
	  // remove_menu_page( 'index.php' );                  //Dashboard
	  // remove_menu_page( 'edit.php' );                   //Posts
	  // remove_menu_page( 'upload.php' );                 //Media
	  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
	  remove_menu_page( 'edit-comments.php' );          //Comments
	  // remove_menu_page( 'themes.php' );                 //Appearance
	  // remove_menu_page( 'plugins.php' );                //Plugins
	  // remove_menu_page( 'users.php' );                  //Users
	  // remove_menu_page( 'tools.php' );                  //Tools
	  // remove_menu_page( 'options-general.php' );        //Settings
	  
	}
	add_action( 'admin_menu', 'lignes_studio_remove_menus' );

// Afficher Yoast en bas de page

	function lignes_studio_yoasttobottom() {
		return 'low';
	}
	add_filter( 'wpseo_metabox_prio', 'lignes_studio_yoasttobottom');