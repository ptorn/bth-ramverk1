<?php if (isset($result)) : ?>
    <div class="notice"><?= $result ; ?></div>
<?php endif ; ?>
<?php foreach ($comments as $comment) : ?>
    <?php if ($comment->Deleted === null) : ?>
        <div class="comment-post">
            <h2><?= htmlentities($comment->Title); ?></h2>
            <div class="comment-content">
                <?= htmlentities($comment->Comment); ?>
            </div>
            <div class="gravatar"><img src="<?= htmlentities($comment->Gravatar); ?>"></div>
            <div class="author">Skriven av: <?= htmlentities($comment->Firstname) . " " . htmlentities($comment->Lastname); ?></div>
            <?php if ($comment->Owner || $comment->UserAdmin) : ?>
            <div class="edit"><a href="<?= $this->app->url->create("comments/edit/" . $comment->CommentId); ?>") ?>Edit</a> - <a href="comments/delete/<?= $comment->CommentId ?>">Delete</a></div>
            <?php endif ; ?>
        </div>
    <?php endif ; ?>
<?php endforeach ; ?>