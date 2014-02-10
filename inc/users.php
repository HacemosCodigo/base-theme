<?php


// CUSTOM USER CONFIGURATIONS /////////////////////////////////////////////////////////



	$administrator = get_role('administrator');
	add_role( 'developer', 'Developer', $administrator->capabilities );


	remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );


	add_filter('user_contactmethods', function ( $contactmethods ) {
		unset($contactmethods['url']);
		unset($contactmethods['aim']);
		unset($contactmethods['yim']);
		unset($contactmethods['jabber']);
		$contactmethods['twitter']  = 'Twitter';
		$contactmethods['facebook'] = 'Facebook';
		return $contactmethods;
	});
	
	
	add_action('admin_menu', function() use (&$current_user){
		if ( in_array('developer', $current_user->roles) ){
			add_options_page(__('All Settings'), __('All Settings'), 'developer', 'options.php');
		}
	});



// CREATE DEFAULT USERS ///////////////////////////////////////////////////////////////



	add_action('init', function(){
		$users = array('alex', 'cova', 'clau', 'juan', 'nori', 'pam', 'york');
		array_map('create_usuario_maquilador', $users);
	});


	/**
	 * Crear un nuevo usuario
	 * @param  string $user username
	 */
	function create_usuario_maquilador($user){
		$password = wp_generate_password();
		$user_id  = wp_create_user( $user, $password, "$user@losmaquiladores.com" );
		if ( is_int($user_id) ){
			set_maquilador_role( $user_id );
			wp_new_user_notification( $user_id, $password );
		}
	}


	/**
	 * Set user role as developer (super admin)
	 * @param int $user_id
	 */
	function set_maquilador_role($user_id){
		$wp_user = get_user_by( 'id', $user_id );
		$wp_user->set_role( 'developer' );
	}
