<?php
$title = "";
$commentText = "";
if (isset($comment)) {
    $title = $comment->title;
    $commentText = $comment->comment;
}
?>

<form class="user-login user form" method="post">
    <div class="input">
        <label><b>Titel</b></label><br>
        <input type="text" name="title" value="<?= $title ;?>" required>
    </div>
    <div class="input">
        <label><b>Kommentar</b></label><br>
        <textarea rows=10 name="comment"><?= $commentText ;?></textarea>
    </div>
    <div class="button-form">
        <button type="submit" name="button">Skicka</button>
    </div>
</form>
