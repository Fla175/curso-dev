# Anotações sobre JQuery

> JQuery é uma biblioteca JavaScript que facilita a manipulação do DOM, eventos, animações e requisições AJAX.

## Seletores básicos do JQuery para HTML

- `$('tag')`: Seleciona todas as tags do tipo especificado.
- `$('.classe')`: Seleciona todos os elementos com a classe especificada.
- `$('tag.classe')`: Seleciona todas as tags do tipo especificado que possuem a classe.
- `$('.classe.classe')`: Seleciona elementos que possuem todas as classes especificadas.
- `$('#id')`: Seleciona o elemento com o ID especificado.

### Seletores de posição

- `$('tag:first')`: Seleciona o primeiro elemento do tipo especificado.
- `$('.classe:first')`: Seleciona o primeiro elemento com a classe especificada.
- `$('.classe:last')`: Seleciona o último elemento com a classe especificada.
- `$('.classe:even')`: Seleciona os elementos de índice par com a classe especificada.
- `$('.classe:odd')`: Seleciona os elementos de índice ímpar com a classe especificada.

**Exemplo:**

``` javascript
$('.lista.exemplo2')
```

## Manipulação de atributos dos elementos

Com o `$()`, é possível acessar e modificar atributos dos elementos.

**Exemplo:**

``` javascript
$(input).attr('type', 'password');
```

## Manipulação de conteúdo dos elementos

O método `.html()` permite recuperar ou alterar o conteúdo HTML dos elementos selecionados.

**Exemplo:**

``` javascript
// Recupera o conteúdo
$('li').html();

// Altera o conteúdo
$('li').html('Olá! Sou um item de lista alterado!');
```

## Manipulação de valores em inputs `radio` e `checkbox`

Inputs do tipo `radio` e `checkbox` possuem o atributo `value`, que identifica cada opção. Podemos recuperar os valores selecionados facilmente.

**Exemplo:**

``` javascript
$(document).ready(() => {
    $.each($('.interesse:checked'), (index, value) => {
        console.log(index, value.value);
    });
});
```

## Inserindo e removendo elementos HTML

### Dentro do elemento selecionado

- `.prepend()`: Adiciona um elemento filho do selecionado no começo.

- `.apend()`: Adiciona um elemento filho do selecionado no final.

### Fora do elemento selecionado

- `.before()`: Adiciona um elemento que vem antes do selecionado.

- `.after()`: Adiciona um elemento que vem depois do selecionado.

### Remoção de elementos

- `.remove()`: Remove o elemento escolhido.

**Exemplo:**

``` javascript
// Adiciona um elemento filho no final
$(document).ready(() => {
    $('#lista1').append('<li>Item 4</li>');
});

// Como ficaria:
// - item 1
// - item 2
// - item 3
// - item 4

// --------------------------------

// Adiciona um elemento filho no início
$(document).ready(() => {
    $('#lista1').prepend('<li>Item 4</li>');
});

// Como ficaria:
// - item 4
// - item 1
// - item 2
// - item 3

// --------------------------------

// Adiciona um elemento acima (antes) do selecionado
$(document).ready(() => {
    $('#lista2').before('<hr>');
});

// Como ficaria:
// -------------------------------- (<hr>)
// item 1
// item 2
// item 3

// --------------------------------

// Adiciona um elemento abaixo (depois) do selecionado
$(document).ready(() => {
    $('#lista2').after('<p>Olá!! Sou um parágrafo criado por jQuery!!</p>');
});

// Como ficaria:
// item 1
// item 2
// item 3
// (Espaçamento padrão de parágrafo)
// Olá!! Sou um parágrafo criado por jQuery!!

// --------------------------------

// Adiciona um elemento acima e abaixo do selecionado
$(document).ready(() => {
    $('#lista2').before('<div> Lista 2');
    $('#lista2').after('</div>');
});

// Como ficaria:
// Lista 2
//     item 1
//     item 2
//     item 3
// (Final da "lista" de div's)

// --------------------------------

$(document).ready(() => {
    $('#lista1').remove();
});
```

> **Observação**: É posssível criar um elemento pai utilizando as funções `.before()` e `.after()` simultaneamente, com a abertura e fechamento da tag, respectivamente.

## Navegação entre elementos HTML

> Você pode navegar pela estrutura dos elementos HTML a partir de um elemento selecionado usando as funções abaixo:

- `.parent()`: Seleciona o elemento pai imediato do elemento atual.

- `.closest('selector')`: Busca o elemento pai mais próximo que corresponde ao seletor informado.

- `.find('selector')`: Busca todos os elementos filhos que correspondem ao seletor informado dentro do elemento atual.

**Exemplo:**

```javascript
// Seleciona o pai do elemento
$('.item').parent();

// Seleciona o ancestral mais próximo com a classe 'container'
$('.item').closest('.container');

// Seleciona todos os elementos filhos <span> dentro do elemento
$('.item').find('span');
```

## Manipulação do CSS

- `.css()`: Adiciona propriedades CSS.

- `.addClass()`: Adiciona classes a um elemento selecionado.

- `.hasClass()`: Verifica se uma classe existe no elemento HTML.

- `.removeClass()`: Remove classes de um elemento selecionado.

**Exemplo:**

