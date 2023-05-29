<?php
require './app/init.php';

$migrate = new Migrate;

header("location:". BASE_URL ."/view/login");