<?php

	$ramal=$_GET["ramal"];

    $con = new mysqli("localhost", "user", "senha", "tabela");
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
    
	//Consultando banco de dados
    $qryLista = mysqli_query($con, "SELECT");    
    while($resultado = mysqli_fetch_assoc($qryLista)){
        $vetor[] = array_map('utf8_encode', $resultado); 
		
    }    
	
	$teste = $vetor[0]['TAG_NUMERO'];
	$PK_ID_TAG = $vetor[0]['PK_ID_TAG'];
	$NOME = $vetor[0]['TAG_NOME'];
	
	if( $teste != null){
	mysqli_query($con, "INSERT INTO log );" ); //Inserindo LOg na tabela
	}
	
	if( $teste == null){
	mysqli_query($con, "INSERT INTO log );" ); //Inserindo LOg na tabela
	}
	
	
	
    //Passando vetor em forma de json
    echo json_encode($teste, JSON_PRETTY_PRINT);
 
?>