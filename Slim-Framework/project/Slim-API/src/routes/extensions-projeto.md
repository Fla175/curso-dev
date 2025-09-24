# Bibliotecas/Práticas de Programação da API

## O que é o `Illuminate`?

O `Illuminate` é o motor da base de dados do Laravel, mas que pode ser utilizado sem ele.

> ## O que significa `ORM`?
>
> `ORM` é a abreviação de ***Object Relational Mapper* (Mapeador de Objeto Relacional)**, sua função é mapear objetos em tabela, automatizando consultas SQL ao SGBD.

## O que é o `Eloquent ORM`?

O `Eloquent` é o **ORM do Laravel**, sua principal função é simplificar a conexão e controle sobre o banco de dados com PDO.

## O que significa `CORS`?

`CORS` é a abreviação de ***Cross Origin Resource Sharing* (Compartilhamento de Recursos de Origem Cruzada)**, que é um mecanismo que utiliza **cabeçalhos HTTP adicionais** para garantir a **permissão de acesso** a recursos de um servidor diferente do da origem da página.

> **1º Ex (Utiliza CORS):**
>
> ------------------ **Solicitação de foto (JS)** -----------------------
>
> `meusite.com.net` ----- Troca de Cabeçalhos ----- `api.galeriafotos.br`
> Obs: Também é necessário uma requisição do tipo "Options"
>
>
>
> **2º Ex:**
>
> `meusite.com.net` (Só consegue fazer requisições/solicitações para si mesmo)
