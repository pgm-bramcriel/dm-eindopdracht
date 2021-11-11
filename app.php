<?php
session_start();

require 'config.php';

require BASE_DIR . '/libs/db.php';


require BASE_DIR . '/models/BaseModel.php';
require BASE_DIR . '/models/Article.php';
require BASE_DIR . '/models/Users.php';
require BASE_DIR . '/models/Comments.php';
require BASE_DIR . '/models/Media.php';
require BASE_DIR . '/models/Brands.php';

require BASE_DIR . '/controllers/BaseController.php';

//User is logged in?
$current_userId = $_SESSION['user_id'] ?? false;
global $current_user;

if ($current_userId) {
    $current_user = Users::getById($current_userId);
}