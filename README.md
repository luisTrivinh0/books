BookSystem - Triwo Tecnologia - Luís Trivinho

O BookSystem é um sistema de gerenciamento de livros desenvolvido com Laravel. Ele permite que os usuários criem, editem, excluam e visualizem livros.

Requisitos do sistema

Certifique-se de ter os seguintes requisitos instalados em seu ambiente de desenvolvimento:

- PHP 7.4 ou superior
- Composer
- Node.js
- Banco de dados (por exemplo, MySQL, SQLite, PostgreSQL)

Instalação

Siga estas etapas para instalar e configurar o BookSystem:

1. Clone o repositório do GitHub para o seu ambiente local:

   git clone https://github.com/luisTrivinh0/booksystem.git

2. Navegue até o diretório do projeto:

   cd book

3. Instale as dependências do Composer:

   composer install

4. Copie o arquivo de configuração .env.example e renomeie-o para .env:

   cp .env.example .env

5. Gere uma nova chave de aplicativo:

   php artisan key:generate

6. Abra o arquivo .env em um editor de texto e configure as informações do banco de dados de acordo com o seu ambiente:

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=book
   DB_USERNAME=root
   DB_PASSWORD=

7. Execute as migrações do banco de dados para criar as tabelas necessárias:

   php artisan migrate

8. Compile os ativos CSS e JavaScript do aplicativo:

   npm install
   npm run dev

9. Inicie o servidor de desenvolvimento:

   php artisan serve

10. Acesse o BookSystem em seu navegador em http://localhost:8000.

Uso

- Faça login com suas credenciais ou registre uma nova conta.
- Após o login, você será redirecionado para a página de livros.
- Na página de livros, você pode adicionar, editar e excluir livros.
- Os livros são exibidas em uma tabela com opções de classificação e pesquisa.
- Use o botão "Adicionar Livro" para criar um novo livro.
- Clique no botão "Editar" para editar um livro existente.
- Clique no botão "Excluir" para remover um livro.

Contribuição

Contribuições são bem-vindas! Se você encontrar problemas, bugs ou tiver sugestões de melhorias, fique à vontade para abrir uma issue ou enviar um pull request.

Licença

Este projeto está licenciado sob a MIT License.
