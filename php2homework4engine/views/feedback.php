<div id = "main">
    <div class = "post_title"><h2>Отзывы</h2></div>
     <form action = "#" method = "post">
        <?=$messageStatus?>
        <input hidden type = "text" name = "id" value = "<?=$id?>"><br>
        <input type = "text" name = "name" placeholder = "Ваше имя" value = "<?=$name?>"><br>
        <input type = "text" name = "message" placeholder = "Ваш отзыв"  value = "<?=$message?>"><br>
        <input type = "submit" name = "ok" value = "Отправить комментарий">
    </form>
    <?foreach ($feedback as $item): ?>
    <p>
        <?=$item['time']?><br><b><?=$item['name']?>: </b><?=$item['message']?> 
        <a href = "#">[править]</a>  
        <a href = "#">[x]</a><br>
    </p>
    <?endforeach;?>
</div>