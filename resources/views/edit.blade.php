<!DOCTYPE>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar um novo produto</title>
</head>

<body>
    <form action="{{ route{'atualizar_produto', ['id' => $produto ->id]} }}" method="POST">
        @csrf
        <label for="">Nome: </label> <br />
        <input type="text" name="nome" value="{{ $produto->nome }}"> <br />
        <label for="">Descrição: </label> <br />
        <input type="text" name="descricao" value="{{ $produto->descricao }}"> <br />
        <label for="">Preço: </label> <br />
        <input type="text" name="preco" value="{{ $produto->preco }}"> <br />
        <label for="">Quantidade: </label> <br />
        <input type="text" name="quantidade" value="{{ $produto->quantidade }}"> <br />
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
