<?php

//////////////////////////////////////////////////////////////////////////////80
// Update Controller
//////////////////////////////////////////////////////////////////////////////80
// Copyright (c) Atheos & Liam Siira (Atheos.io), distributed as-is and without
// warranty under the MIT License. See [root]/LICENSE.md for more.
// This information must remain intact.
//////////////////////////////////////////////////////////////////////////////80
// Authors: Codiad Team, @Fluidbyte, Atheos Team, @hlsiira
//////////////////////////////////////////////////////////////////////////////80

require_once('class.update.php');

$Update = new Update();

switch ($action) {

	//////////////////////////////////////////////////////////////////////////80
	// Initialize the Update Modules
	//////////////////////////////////////////////////////////////////////////80
	case 'init':
		$Update->init();
		break;

	//////////////////////////////////////////////////////////////////////////80
	// Save Local Data
	//////////////////////////////////////////////////////////////////////////80
	case 'saveCache':
		$cache = POST("cache");
		$Update->saveCache($cache);
		break;


	//////////////////////////////////////////////////////////////////////////80
	// Default: Invalid Action
	//////////////////////////////////////////////////////////////////////////80
	default:
		Common::send("error", "Invalid action.");
		break;
}