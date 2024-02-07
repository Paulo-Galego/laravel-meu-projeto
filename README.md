COMO RODAR O PROJETO BAIXADO

##Requisitos
* PHP 8.1 ou Superior
* Composer
* GIT

## Como rodar o projeto baixado
Instalar as dependências
```
composer install
```

```
Duplicar o arquivo ".env.example" e renomear para ".env"
```

Gerar a chave
```
php artisan key:generate
```

##Sequencia para criar o projeto

Criar o projeto com Laravel
```
composer create laravel/laravel laravel-meu-projeto
```

Acessar o diretório onde está o projeto
```
cd laravel meu-projeto
```

Iniciaar o projeto criado com Laravel
```
php artisan serve
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000/
```

##Enviar para o GitHub
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
git clone --branch <nome-da-branch> <nome-do-repostorio-url>
```

```
git clone --branch git@github.com:Paulo-Galego/laravel-meu-projeto.git
```

Verificar a branch
```
git branch
```
Baixar as atualizações
```
git pull
```







