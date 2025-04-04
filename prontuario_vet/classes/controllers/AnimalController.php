<?php
    class AnimalController
    {
        function Listar() 
        {
            $servidor = 'mysql:host=localhost;dbname=prontuario_vet';
            $usuario = 'root';
            $senha = '981024737';
            $lista = [];

            try 
            {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $cSQL = $pdo->prepare('Select cd_animal, nm_animal, cd_especie from animal');
                $cSQL->execute();

                while ($dados = $cSQL->fetch(PDO::FETCH_ASSOC))
                {
                    $codigo = $dados['cd_animal'];
                    $nome = $dados['nm_animal'];
                    $codigoEspecie = $dados['cd_especie'];

                    $cSQL_Especie = $pdo->prepare('Select nm_especie from especie where cd_especie = :codigo');
                    $cSQL_Especie->bindValue(':codigo', $codigoEspecie);
                    $cSQL_Especie->execute();

                    $dadosEspecie = $cSQL_Especie->fetch(PDO::FETCH_ASSOC);
                    $nomeEspecie = $dadosEspecie['nm_especie'];

                    $especie = new Especie($codigoEspecie, $nomeEspecie);

                    $animal = new Animal($codigo, $nome, $especie);
                    array_push ($lista, $animal);
                }
                $pdo = null;
            } 
            catch (PDOException $e) 
            {
                echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
            } 
            return $lista;
        }

        function BuscarPeloNome($nome)
        {
            $servidor = 'mysql:host=localhost;dbname=prontuario_vet';
            $usuario = 'root';
            $senha = '981024737';
            $lista = [];

            try 
            {
                $pdo = new PDO($servidor, $usuario, $senha);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $cSQL = $pdo->prepare('Select cd_animal, nm_animal, cd_especie from animal where nm_animal = :nome');
                $cSQL->bindParam('nome', $nome);
                $cSQL->execute();

                while ($dados = $cSQL->fetch(PDO::FETCH_ASSOC))
                {
                    $codigo = $dados['cd_animal'];
                    $nome = $dados['nm_animal'];
                    $codigoEspecie = $dados['cd_especie'];

                    $cSQL_Especie = $pdo->prepare('Select nm_especie from especie where cd_especie = :codigo');
                    $cSQL_Especie->bindValue(':codigo', $codigoEspecie);
                    $cSQL_Especie->execute();

                    $dadosEspecie = $cSQL_Especie->fetch(PDO::FETCH_ASSOC);
                    $nomeEspecie = $dadosEspecie['nm_especie'];

                    $especie = new Especie($codigoEspecie, $nomeEspecie);

                    $animal = new Animal($codigo, $nome, $especie);
                    array_push ($lista, $animal);
                }
                $pdo = null;
            } 
            catch (PDOException $e) 
            {
                echo 'Erro: ' . $e->getMessage();
            } 
            return $lista;
        }
    }
?>
