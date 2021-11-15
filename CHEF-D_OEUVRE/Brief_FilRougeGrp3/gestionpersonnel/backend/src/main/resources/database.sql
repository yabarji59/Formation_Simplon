-- Database: gestion_de_personnel

-- DROP DATABASE gestion_de_personnel;

CREATE DATABASE gestion_de_personnel
    WITH 
    OWNER = directeur
    ENCODING = 'UTF8'
    LC_COLLATE = 'French_France.1252'
    LC_CTYPE = 'French_France.1252'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;

COMMENT ON DATABASE gestion_de_personnel
    IS 'Choix n°1 BRIEF fil rouge POEI Java ';

    -- Role: directeur
-- DROP ROLE directeur;

CREATE ROLE directeur WITH
  LOGIN
  SUPERUSER
  INHERIT
  CREATEDB
  CREATEROLE
  NOREPLICATION
  VALID UNTIL '2021-11-10 09:57:11+01';

COMMENT ON ROLE directeur IS 'chef d''entreprise qui a la main sur la BDD 
Peut tout faire sauf créer des backups ';