# Configuração do Docker Compose para Ambiente de Desenvolvimento Web

[![GitHub stars](https://img.shields.io/github/stars/mathnatividade/websitewithdocker.svg?style=social)](https://github.com/mathnatividade/websitewithdocker)

Este repositório contém uma configuração do Docker Compose que cria um ambiente de desenvolvimento web completo. Inclui um servidor PHP com Apache, um banco de dados MySQL e uma interface PHPMyAdmin para facilitar a administração do banco de dados. Essa configuração permite iniciar rapidamente projetos de desenvolvimento web sem se preocupar com instalações e configurações individuais.

## Pré-requisitos

Antes de começar, certifique-se de ter os seguintes requisitos instalados em seu sistema:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Primeiros Passos

1. Clone este repositório para sua máquina local.
git clone https://github.com/mathnatividade/websitewithdocker.git
cd websitewithdocker

2. Personalize a Configuração (Opcional)
Você pode modificar o arquivo docker-compose.yml para atender às suas necessidades específicas. Por exemplo, você pode alterar a senha root do MySQL, o nome do banco de dados e outras configurações.

3. Inicie o Ambiente de Desenvolvimento
Para iniciar o ambiente de desenvolvimento web, execute o seguinte comando no diretório raiz do repositório clonado:
docker-compose up -d

4. Acessando os Serviços
Assim que o ambiente estiver em execução, você poderá acessar os seguintes serviços:

    Servidor Web: Acesse sua aplicação web PHP visitando http://localhost:80 em seu navegador.
    PHPMyAdmin: Gerencie seu banco de dados MySQL por meio do PHPMyAdmin visitando http://localhost:8080 em seu navegador.

5. Parando o Ambiente
Para parar e remover os contêineres sem excluir os volumes de dados, utilize o seguinte comando:
docker-compose down

## Serviços
### Servidor Web (web)
O servidor web é executado na imagem webdevops/php-apache:alpine-php7. Ele expõe a porta 80 e serve os arquivos da aplicação PHP a partir do diretório ./site/archives no host.

### Banco de Dados MySQL (db)
O banco de dados MySQL é executado na imagem mysql:5.7. Ele utiliza variáveis de ambiente para definir a senha root do MySQL e o nome do banco de dados padrão. Os dados são armazenados no diretório ./site/db no host, e o diretório ./db-start é usado para inicializar o banco de dados.

### PHPMyAdmin (phpmyadmin)
O PHPMyAdmin permite gerenciar facilmente o banco de dados MySQL. Ele é executado na imagem phpmyadmin/phpmyadmin e é acessível pela porta 8080. Uma configuração personalizada do PHP pode ser encontrada no arquivo ./site/admin/uploads.ini.

## Rede
Todos os serviços estão conectados a uma rede personalizada do tipo bridge chamada rede1, que facilita a comunicação entre os contêineres.

## Contribuição
Contribuições são bem-vindas! Se você encontrar algum problema ou quiser sugerir melhorias, sinta-se à vontade para abrir uma issue ou criar um pull request.