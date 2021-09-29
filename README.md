## Projeto de Estudos
## Projeto sistema administrativo da plataforma E-Diaristas

Desenvolvido no curso Multi-Stack da Treinaweb

### Instalando o Projeto

#### Clonar o repositório.
```
git clone https://github.com/marcelobianco/administrativo-multistack.git
```

#### Instalar as dependencias
```
composer install
```

Ou em ambiente de desenvolvimento
```
composer update
```

#### Criar o arquivo de configuração de ambiente .env

Copiar o arquivo de exemplo `.env.example` ou renomear para .env
Configurar os detalhes da aplicação e conexão com o banco de dados.


#### Criar a estrutura no banco de dados
```
php artisan migrate
```
#### Iniciar o servidor de desenvolvimento do laravel caso queira
```
php artisan serve
```