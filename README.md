# 🚀 Projeto Laravel com Docker

Este projeto foi desenvolvido utilizando **Laravel 11** e conta com autenticação via **JWT**. A estrutura do código segue o padrão **Service-Repository**, garantindo organização e escalabilidade. O ambiente está totalmente dockerizado para facilitar o setup e a execução.

---

## 🛠 Configuração do Ambiente


### 📌 Subindo o Docker
Execute o comando abaixo para iniciar os containers:
```sh
docker compose up -d --build
```

### 🐳 Acessando o Container PHP
Para acessar o container onde o Laravel está rodando, utilize:
```sh
docker exec -it laravel_app bash
```

### 📌 Instalando Dependências
Antes de subir o ambiente, instale as dependências do Laravel:
```sh
composer install
```

### 📦 Rodando as Migrations
Após acessar o container, execute:
```sh
php artisan migrate
```

### 📌 Listando as Rotas
Para visualizar todas as rotas registradas no sistema, utilize:
```sh
php artisan route:list
```

Caso queira acessar a documentação das APIs, basta ir até:
🔗 [http://localhost:8000/api/documentation](http://localhost:8000/api/documentation)

---

## 🏗 Tecnologias Utilizadas
- **Laravel 11** 🚀
- **Docker** 🐳
- **MySQL** 🗄
- **JWT para autenticação** 🔐
- **Arquitetura baseada em Services, Models e Controllers** 📂

---

## 📢 Observações
Este projeto utiliza **MySQL** como banco de dados e a tabela padrão do Laravel para gerenciar usuários e operações CRUD. A autenticação é feita via **JWT**, garantindo segurança e flexibilidade no controle de acessos.

