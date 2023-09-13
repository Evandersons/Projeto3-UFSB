<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/index.css" media="screen">


    <title>Formulário de afastamento para capacitação/title>
</head>

<body>

    <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
    <div><img src="http://localhost/formquali/imagens/logo.jpg" alt="Logo" width="120" height="140">
        <h1 id="titulo">FORMULÁRIO DE AFASTAMENTO PARA CAPACITAÇÃO</h1>
        <br>
    </div><br><br>
    <!--action="gerar_pdf.php"-->
    <form method="post">
    
        <?php require './conexao.php'; ?>
         
        <fieldset class="grupo">
            <!-- Campo do NOME -->
            <div class="campo">
                <label for="nome"><strong>Nome:</strong></label>
                <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
            </div><br>

            <!-- Campo do SIAPE -->
            <div class="campo">
                <label for="siape"><strong>SIAPE:</strong></label>
                <input type="numeric" name="siape" id="siape" placeholder="Digite seu SIAPE" required>
            </div><br>

            <!-- Campo do CARGO -->
            <strong>Cargo:
            <select class="campo" name="cargo">
                <option></option>
                <option>Docente</option>
                <option>TAE</option>
            </select>
        </strong><br>
        <br>

            <!-- Campo de LOTAÇÃO/CAMPUS -->
            <div class="campo" name="lotação">
                <label for="lotacaocampus"><strong>Lotação/Campus:</strong></label>
                <input type="text" name="lotacaocampus" id="lotacaocampus" placeholder="" required>
            </div><br>

            <!-- Campo de UNIDADE -->
            <div class="campo">
                <label for="unidade"><strong>Unidade de Exercício:</strong></label>
                <input type="text" name="unidade" id="unidade" placeholder="Digite a Unidade" required>
            </div><br>

            <!-- Campo de Email -->
            <div class="campo">
                <label for="email"><strong>E-mail:</strong></label>
                <input type="email" name="email" id="email" placeholder="Digite seu E-mail" required><br>
            </div><br>

            <!-- Campo de Tipo de Afastamento -->
            <strong>Tipo de Afastamento:
            <select class="campo" name="tipo_afastamento">
                <option></option>
                <option>No país</option>
                <option>Fora do país</option>
                <option>Inicial</option>
                <option>Prorrogação</option>
                <option>Com ônus</option>
                <option>Ônus limitado</option>
                <option>Sem ônus</option>
            </select>
            </strong><br>
            <br>

            <!-- Campo de Finalidade -->
             <strong>Finalidade do Afastamento:
             <select class="campo" name="finalidade">
                <option></option>
                <option>Especialização</option>
                <option>Mestrado</option>
                <option>Doutorado</option>
                <option>Pós-Doutorado</option>
                <option>Estágio</option>
                <option>Evento</option>
             </select>
             </strong><br>
             <br>

            <!-- Campo de Instituição -->
            <div class="campo">
                <label for="instituicao"><strong>Instituição:</strong></label>
                <input type="text" name="instituição" id="instituição" placeholder="" required>
            </div> <br>

            <!-- Campo de Área -->
            <div class="campo">
                <label for="area"><strong>Área do Conhecimento:</strong></label>
                <input type="text" name="area" id="area" placeholder="" required>
            </div><br>

            <!-- Campo de Programa -->
            <div class="campo">
                <label for="programa"><strong>Programa:</strong></label>
                <input type="text" name="programa" id="programa" placeholder="" required>
            </div><br>

            <!-- Campo de Cidade -->
            <div class="campo">
                <label for="cidade"><strong>Cidade:</strong></label>
                <input type="text" name="cidade" id="cidade" placeholder="" required>
            </div><br>

            <!-- Campo de Estado -->
            <div class="campo">
                <label for="estado"><strong>Estado:</strong></label>
                <input type="text" name="estado" id="estado" placeholder="" required>
            </div><br>

            <!-- Campo de País -->
            <div class="campo">
                <label for="pais"><strong>País:</strong></label>
                <input type="text" name="país" id="pais" placeholder="" required>
            </div><br>

            <!-- Campo de Quantidade de Dias -->
            <strong>Dias Afastados:
                <select class="campo" name="dias_afastados">
                    <option></option>
                    <option>Até 30 dias</option>
                    <option>Acima de 30 dias</option>
                </select>
            </strong> <br>
            <br>
            <!-- Campo da Data de Início do Afastamento -->
            <div class="campo">
                <label for="datainicial"><strong>Data de início do afastamento (incluindo transito):</strong></label>
                <input type="date" name="datainicial" id="datainicial" placeholder="" required>
            </div><br>

            <!-- Campo da Data de Término do Afastamento -->
            <div class="campo">
                <label for="datafinal"><strong>Data de término do afastamento (incluindo transito):</strong></label>
                <input type="date" name="datafinal" id="datafinal" placeholder="" required>
            </div><br>

            <!-- Campo de Justificativa -->
            <div class="campo">
                <label for="just"><strong>Justificativa quanto ao interesse da administração pública na ação, visando o desenvolvimento do servidor:</strong></label><br>
                <textarea id="text" name="just" rows="5" cols="40" placeholder="Justificativa" required></textarea>
            </div><br>
          
             <!-- Campo de Complementação -->
             <div class="campo">
                <label for="just"><strong>Informações complementares do afastamento, se houver:</strong></label><br>
                <textarea id="text" name="complemento" rows="5" cols="40" placeholder="Complemento"></textarea>
            </div><br>

            <!-- Campo de Data do Dia -->
            <div class="campo">
                <label for="dataDia"><strong>Data de hoje:</strong></label>
                <input type="numeric" name="dataDia" id="dataDia" placeholder="Digite a data de hoje" required>
            </div><br>

             <!-- Campo do Mês -->
             <div class="campo">
                <label for="mes"><strong>Mês:</strong></label>
                <input type="text" name="mes" id="mes" placeholder="Digite o mês por extenso" required>
            </div><br>

            <!-- Campo do Ano -->
            <div class="campo">
                <label for="ano"><strong>Ano:</strong></label>
                <input type="numeric" name="ano" id="ano" placeholder="Digite o ano" required>
            </div><br>

            <!-- Botão para enviar o formulário -->
            <button class="botao" type="submit" value="Enviar Formulário" onsubmit="" name="btn-gerar">Enviar Formulário</button>
    </form>
</body>

</html>