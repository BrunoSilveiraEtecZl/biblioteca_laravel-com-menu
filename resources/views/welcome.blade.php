<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <title>CRUD - MENU</title>

    <style type="text/css">
        body {
            display: flex;
            flex-direction: column;
            list-style: none;
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;

        }

        #primeiro {
            list-style: none;
            display: flex;
            align-items: center;
            padding: 0;
            background-color: rgb(192, 192, 192);

        }


        #primeiro li {
            display: inline;
        }

        #primeiro li a {
            text-decoration: none;
            color: white;
            padding: 20px;
            display: inline-block;
        }

        #primeiro li a:hover {
            background-color: rgb(32, 73, 253);
            transition: all .6s;
        }

        .titulo {
            text-align: center;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <H1 class="titulo">CRUD LARAVEL</h1>
    <nav id="primeiro">
        <ul>
            <li> <a href="/cadastrar">Cadastrar </a>&nbsp;&nbsp;</li>
            <li> <a href="/listar-produto/1">Listar 1 </a>&nbsp;&nbsp; </li>
            <li> <a href="editar-produto/1">Editar 1 </a>&nbsp;&nbsp; </li>
            <li> <a href="/excluir-produto/1">Excluir 1 </a> &nbsp;&nbsp; </li>

        </ul>
    </nav>

</body>

</html>