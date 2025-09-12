# Script PHP

## Bem-Vindo à Aba de Scripts/front-end

> Aqui estão anotados todos os scripts de PHP - Front-end.

---

### Aqui você aprendeu sobre

- ***`Echo e Print`***  
  - **`Echo`**: `Construção do PHP` que não retorna valor, apenas exibe uma `string` ou `variável`.  
  - **`Print`**: `Função` que retorna `1` ou `0` dependendo do contexto, adicionando um pequeno `overhead`.

---

- ***`Variáveis`***:
  - **`Tipos`**:
    - **`Const`**: Uma constante, ou seja, seu valor não pode ser alterado.  
    - **`Int`**: Armazena números inteiros. **(Espaço: Médio)**
    - **`Float`**: Armazena números fracionados. **(Espaço: Pesado)**
    - **`Boolean`**: `true` ou `false`. **(Espaço: Leve)**  
    - **`String`**: Armazena textos. **(Espaço variável)**  
    - **`Array`**: Armazena múltiplos valores.  
      - Pode ser **Multidimensional** (`arrays` dentro de `arrays`).  
      - **Estrutura de `Arrays` em `PHP`**:  
        - **Exibição de valores em `Arrays`**:
          - `var_dump()`: Exibe os valores com detalhes, mas é mais lento.  
          - `print_r()`: Exibe os valores de forma mais simples.  
          - `echo`: Exibe um valor específico.
        - **Métodos de Pesquisa**:
          - `in_array()`: Verifica se o valor do array existe ou não e manda a resposta em `booleano` (`0` ou `1`).
          - `array_search()`: Verifica se o elemento existe ou não no array, se existir, o valor impresso vai ser o próprio índice.

        - **Manipulação de Arrays**:
          - `is_array()`: Verifica se o parâmetro é um `array`.
          - `array_keys()`: Retorna todas as chaves de um `array`.
          - `sort()`: Ordena um `array` e reajusta seus índices.
          - `asort()`: Ordena um `array` preservando seus índices.
          - `count()`: Conta a quantidade de elementos de um `array`.
          - `array_merge()`: Funde `1` ou mais `arrays`.
          - `explode()`: Divide uma `string` baseada em um delimitador
          - `implode()`: Junta elementos de um `array` em uma `string`.

---

- ***`Comentários em PHP`***:  
  - `#`: Comentário estilo Bash.
  - `//`: Comentário de uma linha.
  - `/* */`: Comentário de múltiplas linhas.

---

- ***`Estruturas Condicionais`***:  
  - **`If & Else`**: Para tomadas de decisão.  
  - **`Else If`**: Para múltiplas condições.  
  - **`Switch`**: Alternativa ao `if` para múltiplas opções.

---

