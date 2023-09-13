<?php
$host = "localhost";
$user = "root";
$senha = "";
$database = "form_afastamento";

$conn = mysqli_connect($host, $user, $senha, $database) or die("Erro de conexão");

if(isset($_POST['btn-gerar'])){
    $nome = $_POST['nome'];
    $siape = $_POST['siape'];
    $cargo = $_POST['cargo'];
    $lotacao = $_POST['lotacaocampus'];
    $unidade = $_POST['unidade'];
    $email= $_POST['email'];
    $tipoafastamento = $_POST['tipo_afastamento'];
    $finalidade = $_POST['tipo_afastamento'];
    $instituicao = $_POST['instituição'];
    $area = $_POST['area'];
    $programa = $_POST['programa'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $pais = $_POST['país'];
    $dias_afast = $_POST['dias_afastados'];
    $datainicial = $_POST['datainicial'];
    $datafinal = $_POST['datafinal'];
    $just = $_POST['just'];
    $complemento = $_POST['complemento'];
    $dataDia = $_POST['dataDia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $query = mysqli_query($conn, "INSERT INTO usuarios (nome, siape, cargo, lotacaocampus, unidade, email, tipo_afastamento,
    finalidade, instituição, area, programa, cidade, estado, país, dias_afastados, datainicial, datafinal, just, complemento,
    dataDia, mes, ano) 
    VALUES ('$nome', '$siape', '$cargo', '$lotacao', '$unidade', '$email', '$tipoafastamento', '$finalidade', '$instituicao',
    '$area', '$programa', '$cidade', '$estado', '$pais', '$dias_afast', '$datainicial', '$datafinal', '$just', '$complemento',
    '$dataDia', '$mes', '$ano')");

    if($query){
        echo 'Formulário enviado com sucesso';
    }
    else{
        echo 'Não foi possível enviar o formulário';
    }
}
?>