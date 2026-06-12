<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AllergeenSetupSeeder extends Seeder
{
    public function run(): void
    {
        // Maak de tabel aan als die nog niet bestaat
        if (!Schema::hasTable('Allergeen')) {
            DB::statement('
                CREATE TABLE Allergeen (
                    Id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    naam VARCHAR(100) NOT NULL,
                    omschrijving TEXT NULL,
                    created_at TIMESTAMP NULL,
                    updated_at TIMESTAMP NULL
                )
            ');
        }

        // Maak stored procedures aan (ook als ze al bestaan)
        DB::unprepared('DROP PROCEDURE IF EXISTS SP_GetAllAllergenen');
        DB::unprepared('
            CREATE PROCEDURE SP_GetAllAllergenen()
            BEGIN
                SELECT Id, naam AS Naam, omschrijving AS Omschrijving
                FROM Allergeen;
            END
        ');

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
}
