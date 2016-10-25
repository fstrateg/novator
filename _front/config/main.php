<?php
require(__DIR__ . '/../../_common/config/bootstrap.php');

$config = array_merge(
	require(__DIR__ . '/web.php'),
	require(__DIR__ . '/../../_common/config/common.php')
	);
return $config;