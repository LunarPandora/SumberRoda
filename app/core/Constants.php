<?php
use App\Config;

$config = new Config;

define('BASE_URL', $config->base_url());