# Biblioteca Virtual

Este é um projeto de uma biblioteca virtual que permite o CRUD (Create, Read, Update, Delete) de livros cadastrados. O projeto é desenvolvido em Laravel e utiliza MySQL como banco de dados. 
Toda a aplicação é containerizada usando Docker para facilitar a configuração e o gerenciamento do ambiente.

## Requisitos

- Docker e Docker Compose
- PHP 8.1+
- Composer
- MySQL


### Estrutura do Projeto
O projeto segue o padrão Service de projeto, com os seguintes diretórios principais:

- `app/Models`: Contém os modelos Eloquent.
- `app/Http/Controllers`: Contém os controladores responsáveis pelo CRUD de livros.
- `app/Services`: Contém os serviços usados para separar a lógica de negócios dos controladores.
- `database/migrations`: Contém as migrações do banco de dados.
- `resources/views`: Contém as views Blade.
