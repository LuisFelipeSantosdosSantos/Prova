<?php
#back-end
}

if (isset($_POST['nome'])) {
    echo "\n<h1>Envio de dados metodo <em>POST<em></h1>";
    echo "\n<pre>\n";
    print_r($_POST); #Array
    echo "\n</pre>\n";

    print("\n<br><strong>Nome: </strong>");
    print("$_POST[nome]");

    print("\n<br><strong>E-mail:</strong>");
    print("$_POST[email]");

    print("\n<br><strong>perfil do facebook:</strong>");
    print("$_POST[perfil]");

    print("\n<br><strong>Url Da Imagem:</strong>");
    print("$_POST[urlImagem]");
}
