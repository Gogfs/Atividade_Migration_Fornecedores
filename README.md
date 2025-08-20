## Atividade - Chave primária e estrangeira e alter table

Atividade para aprender a criar tabelas ligadas por FK, e também a alterar uma migration.

## Criação das migrations

Crie a migration cadastro com o comando "php artisan make:migration create_cadastro_table":

<img width="1467" height="135" alt="Criação da migration cadastro" src="https://github.com/user-attachments/assets/2cb0ce3e-1c35-4924-a5f0-dc02ca4cfd3b" />

Adicione os campos na migration cadastro:

<img width="628" height="369" alt="Campos da tabela cadastro" src="https://github.com/user-attachments/assets/92b76fe9-8da0-4c85-a6c3-b30d377f6b58" />

Crie a migration cadastro com o comando "php artisan make:migration create_estoque_table":

<img width="1437" height="128" alt="Criação da tabela estoque" src="https://github.com/user-attachments/assets/1ac76005-5e38-443d-a8df-e6ad516788ca" />

Adicione os campos na migration estoque:

<img width="719" height="392" alt="Campos da tabela estoque" src="https://github.com/user-attachments/assets/5d230c80-082d-49f8-ba4e-7bb14c26fcef" />

Use o comando "php artisan migrate" para rodar as migrações, ou "php artisan migrate:refresh" para atualizá-las:
<img width="1286" height="292" alt="php artisan migrate:refresh" src="https://github.com/user-attachments/assets/e3de12c3-62c6-45f7-9d6d-b64609ac042f" />

## Alteração da migration cadastro

Para alterar a migration cadastro, temos que criar uma outra migration antes

Crie a migration alter_cadastro com o comando "php artisan make:migration alter_cadastro_table":

<img width="1443" height="89" alt="Alteração da migration cadastro" src="https://github.com/user-attachments/assets/f50473bb-8e7a-4d65-a83a-e6422112dd06" />

Adicione os seguintes campos na migration alter_cadastro_table:

<img width="737" height="378" alt="Campos alter cadastro" src="https://github.com/user-attachments/assets/f5954afa-356a-441c-9092-ca10ce8bdd7e" />

Atualize o banco de dados com o comando "php artisan migrate:refresh":

<img width="1291" height="307" alt="php artisan migrate:fresh" src="https://github.com/user-attachments/assets/ed3b9573-0304-40c2-a749-d36120f028ef" />

## Resultado

Tabela cadastro antes da alteração

<img width="363" height="89" alt="tabela cadastro antes da atualização" src="https://github.com/user-attachments/assets/98956825-f1a1-49f4-8b01-eed25f2687e6" />

Tabela cadastro após a alteração

<img width="525" height="48" alt="tabela cadastro após alteração" src="https://github.com/user-attachments/assets/e447fa94-5358-45fc-bf06-04bd43fd2823" />
