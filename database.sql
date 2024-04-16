drop schema if exists DB;
create schema if not exists DB;
use DB;
create table tb_preco_97(
  id varchar(192) PRIMARY KEY,
  foto_painel varchar(192),
  modelo varchar(192),
  created_at timestamp default CURRENT_TIMESTAMP
);
insert into tb_preco_97(id, foto_painel, modelo)
values (
    '673c6d96-3503-4070-8855-be08c75ac69b',
    'https://picsum.photos/id/1/200/300',
    'CD01'
  ),
  (
    '43e1b836-ffeb-4459-8b20-4d5093f3aa0c',
    'https://picsum.photos/id/11/200/300',
    'CD14'
  ),
  (
    'ddb06b1c-d679-41ca-a31e-53c310e78aa8',
    'https://picsum.photos/id/21/200/300',
    'CD15'
  ),
  (
    '21385d9d-4acb-46f4-8744-e34eff61bb8e',
    'https://picsum.photos/id/31/200/300',
    'CD16'
  );