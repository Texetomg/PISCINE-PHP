SELECT      UPPER(`last_name`) AS `NAME`,
            `db_bfalmer-`.user_card.first_name,
            `db_bfalmer-`.subscription.price
FROM        `db_bfalmer-`.user_card,
            `db_bfalmer-`.member,
            `db_bfalmer-`.subscription
WHERE       `db_bfalmer-`.user_card.id_user = `db_bfalmer-`.member.id_user_card
                AND member.id_sub = subscription.id_sub
                AND subscription.price > 42
ORDER BY    user_card.last_name ASC,
            user_card.first_name ASC;