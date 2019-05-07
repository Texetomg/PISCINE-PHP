SELECT DATEDIFF(max(`date`), min(`date`)) AS `uptime`
FROM db_bfalmer.member_history;