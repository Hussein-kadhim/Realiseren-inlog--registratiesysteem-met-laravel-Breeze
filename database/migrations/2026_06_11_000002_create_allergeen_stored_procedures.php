<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // SP_GetAllAllergenen
        DB::unprepared('DROP PROCEDURE IF EXISTS SP_GetAllAllergenen');
        DB::unprepared('
            CREATE PROCEDURE SP_GetAllAllergenen()
            BEGIN
                SELECT ALGE.Id
                      ,ALGE.naam AS Naam
                      ,ALGE.omschrijving AS Omschrijving
                FROM Allergeen AS ALGE;
            END
        ');

        // sp_CreateAllergeen
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_CreateAllergeen');
        DB::unprepared('
            CREATE PROCEDURE sp_CreateAllergeen(
                IN p_name VARCHAR(50),
                IN p_description VARCHAR(255)
            )
            BEGIN
                INSERT INTO Allergeen (naam, omschrijving)
                VALUES (p_name, p_description);

                SELECT LAST_INSERT_ID() AS new_id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS SP_GetAllAllergenen');
        DB::unprepared('DROP PROCEDURE IF EXISTS sp_CreateAllergeen');
    }
};
