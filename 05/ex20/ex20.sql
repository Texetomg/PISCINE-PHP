SELECT      `db_bfalmer-`.film.id_genre,
            `db_bfalmer-`.genre.name AS `name_genre`,
            `db_bfalmer-`.film.id_distrib,
            `db_bfalmer-`.distrib.name AS `name_distrib`,
            `db_bfalmer-`.film.title AS `title_film`
FROM        `db_bfalmer-`.film
LEFT JOIN   `db_bfalmer-`.genre
            ON `db_bfalmer-`.genre.id_genre = `db_bfalmer-`.film.id_genre
LEFT JOIN   `db_bfalmer-`.distrib
            ON `db_bfalmer-`.distrib.id_distrib = `db_bfalmer-`.film.id_distrib
WHERE       `db_bfalmer-`.film.id_genre
            BETWEEN 4 AND 8;