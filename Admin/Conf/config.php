<?php
$program_config = require('./config.inc.php');
$configinc = array(
		//'配置项'=>'配置值'
		'TMPL_PARSE_STRING' => array(
			'__PUBLIC__' => '/wzhn/Admin/Public',
			'__APP__'=>'/wzhn/admin.php',
			'__UPLOADS__'=>'/wzhn/Uploads',
			
		)
	);
return array_merge( $program_config,$configinc);
?>