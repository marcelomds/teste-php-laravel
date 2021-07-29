# Teste PHP - Laravel

## Teste realizado para a empresa: JOIN‌‌ Tecnologia

## O que é este projeto?
- Realizar um CRUD de Categorias de Produto: cadastrar categoria, alterar categoria, listar categorias e excluir categorias.
- Realizar um CRUD de Produtos: cadastrar produto, alterar produto, listar produtos e excluir produtos.
- Sistema com Autenticação de Login / Novo Registro de Usuário;
- Através de um Painel Admnistrativo, é possível Listar, Cadastrar, Editar e Remover (Categorias e Produtos);
- Foi utilizado toda validação para os formulários de cadastros;
- Na tela Home, tem um dashboard com a quantidade total de Categorias e Produtos cadastrados.
- Para Banco de Dados, foi utilizado o MySQL;

## Para rodar este projeto
```bash
$ git clone https://github.com/marcelomds/teste-php-laravel.git
$ cd teste-php-laravel
$ composer install 
$ npm install && npm run dev
$ cp .env.example .env

 ------------ Configurar Banco de Dados no Arquivo .env ------------
 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    
 -------------------------------------------------------------------

$ php artisan key:generate
$ php artisan migrate #antes de rodar este comando verifique sua configuracao com banco em .env
$ php artisan db:seed #para gerar os seeders, dados de teste
$ php artisan serve
```
## Para Acessar Login Inicial

- Login:  admin@email.com
- Senha: 123456789
