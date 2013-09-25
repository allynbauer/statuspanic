<div class="stockticker" style="float:left; overflow: hidden; height: 1em;">
    <div class='stock'><?php echo rand(99,299); ?> Created by <a href='http://allynbauer.com'>Allyn Bauer</a></div>
    <div class='stock'>Get it at <a href='http://github.com/ajb/statuspanic'>GitHub</a></div>
    <div class='stock'>Today is <strong><?php echo date('l, M jS, Y'); ?></strong></div>
    <?php
    for ($i=1; $i<=20; $i++) {
        $gravatar = '<img src="http://www.gravatar.com/avatar.php?gravatar_id='. md5($i) .'&s=20&d=monsterid" align="top"> ';
        echo "<div class='stock'>". $gravatar ." this is a sample text message #". $i ." </div>";
    }
    ?>
</div>
<div style="clear: all;"></div>
<br/>

