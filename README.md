# Sistema de Gerenciamento de Clientes - Laravel 10

## Descrição do Projeto
Esse sistema tem como objetivo gerenciar cadastros de clientes vinculados a usuários. Cada usuário possui acesso exclusivo aos cadastros que ele realizou. O sistema também implementa um controle de autenticação com níveis de acesso e segurança, utilizando os recursos nativos do Laravel.

***

## Tecnologias utilizadas
- **Backend:** Laravel 10 PHP 8.2
- **Frontend:** Blade + Tailwind CSS
- **Banco de Dados:** MySQL
- **Ferramentas de build:** Vite + NPM
- **Gerenciador de dependências:** Composer (PHP) e NPM (Node)

***

## Funcionalidades implementadas
- **Sistema de login com níveis de acesso**
    - Usuário comum -> acesso apenas aos próprios clientes cadastrados
    - Administrador -> acesso a todos os clientes cadastrados

- **Gerenciamento de clientes**
    - Cadastrar
    - Listar
    - Editar
    - Deletar

- **Controle de acesso**
    - Middleware para proteger rotas
    - Gate e Can para permissões específicas

- **CRUD com Laravel Resources**
    - Operações simplificadas, sem comandos SQL manuais

- **Relacionamento entre Usuários e Clientes**
    - Cada cliente está vinculado a um usuário no banco de dados

***

## Requisitos do sistema 
- PHP >= 8.1
- Composer
- MySQL
- Node.js
- NPM

***

## Instalação e configuração
**1- Clone o projeto**
    `git clone https://github.com/rafaelaboldt/sistema-de-gerenciamento-de-clientes-laravel.git`
    
**2- Acesse a pasta do projeto**    
    `cd sistema-de-gerenciamento-de-clientes-laravel`

**3- Instale as dependências**
    - Backend
    `composer install`
    - Frontend
    `npm install`

**4- Configure o ambiente**
    `cp .env.example .env`
    `php artisan key:generate`

**5- Configure o banco de dados no arquivo .env**  
    `DB_CONNECTION=mysql`   
    `DB_HOST=127.0.0.1`  
    `DB_PORT=3306`   
    `DB_DATABASE=nome_do_banco`   
    `DB_USERNAME=usuario`  
    `DB_PASSWORD=senha` 

**6- Rode as migrações**
    `php artisan migrate`

**7- Inicie os servidores**
    - Backend
    `php artisan serve`
    - Frontend
    `npm run dev`

**5- Acesse no navegador**
    [localhost:8000](http://localhost:8000/)
