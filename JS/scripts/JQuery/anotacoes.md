# Anotações sobre JQuery

> JQuery é uma biblioteca JavaScript que simplifica a manipulação do DOM, eventos, animações e AJAX

## Seletores básicos do JQuery para HTML

<!-- Bem básicos -->

- `$('tag')`: Seleciona todas as tags do tipo especificado.

- `$('.classe')`: Seleciona todas as tags com a classe especificada.

- `$('tag.classe')`: Seleciona a tag com a classe especificada.

- `$('.classe.classe')`: Seleciona a classe com a classe especificada.

- `$('#id')`: Seleciona a tag com o ID especificado.

<!-- Orientadores de array -->

- `$('tag:first')`: Seleciona a primeira tag existente.

- `$('.classe:first')`: Seleciona o primeiro elemento com a classe especificada.

- `$('.classe:last')`: Seleciona o último elemento com a classe especificada.

- `$('.classe:even')`: Seleciona os elementos pares com a classe especificada.

- `$('.classe:odd')`: Seleciona os elementos ímpares com a classe especificada.

ex.

``` javascript
$('.lista.exemplo2')
```

## Funções do `$()`

Para adicionar uma imagem em um arquivo markdown, utilize a sintaxe:

![Funções do $() no jQuery](img/explicacao-sifrao.png)