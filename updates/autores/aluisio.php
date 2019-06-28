<!DOCTYPE html>
<html>
    <head>
        <title>Aluisio Azevedo</title>
        <meta charset="utf-8">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">

            div.gallery {
                margin-left: 20px;
                border: 1px solid #ccc;
                float: left;
                width: 180px;
            }

            div.gallery:hover {
                border: 3px solid #777;
            }

            div.gallery img {
                width: 100%;
                height: auto;

            }
            div.desc {
                padding: 10px;
                text-align: center;
                color: black;
            }

            h1{
                margin-left: 50px;
                text-align: center;
            }

            .foto{
                margin-left: 10%;
                padding-left: 30px;
            }

            p{
                padding-left: 5%;
                text-align: justify;
                padding-right: 5%;
                text-indent:4em
            }

            fieldset{
                padding-left:5%;
            }
            .texto {
                padding-left: 10%;
            }
            .tit2{
                text-align: justify;
            }
        </style>
    </head>
    <body>
        <?php require_once 'menu2.php'; ?>

        <h1>Aluísio Azevedo</h1>

        <table>
            <th>
            <td>
                <img src="img/aluisio.jpg" width="400" height="500" class="foto">
            </td >
            <td class="texto" width="900">
                <p>Considerado o pioneiro do naturalismo no Brasil, o romancista Aluísio de Azevedo nasceu em São Luís, Maranhão em 14 de abril de 1857. </p>
                <p>Quando jovem ele fazia caricaturas e poesias, como colaborador, para jornais e revistas no Rio de Janeiro. Seu primeiro romance publicado foi: Uma lágrima de mulher, em 1880.</p>
                <p>Fundador da cadeira número quatro da Academia Brasileira de Letras e crítico social, este escritor naturalista foi autor de diversos livros, entre eles estão: O Mulato, que provocou escândalo na época de seu lançamento, Casa de Pensão, que o consagrou e O Cortiço, conhecido com sua obra mais importante. </p>
                <p>Este autor, que não escondia seu inconformismo com a sociedade brasileira e com suas regras, escreveu ainda outros títulos: Condessa Vésper, Girândola de Amores, Filomena Borges, O Coruja, O Homem, O Esqueleto, A Mortalha de Alzira, O livro de uma Sogra e contos como: Demônios.</p>
                <p>Durante grande parte de sua vida, Aluísio de Azevedo viveu daquilo que ganhava como escritor, mas ao entrar para a vida diplomática ele abandonou a produção literária.</p>
                <p>Faleceu em Buenos Aires, Argentina, no dia 21 de janeiro de 1913.</p>
            </td>
            <td>
            
             <h1 class="tit2">Obras no nosso acervo</h1>
    <fieldset>
        <div class="gallery" >
            <a target="_blank" href="../livros/OCortico.pdf">
                <img src="../img/O-Cortiço.jpg" alt="O Cortiço" width="800" height="500" >
                <div class="desc"><strong> O Cortiço</strong></div>
            </a>
        </div>

    </fieldset></td>
               
        </th>
    </table>
    <br>
    <h1 class="tit2">Obras no nosso acervo</h1>
    <fieldset>
        <div class="gallery" >
            <a target="_blank" href="../livros/OCortico.pdf">
                <img src="../img/O-Cortiço.jpg" alt="O Cortiço" width="800" height="500" >
                <div class="desc"><strong> O Cortiço</strong></div>
            </a>
        </div>

    </fieldset>
</body>
</html>