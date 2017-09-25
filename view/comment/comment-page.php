<?php if (isset($result)) : ?>
    <div class="notice"><?= $result ; ?></div>
<?php endif ; ?>
<?php foreach ($comments as $comment) : ?>
    <?php if ($comment->deleted === null) : ?>
        <div class="comment-post">
            <h2><?= htmlentities($comment->title); ?></h2>
            <div class="comment-content">
                <?= htmlentities($comment->comment); ?>
            </div>
            <div class="gravatar">
                <img src="<?= htmlentities($comment->gravatar); ?>">
            </div>
            <div class="author">
                Skriven av: <?= htmlentities($comment->firstname) . " " . htmlentities($comment->lastname); ?>
            </div>
            <?php if ($comment->owner || $comment->userAdmin) : ?>
            <div class="edit">
                <a href="<?= $this->di->get("url")->create("comments/edit/" . $comment->commentId); ?>">
                    Edit
                </a> -
                <a href="comments/delete/<?= $comment->commentId ?>">
                    Delete
                </a>
            </div>
            <?php endif ; ?>
        </div>
    <?php endif ; ?>
<?php endforeach ; ?>
