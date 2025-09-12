O que é PDO?
    PDO (PHP Data Objects) é uma extensão do PHP que fornece uma interface consistente para acessar bancos de dados. Ele permite que você se conecte a diferentes sistemas de gerenciamento de banco de dados (SGBDs) usando a mesma API, facilitando a portabilidade do código entre diferentes bancos de dados. É utilizado um arquivo .ini para configurar as conexões com os bancos de dados.

Qual a vantagem de usar PDO?
    PDO oferece várias vantagens, incluindo:
        1. **Portabilidade**: Você pode mudar de banco de dados sem precisar reescrever o código, desde que o novo banco seja suportado pelo PDO.
        2. **Segurança**: PDO suporta prepared statements, que ajudam a prevenir ataques de injeção SQL.
        3. **Flexibilidade**: Permite o uso de diferentes drivers para diferentes bancos de dados, como MySQL, PostgreSQL, SQLite, entre outros.
        4. **Suporte a transações**: PDO permite o uso de transações, o que é útil para garantir a integridade dos dados.

Qual o tipo de arquivo para cada banco de dados?
    Os tipos de arquivo para cada banco de dados variam conforme o SGBD utilizado. Aqui estão alguns exemplos comuns:
        - **Oracle**: `pdo_oci`;
        - **MySQL**: `pdo_mysql`;
        - **PostgreSQL**: `pdo_pgsql`;
        - **SQLServer**: `pdo_odbc / lib`;

O que é uma Exeption?
    Uma Exception (exceção) é um mecanismo de tratamento de erros no PDO. Quando ocorre um erro durante a execução de uma operação de banco de dados, uma exceção é lançada. Você pode capturar essa exceção usando um bloco "try-catch", permitindo que você trate o erro de forma controlada, em vez de deixar o script falhar abruptamente. A exception é tratada como um objeto, chamado de PDOException.