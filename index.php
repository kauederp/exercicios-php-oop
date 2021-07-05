<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste de classes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    
    <div id="div-1">
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="div1-nome">nome:</label>
            <input type="text" name="div1-nome" id="div1-nome"><br>
            <label for="div1-dataN">data de nascimento:</label>
            <input type="date" name="div1-dataN" id="div1-dataNascimento"><br>
            <label for="div1-cpf">cpf:</label>
            <input type="text" name="div1-cpf" id="div1-cpf"><br>
            <label for="div1-rg">rg:</label>
            <input type="text" name="div1-rg" id="div1-rg"><br>
            <input type="submit" name="div1-enviar" value="enviar">
        </form>
        <?php
            if(isset($_POST['div1-enviar'])){
                include("Pessoa.php");
                $Pessoa = new Pessoa();
                $Pessoa->setNome($_POST['div1-nome']);
                $Pessoa->setDataNascimento($_POST['div1-dataN']);
                $Pessoa->setCpf($_POST['div1-cpf']);
                $Pessoa->setRg($_POST['div1-rg']);
                echo "<br><table>
                <th>nome</th>
                <th>data Nascimento</th>
                <th>cpf</th>
                <th>rg</th>
                <th>crea</th>"
                ."<tr><td>".$Pessoa->getNome()."</td>"
                ."<td>".$Pessoa->getDataNascimento()."</td>"
                ."<td>".$Pessoa->getCpf()."</td>"
                ."<td>".$Pessoa->getRg()."</td></tr></table>";
            }  
        ?>
    </div>
    <br>
    <div id="div-2">
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="div2-nome">nome:</label>
            <input type="text" name="div2-nome" id="div2-nome"><br>
            <label for="div2-dataN">data de nascimento:</label>
            <input type="date" name="div2-dataN" id="div2-dataN"><br>
            <label for="div2-cpf">cpf:</label>
            <input type="text" name="div2-cpf" id="div2-cpf"><br>
            <label for="div2-rg">rg:</label>
            <input type="text" name="div2-rg" id="div2-rg"><br>
            <label for="div2-crea">CREA:</label>
            <input type="text" name="div2-crea" id="div2-crea">
            <input type="submit" name="div2-enviar" value="enviar">
        </form>
        <?php
            if(isset($_POST['div2-enviar'])){
                include("Engenheiro.php");
                $Engenheiro = new Engenheiro();
                $Engenheiro->setNome($_POST['div2-nome']);
                $Engenheiro->setDataNascimento($_POST['div2-dataN']);
                $Engenheiro->setCpf($_POST['div2-cpf']);
                $Engenheiro->setRg($_POST['div2-rg']);
                $Engenheiro->setCrea($_POST['div2-crea']);
                echo "<br><table>
                <th>nome</th>
                <th>data Nascimento</th>
                <th>cpf</th>
                <th>rg</th>
                <th>crea</th>"
                ."<tr><td>".$Engenheiro->getNome()."</td>"
                ."<td>".$Engenheiro->getDataNascimento()."</td>"
                ."<td>".$Engenheiro->getCpf()."</td>"
                ."<td>".$Engenheiro->getRg()."</td>"
                ."<td>".$Engenheiro->getCrea()."</td></tr></table>";
            }
        ?>
    </div>
    <br>
    <div id="div-3">
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="div3-nome">nome:</label>
            <input type="text" name="div3-nome" id="div3-nome"><br>
            <label for="div3-dataN">data de nascimento:</label>
            <input type="date" name="div3-dataN" id="div3-dataN"><br>
            <label for="div3-cpf">CPF:</label>
            <input type="text" name="div3-cpf" id="div3-cpf"><br>
            <label for="div3-rg">RG:</label>
            <input type="text" name="div3-rg" id="div3-rg"><br>
            <label for="div3-crm">CRM:</label>
            <input type="text" name="div3-crm" id="div3-crm">
            <input type="submit" name="div3-enviar" value="enviar">
        </form>
        <?php
            if(isset($_POST['div3-enviar'])){
                include("Medico.php");
                $Medico = new Medico();
                $Medico->setNome($_POST['div3-nome']);
                $Medico->setDataNascimento($_POST['div3-dataN']);
                $Medico->setCpf($_POST['div3-cpf']);
                $Medico->setRg($_POST['div3-rg']);
                $Medico->setCrm($_POST['div3-crm']);
                echo "<br><table>
                <th>nome</th>
                <th>data Nascimento</th>
                <th>cpf</th>
                <th>rg</th>
                <th>crea</th>"
                ."<tr><td>".$Medico->getNome()."</td>"
                ."<td>".$Medico->getDataNascimento()."</td>"
                ."<td>".$Medico->getCpf()."</td>"
                ."<td>".$Medico->getRg()."</td>"
                ."<td>".$Medico->getCrm()."</td></tr></table>";
            }
        ?>
    </div>
</body>
</html>