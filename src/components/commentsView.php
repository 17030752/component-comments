<?php 
use d17030752\ComponentComments\models\Comment;
require_once 'src/models/Comment.php';
$params = explode('&' , $_SERVER['QUERY_STRING']);
/* print_r($params) ; die(); */   
$url ='';
foreach($params as $param){
    if (strpos($param , 'view=') == 0) {
        # result of code is like this => view=page1 to this =>[view,page1]
        $url = explode('=', $param)[1];
    }
}
if (isset($_POST['username']) && isset($_POST['text'])&& $url != '') {
    # code...
    $username =$_POST['username'];
    $text =$_POST['text'];
    
    $comment = new Comment($username,$text,$url);
    $comment->save();
}
?>
<div class="comments-container">
<form action="" method="post">
    <input type="text" name="username" placeholder="Username..." required id="">
<textarea name="text" id="" cols="30" rows="10" required placeholder="you comment here...">

</textarea>
<input type="submit" value="submit comment" class="button">
</form>
<div class="comments">
    <?php $comments = Comment::getAll($url);
    foreach($comments as $comment){
    ?>
    <div class="comment">
        <div class="username"><?php echo $comment->getUsername();?></div>
        <div class="text"><?php echo $comment->getText();?></div>
        <div class="date"><?php echo $comment->getDate();   ?></div>
    </div>
    <?php }
    ?>
</div>
</div>
    
</div>