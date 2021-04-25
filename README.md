<p align="center"><a href="http://www.brtk.com.br" target="_blank"><img src="http://www.brtk.com.br/img/brTKLogo.png" width="400"></a></p>

## Como iniciar o projeto RODAPE FEITO EM REACT

- Clonar o projeto CRUD do github
https://github.com/luispaulo/react_laravel_crud.git

## Foi criado o container através do laradock, 
- Clonar o projeto laradock na mesma pasta do projeto CRUD
git clone https://github.com/Laradock/laradock.git

#### Estrutura do projeto

```
laradock
react_laravel_crud
```


 - configurar o arquivo .env da raiz do projeto 'react_laravel_crud' com os dados do banco mysql

- intrução de conexao mysql para alterar no arquivo:

```DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=root
```

## configuarar banco de dados mysql

- acesso o mysql myphpadmin na porta :
    http://localhost:8081/
    acesse com os dados preenchidos na configuração do banco
  

## iniciar o ambiente com docker 
- pode abrir o projeto no terminal
   acessar a pasta laradock
   executar o comando de dentro da pasta laradock:
- ** docker-composer up -d nginx mysql phpmyadmin **

## Configurando o NGINX laradock
- [ ] dentro do diretorio laradock, acesse a pasta nginx/sites/ 
- [ ] crie um arquivo com a extencao '.conf' (ex: larareact.conf) dentro da pasta sites
- [ ] edite o arquivo com os dados
- [ ] server_name larareact.local.test;(obs escolha o nome do projeto da sua preferencia)
- [ ] root /var/www/laravelpaulo/public;
- [ ] salve o arquivo

   edite o arquivo HOSTS, no diretorio /etc/:(Mac Os) , verifique no WINDOS esse caminho da pasta ETC
- [ ] Acrescente o caminhio 127.0.0.1 larareact.local.test
- [ ] salve o arquivo
- [ ] OBS: verificar permissao utilize o 'sudo nano /etc/hosts'


```
   executar o comando :  php artisan migrate 
```

   caso ocorra erro comandos que pode utilizar pra limpar cache no artisan :
- ** php artisan config:clear **
- ** php artisan route:cache **
- ** php artisan cache:clear **

```
   executar NOVAMENTE comando :  php artisan migrate 
```

## Como abrir o projeto CRUD

- ACESSE O caminho configurado no nginx no navegador de internet (larareact.local.test )
- apos fazer o login vai esta disponível o CRUD (caso nao tenha o login registrar na aplicacao)

## DUVIDAS E CONTATOS
- **[Whatsapp - Luis Paulo ](https://api.whatsapp.com/send?phone=5561982481004)**
- **[Repo: GITHUB - Luis Paulo ](https://github.com/luispaulo)**


