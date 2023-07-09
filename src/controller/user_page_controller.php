<!-- controllers/posts_controller.php -->
<?php
require_once __DIR__ . '/../model/users_db.php';

$page = 'User';
$user = get_user_by_id($userId);
$activities = get_user_activity($userId, 5); // Fetch the latest 5 activities
$post_count = count_user_posts($userId);
$title = $user['username'];

include __DIR__ . '/../view/header.php';
include __DIR__ . '/../view/navbar.php';
include __DIR__ . '/../view/userpage/body.php';
include __DIR__ . '/../view/footer.php';
?>