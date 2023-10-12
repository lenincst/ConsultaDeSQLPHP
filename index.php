<!DOCTYPE html>
<html>

<head>
    <title>Conselhos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="ad-sense">

        <div class="ad-left">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4404035745556952" crossorigin="anonymous"></script>
            <!-- ad-left -->
            <ins class="adsbygoogle" style="display:block;background:rgb(222, 222, 222)" data-ad-client="ca-pub-4404035745556952" data-ad-slot="5074142016" data-ad-format="auto" data-adtest="on" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

        <div class="ad-right">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4404035745556952" crossorigin="anonymous"></script>
            <!-- ad-right -->
            <ins class="adsbygoogle" style="display:block;background:rgb(222, 222, 222)" data-ad-client="ca-pub-4404035745556952" data-ad-slot="4025069638" data-ad-format="auto" data-adtest="on" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

    </div>

    <div class="central">

        <div class="botao">

            <form method="POST">
                <button type="submit" name="obter_conselho">Obter Conselho</button>
            </form>


        </div>

        <div class="obter_conselho">
            <?php

            if (isset($_POST['obter_conselho'])) {

                include("conexao.php");

                $sql = "SELECT conselho FROM tbconselhos ORDER BY RAND() LIMIT 1;";

                $result = mysqli_query($mysqli, $sql);

                if ($result) {
                    $row = mysqli_fetch_assoc($result);

                    if ($row) {
                        $conselho = $row['conselho'];

            ?>
                        <div class="conselho">
                            <?php
                            echo $conselho;
                            ?>
                        </div>
            <?php
                    } else {
                        echo "Nenhum conselho encontrado.";
                    }
                } else {
                    echo "Erro na consulta: " . mysqli_error($mysqli);
                }

                // Fecha a conexão com o banco de dados para liberar recursos
                mysqli_close($mysqli);

                //sleep(1);
            }
            ?>
        </div>

    </div>

</body>

</html>