```javascript
$(document).ready(function() {

	// Manipulando o CSS
	$('body').css({
        'font-family': 'Roboto, Arial, sans-serif',
		'background-color': '#F0F0F0',
		'color': '#333'
    });

	$('#hero').css({
		'background-color': '#155661',
		'margin': '0',
		'padding': '10px 20px',
		'text-align': 'center',
		'border-bottom-left-radius': '5px',
		'border-bottom-right-radius': '5px'
	});

	$('button').css({
		'background-color': '#00C2DF',
		'border': '1px solid #CCC',
    	'border-radius': '5px',
		'margin-top': '10px',
		'padding': '10px 20px',
		'cursor': 'pointer'
	});

	$('textarea').css({
		'width': '100%',
		'height': '100px',
		'border-radius': '5px',
		'padding': '10px',
		'box-sizing': 'border-box'
	});

	$('input[type="text"]').css({
		'width': '200px',
		'padding': '2px',
		'border-radius': '5px',
		'box-sizing': 'border-box',
		'margin-bottom': '10px'
	});

	$('input[type="email"]').css({
		'width': '200px',
		'padding': '2px',
		'border-radius': '5px',
		'box-sizing': 'border-box',
		'margin-bottom': '10px'
	});
});
```

## Eventos do Browser (Navegador)

> Existem muitos eventos, mas os principais, são os eventos da `Janela`, `Mouse`, `Teclado` e `Formulário`.

### Eventos da Janela

- `.scroll()`: É acionado quando a janela é rolada

- `.resize()`: É acionado quando a janela é reajustada de tamanho

### Eventos do Mouse

- `.mousedown()`: É acionado quando o botão é segurado.

- `.mouseup()`: É acionado quando o botão é liberado.

- `.click()`: É acionado quando o botão é clicado.

- `.dblclick()`: É acionado quando o botão é clicado 2 (duas) vezes.

- `.mousemove()`: É acionado quando o cursor se move.

> Versões novas do `.mouseover()` e `.mouseout()` (respectivamente).

- `.mouseenter()`: É acionado quando o cursor fica em cima de um elemento.

- `.mouseleave()`: É acionado quando o cursor fica sái de cima de um elemento.

> Versões antigas.

- `.mouseover()`: É acionado quando o cursor fica em cima de um elemento.

- `.mouseout()`: É acionado quando o cursor fica sái de cima de um elemento.

### Eventos do Teclado

- `.keydown()`: É acionado quando uma tecla é segurada.

- `.keyup()`: É acionado quando uma tecla é liberada.

### Eventos do Formulário

- `.focus()`: É acionado quando um elemento ganha o foco (quando é clicado com o mouse ou selecionado com o `tab`).

- `.blur()`: É acionado quando um elemento perde o foco (quando outro elemento ganha foco).

- `.change()`: É acionado quando o valor de um elemento de formulário muda e perde o foco.

- `.submit()`: É acionado quando um formulário é enviado.

### Extra 1 - `.on()` e `.off()`

> As funções `.on()` e `.off()` permitem adicionar ou remover eventos de um elemento. Em versões mais antigas do JQuery, era utilizado outras funções, a primeira foi a `.live()`, que depois foi trocada por `.bind()` e por último, trocada pelas versões atuais, `.on()` e `.off()`.

### Extra 2 - `.trigger()`, `.hover()` e `.toggleClass()`

- `.trigger()` -> Aciona evento de modo programático

- `.hover()` -> Captura os eventos `.mouseenter()` e `.mouseleave()`, utilizando 1 única função geral ou 2 para o `.mouseenter()` e o `.mouseleave()`.

- `.toggleClass()` -> Adiciona ou remove uma classe de um elemento, de acordo com a presença ou não da mesma, é a função top 1 para se utilizar no `.hover()`, sendo compacta e eficiente.

## Efeitos Especiais

> Efeitos Especiais são funções prontas que permitem animar transições de elementos HMTL.

- `.show()`: Mostra um elemento.

- `.hide()`: Esconde um elemento.

- `.toggle()`: Mostra ou esconde um elemento, dependendo do estado atual.

- `.fadeOut()`: Esconde um elemento com uma transição de fade (efeito de transparência).

- `.fadeIn()`: Mostra um elemento com uma transição de fade (efeito de transparência).

- `.fadeToggle()`: Mostra ou esconde um elemento com uma transição de fade (efeito de transparência).

- `.fadeTo()`: Leva um elemento até um certo ponto de opacidade

- `.slideUp()`: Mostra ou esconde um elemento com uma transição de slide (efeito de deslizamento).

- `.slideDown()`: Mostra ou esconde um elemento com uma transição de slide (efeito de deslizamento).

- `.slideToggle()`: Mostra ou esconde um elemento com uma transição de slide (efeito de deslizamento).

## Animações

> `.animate()` é uma função mais personalizada e precisa, permitindo animar¹ algum elemento da forma que quiser.
>
> ¹: A animação é na verdade uma transição de um elemento para o estilo desejado.


O `.animate()` espera 2 (dois) parâmetros, sendo eles:
1. As "Propriedades Visuais"
2. As "Opções de Transição"

> Observação: As 2 propriedades são configuradas dentro de `{}` (chaves), mas o parâmetro de duração das "Opções de Transição" pode ser configurado por milisegundos sem estar dentro do mesmo ({}).

### Propriedades Visuais

As propriedades visuais se resumem a CSS, como cor, tamanho, posição, etc.

> Há também a opção de associar os estilos CSS à uma variável e utilizar a mesma nas Propriedades Visuais.

### Opções de Transição

Já este possui seus próprios parâmetros para configuração da transação, cujo podem ser pesquisados na wiki do JQuery. Aqui estão os mais simples e utilizados:

- `duration`: Determina o tempo da transição em mílisegundos.

- `start`: Executa uma função ao iniciar a animação.

- `complete`: É o antônimo do `start`, executa uma função ao finalizar a animação.

## Ajax com JQuery

> O ajax (Asynchronous JavaScript and XML), como deve se lembrar, é uma metodologia de Desenvolvimento Web que visa carregar partes de um site sem recarregar tudo, também uma comunicação assíncrona entre o front-end e o back-end, deixando a experiência do usuário mais rápida e responsiva.
