{ pkgs ? import <nixpkgs> {} }:

pkgs.mkShell {
  # 1. Adicione o pacote do MariaDB aos inputs de build do seu ambiente
  buildInputs = with pkgs; [
    mariadb
    # ... aqui podem entrar outros pacotes que seu projeto já utiliza
  ];

  # 2. O shellHook define comandos e variáveis de ambiente que estarão
  #    disponíveis assim que você entrar no shell do Nix.
  shellHook = ''
    # Define um diretório local para os dados do MariaDB para não poluir o sistema
    export MARIADB_DATA_DIR="$PWD/.mariadb-data"

    # Mensagem de boas-vindas
    echo ""
    echo "Bem-vindo ao ambiente de desenvolvimento com MariaDB!"

    # Função para inicializar o banco de dados se ele ainda não existir
    iniciar_db() {
      if [ ! -d "$MARIADB_DATA_DIR" ]; then
        echo "-> O diretório de dados do MariaDB não foi encontrado. Inicializando..."
        mysql_install_db --user=$(whoami) --basedir=${pkgs.mariadb} --datadir="$MARIADB_DATA_DIR"
        echo "-> Diretório de dados inicializado em '$MARIADB_DATA_DIR'."
      fi
    }

    # Alias para iniciar o serviço do MariaDB
    alias db-start="iniciar_db && mysqld_safe --datadir='$MARIADB_DATA_DIR' > /dev/null 2>&1 & echo '-> Servidor MariaDB iniciado em segundo plano.'"

    # Alias para parar o serviço do MariaDB
    alias db-stop="mysqladmin -u root shutdown && echo '-> Servidor MariaDB parado com sucesso.'"

    # Alias para reiniciar o serviço do MariaDB
    alias db-restart="db-stop && sleep 2 && db-start"

    echo "-> Comandos do MariaDB disponíveis: 'db-start', 'db-stop', 'db-restart'"
    echo ""
  '';
}
