<?php
require_once __DIR__ . '/../model/posts_db.php';
require_once __DIR__ . '/../model/users_db.php';

$searchResults = searchForum($searchQuery, $searchType);
$title = "Search Results";

include __DIR__ .'/../view/header.php';
include __DIR__ .'/../view/navbar.php';
include __DIR__ .'/../view/search/body.php';
include __DIR__ .'/../view/footer.php';

?>