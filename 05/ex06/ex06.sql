SELECT `title`, `summary` FROM `db_bfalmer-`.film
WHERE LOWER (`summary`) LIKE "%vincent%"
ORDER BY id_film;