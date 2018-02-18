WITH RECURSIVE r AS (
  SELECT id, parent_id, name, (select exists(select parent_id from prostooremonte.menu WHERE parent_id = pm1.id)) AS hasChildren
  FROM prostooremonte.menu AS pm1
  WHERE parent_id = 2

  UNION

  SELECT pm2.id, pm2.parent_id, pm2.name, (select exists(select parent_id from prostooremonte.menu WHERE parent_id = pm2.id)) AS hasChildren
  FROM prostooremonte.menu AS pm2
    JOIN r
      ON pm2.parent_id = r.id
)

SELECT * FROM r;