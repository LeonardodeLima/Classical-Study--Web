<?php

     //  rotina PHP para alterações de link no previews em sistema geral
	 $conn = mysql_connect('localhost', 'root', '') or die('Não foi possível conectar ao banco de dados: <b>' . mysql_error());
	 //seleciona a base de dados
	 mysql_select_db('db_catalogo', $conn) or die('Não foi possível selecionar o banco de dados');
	  
	$titulos = array(  /*|TITULO|* *|TIPO|* *|GENERO|* *|LINK|* *|CAPA|*/ 
	  array("Children","Animação","Drama","https://www.youtube.com/embed/BE4oz2u6OHY?rel=0&amp;showinfo=0","http://www.pipocagigante.com.br/wp-content/uploads/2015/05/589991.jpg"),	
	  array("In the fall","Animação","Drama","https://www.youtube.com/embed/A-rEb0KuopI?rel=0&amp;showinfo=0","http://www.pipocagigante.com.br/wp-content/uploads/2015/05/589991.jpg"),
	  array("MAN","Animação","Drama","https://www.youtube.com/embed/WfGMYdalClU?rel=0&amp;showinfo=0","http://www.pipocagigante.com.br/wp-content/uploads/2015/05/589991.jpg"),
	  array("Bee Mine | Pencilmation Cartoon #22","Animação","Drama","https://www.youtube.com/embed/P1isiRO_wCI?rel=0&amp;showinfo=0","http://www.pipocagigante.com.br/wp-content/uploads/2015/05/589991.jpg"),
	  array("A-Door-Able | Pencilmation Cartoon #41","Animação","Drama","https://www.youtube.com/embed/LQxgmTDQrNQ?rel=0&amp;showinfo=0","http://www.pipocagigante.com.br/wp-content/uploads/2015/05/589991.jpg"),
	  array("Teste do título","Animação","Drama","https://www.youtube.com/embed/hUj65M4T1cg?rel=0&amp;controls=0&amp;showinfo=0","http://www.pipocagigante.com.br/wp-content/uploads/2015/05/589991.jpg"),  
	  array("Teste do título","Animação","Drama","https://www.youtube.com/embed/hUj65M4T1cg?rel=0&amp;controls=0&amp;showinfo=0","http://www.pipocagigante.com.br/wp-content/uploads/2015/05/589991.jpg"),  
	  array("repetido 2","Animação","Drama","https://www.youtube.com/embed/rTXudHZM39Q?rel=0&amp;controls=0&amp;showinfo=0","http://www.pipocagigante.com.br/wp-content/uploads/2015/05/589991.jpg"),  
	  array("Teste do título","Animação","Drama","https://www.youtube.com/embed/hUj65M4T1cg?rel=0&amp;controls=0&amp;showinfo=0","http://www.pipocagigante.com.br/wp-content/uploads/2015/05/589991.jpg"),  
	  array("Teste do título","Animação","Drama","https://www.Teste do títulom/embed/hUj65M4T1cg?rehttps://www.youtube.com/embed/hUj65M4T1cg","http://www.pipocagigante.com.br/wp-content/uploads/2015/05/589991.jpg"),
	); 



    for($i=0; $i<7; $i++){
    	
        $ponteiro = rand(0, 9);


      	$titulo = $titulos[$ponteiro][0];
		$tipo   = $titulos[$ponteiro][1];
	    $genero = $titulos[$ponteiro][2];
		$link   = $titulos[$ponteiro][3];
		$capa   = $titulos[$ponteiro][4];
		$ultimoponteiro = $ponteiro;

     echo $i;
      $query = ("UPDATE `video` SET `titulo`='$titulo',`tipo`='$tipo',`genero`='$genero',`link`='$link',`capa`='$capa' WHERE  id='$i'");
	  $inserir = mysql_query($query)  or die('Falha na instrução SQL: ' . mysql_error());
	  echo $query."</br>";
	  echo $inserir;
	}
	
	mysql_close();  
	echo"rodou!";
?>
