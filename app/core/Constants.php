<?php
use App\Config;
use App\DatabaseAccount;

$config = new Config;
$account = new DatabaseAccount;

define('BASE_URL', $config->base_url());

define('DB_HOST', $account->db_host);
define('DB_USER', $account->db_user);
define('DB_PASS', $account->db_pass);
define('DB_NAME', $account->db_name);