<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PWA</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />  
<link rel="apple-touch-icon" href="img/imc.jpg">   
<meta name="theme-color" content="white"/>  
<meta name="apple-mobile-web-app-capable" content="yes">  
<meta name="apple-mobile-web-app-status-bar-style" content="black"> 
<meta name="apple-mobile-web-app-title" content="Hello World"> 
<meta name="msapplication-TileImage" content="img/imc.jpg">  
<meta name="msapplication-TileColor" content="#FFFFFF">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<meta name="theme-color" content="white"/>
	<link rel="manifest" href="manifest.json">
</head>

<body>
	<button class="add-button" target="_blank">Add to home screen</button>
	<a href="./curriculo/curriculo.html" target="_blank" title="Clique aqui para ver curriculo">Daniel Silva de Moraes</a>
	<h1 style=" font-size:50px" align="center">I M C </h1>
<div id="div1">
		<label for="peso">Peso: </label><input type="text" id="peso" maxlength="4">
		<label for="altura">Altura (cm) : </label><input type="text" id="altura" maxlength="4">
		<input type="button" id="calcular" value="Calcular IMC" onclick="calcular();">
</div>
<div id="div2">
	<label style="align-self:center;" color="red">Dados</label>
	<label id="infoAltura">Altura: </label>
	<label id="infoPeso">Peso: </label>
	<label id="infoIMC">IMC: </label>
	<label id="infoIMCIdealMenor">Para que seu IMC fique com 18.50 seu peso deverá ser:</label>
	<label id="infoIMCIdealMaior">Para que seu IMC fique com 24.99 seu peso deverá ser:</label>
	<input type="button" id="salvar" value="Salvar dados no banco de dados MYSQL" onclick="msg();">
</div>
<table class="table table-striped table-dark">
	<thead>
	  <tr>
		<th scope="col">Resultado</th>
		<th scope="col">Situação</th>
	  </tr>
	</thead>
	<tbody>
	  <tr>
		<th scope="row">Abaixo de 17</th>	
		<td>Muito Abaixo do Peso</td>
	  </tr>
	  <tr>
		<th scope="row">Entre 17 e 18,49</th>
		<td>Abaixo do peso</td>
	  </tr>
	  <tr>
		<th scope="row">Entre 18,50 e 24,99</th>
		<td>Peso normal</td>
	  </tr>
	  <tr>
		  <th scope="row">Entre 25 e 29,99</th>
		  <td>Acima do peso</td>
	  </tr>
	  <tr>
		<th scope="row">Entre 30 e 34,99</th>
		<td>Obesidade I</td>
	</tr>
	<tr>
		<th scope="row">Entre 35 e 39,99</th>
		<td>Obesidade II (severa)</td>
	</tr>
	<tr>
		<th scope="row">Acima de 40</th>
		<td>Obesidade III (mórbida)</td>
	</tr>
	</tbody>
  </table>
<script type="text/javascript">
	var altura, peso, imc = 0;
	function msg(){
		var nome = prompt("Digite seu nome: ");

		if(nome == ""){
			alert( "Insira um nome para salvar.");
		}else{
			alert("Olá "+nome+", infelizmente a função de salvar no banco de dados não está pronta.")	
		}
	}
	function calcular(){

		peso = document.getElementById("peso").value;
		altura = document.getElementById("altura").value;
		imc = peso/(altura*altura)*10000;

		if(peso<=0 || altura<=0) {

			alert ("Peso e Altura com dados inválidos ou não foram inseridos valores!");
		}
		else if(!isNaN(imc)){
		
			document.getElementById("infoAltura").innerHTML = "Altura: "+altura;
			document.getElementById("infoPeso").innerHTML = "Peso: "+peso;
			document.getElementById("infoIMC").innerHTML = "IMC: "+(imc.toFixed(2))+"       (Observe a tabela abaixo para comparar seu imc)";	
			document.getElementById("infoIMCIdealMenor").innerHTML= "Para que seu IMC fique com 18.50 seu peso deverá ser: "
			+imcIdealMenor(altura);
			document.getElementById("infoIMCIdealMaior").innerHTML= "Para que seu IMC fique com 24.99 seu peso deverá ser: "
			+imcIdealMaior(altura);;

			//alert("A conta foi efetuada com sucesso! O resultado é: "+ parseFloat(imc.toFixed(2)));	
			
		}else{
			alert("Houve algum erro no calculo dos resultados! Observe os dados inseridos e tente novamente :( ")
		}
		 
	}
	function imcIdealMenor(altura){
		altura = altura/100;
		return (18.50*(altura*altura)).toFixed(2);
	}
	function imcIdealMaior(altura){
		altura = altura/100;
		return (24.99*(altura*altura)).toFixed(2);
	}
</script>

<script src="js/main.js"></script>
</body>
</html>