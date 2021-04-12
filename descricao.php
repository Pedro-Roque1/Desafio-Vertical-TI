<?php
require("cabecalho.php");
$listaPosts = json_decode(file_get_contents("http://jsonplaceholder.typicode.com/posts"),true);

foreach ($listaPosts as $post){

    if($post['id'] == $_GET['idPost']){
        $postEncontrado = $post;
    }
}    
?>


            <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <h4>ID do Post:</h4> 
                            <?=$postEncontrado['id'] ?>
                    </li>
                    <li class="list-group-item">
                        <h4>Título:</h4> 
                            <?=$postEncontrado['title'] ?>
                    </li>
                    <li class="list-group-item">
                        <h4>Descrição:</h4> 
                            <?=$postEncontrado['body'] ?>
                    </li>                    
            </ul>
            

