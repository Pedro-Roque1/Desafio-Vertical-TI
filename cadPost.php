
<?php
        require('cabecalho.php');
        if ( isset($_GET['acao']) && $_GET['acao'] == 'cadastrar'){
        	$jsonPost= file_get_contents("https://jsonplaceholder.typicode.com/posts");
            $postArray = json_decode($jsonPost);
            $novoPost = [
                "userId"   => $_POST['userId'],
                "id"  => $_POST['id'],
                "title" => $_POST['title'],
                "body" => $_POST['body'],
            ];
            //Atualiza o array de Posts
            $postArray[] = $novoPost;
            print_r($postArray);
            //Atualiza o arquivo .json
            $jsonPost = json_encode($postArray, JSON_PRETTY_PRINT);
            file_put_contents('arquivo.json', $jsonPost);
          
           

    }
?>
        <div class="container"style="margin-top: 5%;">
                    
                                
                    <div class="col-md-6 cad">
                            <form method="post" action="?acao=cadastrar" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="userId"><h6>Id de usuário:</h6></label>
                                        <input name="userId" type="text" class="form-control" id="email"  placeholder="Id de usuário:">
                                    </div>
                                    <div class="form-group">
                                        <label for="id"><h6>Id Post:</h6></label>
                                        <input name="id" type="text" class="form-control" id="email"  placeholder="Id do Post:">
                                    </div>
                                    <div class="form-group">
                                        <label for="title"><h6>Título Post:</h6></label>
                                        <input name="title" type="text" class="form-control" placeholder="Título:">
                                    </div>
                                    <div class="form-group">
                                        <label for="body"><h6>Texto:</h6></label>
                                        <input name="id" type="text" class="form-control" id="email"  placeholder="Descrição:">
                                    </div>
                                    
                                    <button class="btn btn-outline-success my-2 my-sm-0 botaocad" type="submit">Cadastrar</button>
                            </form>
                    </div>
        </div>

