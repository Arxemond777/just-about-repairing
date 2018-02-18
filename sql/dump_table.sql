

-----user
create table if not exists "user"
(
  id serial not null
    constraint user_pkey
    primary key,
  name varchar(255) not null,
  last_name varchar(255) not null,
  patronymic varchar(255),
  email varchar(255) not null,
  password varchar(255),
  phone varchar(255),
  enabled boolean default true not null
);
create unique index if not exists user_id_uindex on "user" (id);
create unique index if not exists user_email_uindex on "user" (email);

-----article
create table if not exists article
(
  id serial not null
    constraint article_pkey
    primary key,
  title varchar(255) not null,
  description text,
  main_photo varchar(255),
  seo_title varchar(255),
  seo_description text,
  author integer default 1
    constraint fk_article_to_user
    references "user",
  last_date_modified date default now()
);
create unique index if not exists article_id_uindex on article (id);
create unique index if not exists article_title_uindex on article (title);
comment on column article.author is 'id 1 is name of Yuri or Mansur';

--menu
create table if not exists menu
(
  id serial not null
    constraint menu_pkey
    primary key,
  name varchar(255) not null,
  description text,
  url varchar(255) not null,
  parent_id integer default '-1'::integer not null,
  seo_name varchar(255),
  seo_description text,
  seo_rating smallint,
  last_date_modified date default now()
);

create unique index if not exists menu_id_uindex on menu (id);
create unique index if not exists menu_name_uindex on menu (name);
create unique index if not exists menu_url_uindex on menu (url);
create unique index if not exists menu_seo_name_uindex on menu (seo_name);
