create table professions(
  id VARCHAR(50) uuid_generate_v4() DEFAULT PRIMARY KEY,
  designation VARCHAR(2048) not null,
  cod_profession VARCHAR(50) UNIQUE,
  num_profession VARCHAR(50) NULL ,
  group_base VARCHAR(50) NULL,
  creation_date TIMESTAMPTZ DEFAULT now(),
  updated_at TIMESTAMPTZ DEFAULT now());
)

Alter table person add column profession varchar(50) null,
alter table person add FOREIGN KEY(profession_id) REFERENCES profession(id)