- ***`Funções`***
  - **`Void`**: Não tem um `return`.
  - **`Return`**: Tem um `return`.
  - **`Nativas`**:
    - **Manipulação de `Strings`**:
      - **`strlen()`**: Retorna o tamanho da `string`.
      - **`str_word_count()`**: Conta as palavras em uma `string`.
      - **`strtolower()`**: Converte a `string` para minúsculas.
      - **`strtoupper()`**: Converte a `string` para maiúsculas.
      - **`ucfirst()`**: Converte a primeira letra da `string` para maiúscula.
      - **`ucwords()`**: Converte a primeira letra de cada palavra para maiúscula.
      - **`trim()`**: Remove espaços em branco do início e do final da `string`.
      - **`ltrim()`**: Remove espaços em branco do início da `string`.
      - **`rtrim()`**: Remove espaços em branco do final da `string`.

    - **Matemáticas**:
      - **`ceil()`**: Arredonda um número fracionado para cima.
      - **`floor()`**: Arredonda um número fracionado para baixo.
      - **`round()`**: Arredonda um número fracionado com base na fração.
      - **`rand()`**: Gera um número inteiro aleatório.
      - **`sqrt()`**: Retorna a raiz quadrada.

    - **Manipulação de `Datas`**:
      - **`date()`**: Recupera a data `atual / corrente`.
        - **`Tags` de Formatos**:
          - Data:
            - `d`: Dia do mês (2 dígitos).
            - `j`: Dia do mês (sem zero à esquerda).
            - `D`: Nome do dia (3 letras).
            - `l`: Nome completo do dia.
            - `m`: Mês (2 dígitos).
            - `n`: Mês (sem zero à esquerda).
            - `M`: Nome do mês (3 letras).
            - `F`: Nome completo do mês.
            - `Y`: Ano completo (4 dígitos).
            - `y`: Ano abreviado (2 dígitos).
          - Hora e Minutos:
            - `H`: Hora no formato 24h (2 dígitos).
            - `h`: Hora no formato 12h (2 dígitos).
            - `g`: Hora no formato 12h (sem zero à esquerda).
            - `i`: Minutos (2 dígitos).
            - `s`: Segundos (2 dígitos).
            - `a`: AM ou PM minúsculo.
            - `A`: AM ou PM maiúsculo.
          - Outros Formatos Úteis:
            - `w`: Dia da semana (0 = Domingo, 6 = Sábado)
            - `z`: Dia do Ano (de 0 a 365)
            - `W`: Semana do ano
            - `t`: Quantidade de dias no mês atual
            - `L`: Ano bissexto (1 = Sim, 0 = Não)
            - `0`: Diferença do UTC em horas
            - `c`: Data `ISO 8601`
            - `r`: Formato `RFC 2822`
            - `U`: `Timestamp Unix` (segundos desde 01/01/1970)

      - **`date_default_timezone_get()`**: Recuperar o `timezone default` da aplicação.
      - **`date_default_timezone_set()`**: Atualizar o `timezone default` da aplicação.
      - **`strtotime()`**: Transforma datas textuais em `segundos`.

    - **Métodos de Pesquisa**:
        - `in_array()`: Verifica se o valor do array existe ou não e manda a resposta em `booleano` (`0` ou `1`).
        - `array_search()`: Verifica se o elemento existe ou não no array, se existir, o valor impresso vai ser o próprio índice.

    - **Manipulação de Arrays**:
      - `is_array()`: Verifica se o parâmetro é um `array`.
      - `array_keys()`: Retorna todas as chaves de um `array`.
      - `sort()`: Ordena um `array` e reajusta seus índices.
      - `asort()`: Ordena um `array` preservando seus índices.
      - `count()`: Conta a quantidade de elementos de um `array`.
      - `array_merge()`: Funde `1` ou mais `arrays`.
      - `explode()`: Divide uma `string` baseada em um delimitador.
      - `implode()`: Junta elementos de um `array` em uma `string`.

    - **Substituição e Modificação**:
      - **`str_replace()`**: Substitui todas as ocorrências de uma substring dentro de uma `string`.
      - **`str_ireplace()`**: Mesma coisa que `str_replace()`, mas sem diferenciar maiúsculas de minúsculas.
      - **`substr_replace()`**: Substitui uma parte da `string` por outra.
      - **`substr()`**: Retorna uma parte da `string`.
      - **`str_pad()`**: Preenche uma `string` com um determinado valor até um comprimento específico.
      - **`str_repeat()`**: Repete uma `string` um determinado número de vezes.

    - **Busca e Posição**:
      - **`strpos()`**: Retorna a posição da primeira ocorrência de uma substring (case-sensitive).
      - **`stripos()`**: Mesma coisa que `strpos()`, mas sem diferenciar maiúsculas e minúsculas.
      - **`strrpos()`**: Retorna a posição da última ocorrência de uma substring.
      - **`strripos()`**: Mesma coisa que `strrpos()`, mas sem diferenciar maiúsculas e minúsculas.
      - **`strstr()`**: Retorna a parte da `string` após a primeira ocorrência de um caractere.
      - **`stristr()`**: Mesma coisa que `strstr()`, mas sem diferenciar maiúsculas e minúsculas.
      - **`strpbrk()`**: Retorna a parte da `string` a partir do primeiro caractere encontrado em um conjunto de caracteres.

    - **Comparação e Validação**:
      - **`strcmp()`**: Compara duas `strings` (case-sensitive).
      - **`strcasecmp()`**: Compara duas `strings` sem diferenciar maiúsculas e minúsculas.
      - **`strncmp()`**: Compara os primeiros N caracteres de duas `strings` (case-sensitive).
      - **`strncasecmp()`**: Compara os primeiros N caracteres sem diferenciar maiúsculas e minúsculas.
      - **`strcoll()`**: Compara `strings` com base na configuração regional.

    - **Segurança e Codificação**:
      - **`htmlspecialchars()`**: Converte caracteres especiais em entidades HTML.
      - **`htmlentities()`**: Converte todos os caracteres aplicáveis em entidades HTML.
      - **`strip_tags()`**: Remove as tags HTML e PHP de uma `string`.
      - **`addslashes()`**: Adiciona barras invertidas antes de aspas e caracteres especiais.
      - **`stripslashes()`**: Remove barras invertidas adicionadas por `addslashes()`.
      - **`nl2br()`**: Converte quebras de linha em `<br>`.
    
    - **Explosão e Junção de `Strings`**:
      - **`explode()`**: Divide uma `string` em um array com base em um delimitador.
      - **`implode()`**: Junta elementos de um array em uma `string` (sinônimo de `join()`).
      - **`join()`**: Igual a `implode()`.

    - **Criptografia e Hash**:
      - **`md5()`**: Retorna o hash MD5 de uma `string`.
      - **`sha1()`**: Retorna o hash SHA-1 de uma `string`.
      - **`password_hash()`**: Cria um hash seguro para senhas.
      - **`password_verify()`**: Verifica se uma senha corresponde ao hash.

---

- ***`Loops`***  
  - `while` - Executa enquanto a condição for verdadeira.  
  - `for` - Executa um número definido de vezes.  
  - `foreach` - Executa sobre `arrays` de forma simples.  
  - `do while` - Executa ao menos uma vez antes de verificar a condição.
