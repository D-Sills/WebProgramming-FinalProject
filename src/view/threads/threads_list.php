<!-- views/categories.php -->
<div>
    <h2 class="text-xl"><?php echo $title; ?></h2>
    <h4 class="my-1 text-sm"><?php echo $topic['topic_description']; ?></h4>

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/<?php echo $base_url; ?>/"><i class="bi bi-house-door"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $topic['category_name']; ?></li>
        </ol>
    </nav>
</div>

<div class="d-flex justify-content-between">
    <?php include 'pagination.php'; ?>

    <?php if ($user) { ?>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newThreadModal">
            <span">Post thread</span>
        </button>
    <?php } else { ?>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">
            <span>Log in to post</span>
        </button>
    <?php }?>
</div>

<div class = "my-3 drop-shadow">
    <?php 
    if (!empty($threads)) {
        foreach ($threads as $thread):
            echo '<div class="odd-even">';
            include 'thread.php';
            echo '</div>';
        endforeach;
    } else {
        include 'no_threads.php';
    }
    ?>
</div>


<?php include 'pagination.php'; ?>