# O que é MySQL?

> MySQL é um Sistema de Gerenciamento de Banco de Dados (SGBD) relacional amplamente utilizado e Open-Source. Ele permite armazenar, organizar e acessar dados de forma eficiente, utilizando a linguagem SQL (Structured Query Language).

- **SGBD** - Sistema de Gerenciamento de Banco de Dados
- **Tipo:** Relacional - Usa tabelas
- **Código:** Open-Source
- **Linguagem:** SQL (Structured Query Language - Linguagem de Consulta Estruturada)

## O que é um **Banco de Dados Relacional**?

Um `Banco de Dados Relacional` utiliza tabelas para armazenar e achar seus dados.

Pedidos ao sistema são feitos através de `queries` (consultas) escritas em SQL.

| Sistema        | Dado Requerido                                |
|----------------|-----------------------------------------------|
| WHMCS          | ID do Registro de Compra do Cliente           |
| Shop Control 9 | ID do Registro de Compra de um Fone de Ouvido |

---

Já no Banco de Dados (MySQL), os dados são procurados atrvés de IDs (Identificadores) que são feitos unicamente para cada registro.

| Tabela do Banco de Dados | Dados                                   |
|--------------------------|-----------------------------------------|
|            01            | Registro da compra do cliente           |
|            02            | Registro da compra de um Fone de Ouvido |

---
