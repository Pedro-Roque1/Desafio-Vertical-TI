<?php
require("cabecalho.php");

$listaPosts = json_decode(file_get_contents("https://jsonplaceholder.typicode.com/posts"),true);

$cont = sizeof($listaPosts);
 foreach ($listaPosts as $post){
        	$post['id'] = $cont;
        	$cont--;
    		if ($cont<= (sizeof($listaPosts)-12)) {
				break;
    		}else{
?>
		<div class="list-group">
			  <a href="descricao.php?idPost=<?=$post['id'] ?>" class="list-group-item list-group-item-action" aria-current="true">
			    <div class="d-flex w-100 justify-content-between">
			      <h5 class="mb-1"><?= $post['title'] ?></h5>
			    </div>
			    <p class="mb-1"><?= $post['title'] ?></p>
			    
			  </a>
		</div>
		</body>
<?php
}
}
?>


