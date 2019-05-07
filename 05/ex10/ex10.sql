SELECT `title` AS `Title`,
        `summary` AS `Summary`,
        `prod_year`
FROM    `db_bfalmer-`.film, `db_bfalmer-`.genre
WHERE   `db_bfalmer-`.film.id_genre = `db_bfalmer-`.genre.id_genre
        AND `db_bfalmer-`.genre.name = 'erotic'
ORDER BY `prod_year` DESC;