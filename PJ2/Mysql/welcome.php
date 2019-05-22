<link rel="stylesheet" href="form.css">
<?php
/**
 * Created by PhpStorm.
 * User: 颂先生
 * Date: 2018/6/19
 * Time: 9:33
 */
session_start();?>
<div class="body content">
    <div class="welcome" id="userimg">
        <div class="alert alert-success"><?= $_SESSION['message']?></div>
    <span class="user"><img  src="<?= $_SESSION['avatar']?>"</span><br>
    Welcome<span class="user"><?= $_SESSION['username']?></span>
    </div>
    <?php
    $mysqli = new mysqli('localhost','root','','account');
    $sql = 'select name,avatar from users';
    $result = $mysqli->query($sql);
    ?>
    <div id = "registered">
        <span> All registered users</span>
        <?php
        while ($row = $result->fetch_assoc()){
            echo "<div class = 'userlist'><span>$row[name]</span><br>";
            echo "<img src = '$row[avatar]'></div>";
        }
        ?>
    </div>
</div>
