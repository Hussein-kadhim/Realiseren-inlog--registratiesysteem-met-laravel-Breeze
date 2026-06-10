USE breezedemo;

DROP PROCEDURE IF EXISTS SP_GetUserById;

DELIMITER $$

CREATE PROCEDURE SP_GetUserById(
    IN p_Id INTEGER
)
BEGIN

    SELECT USRS.id as Id
          ,USRS.name
          ,USRS.email
          ,USRS.rolename
    FROM users as USRS
    WHERE USRS.id = p_Id;

END$$

DELIMITER ;
