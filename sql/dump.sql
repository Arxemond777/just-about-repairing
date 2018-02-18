CREATE OR REPLACE FUNCTION last_date_modified() RETURNS TRIGGER
LANGUAGE plpgsql
AS $$
BEGIN
  NEW.last_date_modified := now();
  RETURN NEW;
END;
$$;

DROP TRIGGER IF EXISTS menu_last_date_modified ON menu;
CREATE TRIGGER menu_last_date_modified
  BEFORE UPDATE ON menu
  FOR EACH ROW EXECUTE PROCEDURE last_date_modified();

----------------
CREATE OR REPLACE FUNCTION menu_valid_parent_key_I_OR_U() RETURNS TRIGGER
LANGUAGE plpgsql
AS $$
declare idExist BOOLEAN;
BEGIN
  IF NEW.parent_id != -1 and NEW.parent_id is not NULL THEN

    idExist = (SELECT exists (SELECT parent_id FROM menu WHERE id = NEW.parent_id));

    IF idExist = FALSE THEN
      RAISE EXCEPTION 'Not exist such parent: id = %', NEW.parent_id;
    END IF;
  END IF ;
  RETURN NEW;
END;
$$;

DROP TRIGGER IF EXISTS menu_valid_parent_key_I_OR_U ON menu;
CREATE TRIGGER menu_valid_parent_key_I_OR_U
  BEFORE INSERT OR UPDATE ON menu
  FOR EACH ROW EXECUTE PROCEDURE menu_valid_parent_key_I_OR_U();
--

CREATE OR REPLACE FUNCTION menu_valid_parent_key_D() RETURNS TRIGGER
LANGUAGE plpgsql
AS $$
declare idExist BOOLEAN;
BEGIN

  idExist = (SELECT exists (SELECT parent_id FROM menu WHERE parent_id = OLD.id));

  IF idExist = TRUE THEN
    RAISE EXCEPTION 'This id = (%) have referenced children and can`t be delete', OLD.id;
  END IF;

  RETURN OLD;
END;
$$;

DROP TRIGGER IF EXISTS menu_valid_parent_key_D ON menu;
CREATE TRIGGER menu_valid_parent_key_D
  BEFORE DELETE ON menu
  FOR EACH ROW EXECUTE PROCEDURE menu_valid_parent_key_D();

-----------------------
-------article---------

CREATE TRIGGER article_last_date_modified
  BEFORE UPDATE
  ON article
  FOR EACH ROW EXECUTE PROCEDURE last_date_modified();