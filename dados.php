<html>
<body>
<?php 

$servername = "localhost";
$username = "root";
$password = "daniel666";
$dbname = "imc";
// Create connection
$conn = mysqli_connect('localhost', 'root', 'daniel666', 'imc');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

echo "Os dados ainda naõ serão armazanados";
 $nome = $_POST["user"];
 $altura = floatval($_POST["altura"]);
 $peso = floatval($_POST["peso"]);
 $imc = floatval($_POST["imc"]);

// echo var_dump($nome);echo var_dump($altura);echo var_dump($peso);echo var_dump($imc);
// echo "DADOS <br>Nome: $nome <br>Peso: $peso <br>Altura: $altura<br>IMC: $imc";

$sql = "insert into imc_usuario values (0, '$nome', '$altura', '$peso', '$imc')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<br><a href="index.html">Voltar ao site</a>
</body>
</html>


