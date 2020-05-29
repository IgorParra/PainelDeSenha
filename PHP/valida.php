<?php
    $conexao=pg_connect('host=
    dbname=
    password=
    user=');

    
    if(!empty($_POST['codigo'])){
        $senha=$_POST['codigo'];
        $requisicao=pg_query("update senha set senha=$senha where senha is NOT NULL");
        
       
        
    }else{

        $requisicao=pg_query("select * from senha");
        while($linha=pg_fetch_assoc($requisicao)){
            
            echo $linha['senha'];
            exit;
        }
        
    };

   
   

    
    
    
    
   
    

?>