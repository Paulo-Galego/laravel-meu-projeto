COMO RODAR O PROJETO BAIXADO

## Requisitos
* PHP 8.2 ou Superior
* Composer
* GIT

## Como rodar o projeto baixado
Instalar as dependências
```
composer install
```


Duplicar o arquivo ".env.example" e renomear para ".env"


Gerar a chave
```
php artisan key:generate
```

## Sequencia para criar o projeto

Criar o projeto com Laravel 
```
composer create laravel/laravel laravel-meu-projeto
```

Acessar o diretório onde está o projeto
```
cd laravel meu-projeto
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000/
```

## Criar a migration (Comandos para criar banco de dados e tabelas)

```
php artisan make:migration create_[name]_table
```

```
php artisan make:migration create_courses_table
```

Executar as migration 
```
php artisan migrate
```

## Mais Comandos Migrate (Criação de colunas)

Comando para criar uma migrate, no caso inserir uma coluna nova no banco de dados:
```
php artisan make:migration alter_courses_add_price_table 
```
No arquivo migrations que foi criado, ir no método up e inserir o seguinte comando:
public function up(): void
    {
        Schema::table('courses', function(Blueprint $table){
            $table->float('price')->after('name')->default(0);
        });
    }


Após alterar o up, execurtar
```
php artisan migrate 
```


Rollback (reverter a migração mais recente)
``` 
hp artisan migrate:rollback 
``` 




## Criar controller

```
php artisan make:controller NomeDaController
```
```
php artisan make:controller  CourseController
```

## Criar a View

php artisan make:view nomePasta\nomeView
```
php artisan make:view courses/index
```

## Criar Models

php artisan make:model NomeDaModel
```
php artisan make: model Course
```

## Traduzi paginação para português

Acessar:
```
https://github.com/lucascudo/laravel-pt-BR-localization
```

## Criando Seed
```
php artisan make:seeder CourseSeeder
```

```
php artisan db:seed
```


## Enviar para o GitHub
Iniciar novo packet com GIT na máquina
```
git init
```

Definir as configurações do usuários
```
git config --local user.naem Paulo
```

```
git config --local user.email seuemaildeacessodogithub@email.com
```

Baixar os arquivos dod Git

```
git clone --branch dev-master <nome-da-branch> <nome-do-repostorio-url>
```

```
git clone --branch dev-master git@github.com:Paulo-Galego/laravel-meu-projeto.git
```

Verificar a branch
```
git branch
```
Baixar as atualizações
```
git pull
```







