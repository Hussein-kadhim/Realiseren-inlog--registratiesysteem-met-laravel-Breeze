<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AllergeenModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam',
        'omschrijving',
    ];

    public function sp_GetAllAllergenen()
    {
        return DB::select('SELECT Id, naam AS Naam, omschrijving AS Omschrijving FROM Allergeen');
    }

    public function sp_CreateAllergeen($name, $description)
    {
        DB::table('Allergeen')->insert([
            'naam'        => $name,
            'omschrijving' => $description,
        ]);

        return DB::getPdo()->lastInsertId();
    }

    public function sp_DeleteAllergeen($id)
    {
        $affected = DB::table('Allergeen')->where('Id', $id)->delete();

        return $affected;
    }

    public function sp_GetAllergeenById($id)
    {
        return DB::table('Allergeen')
            ->select('Id', 'naam AS Naam', 'omschrijving AS Omschrijving')
            ->where('Id', $id)
            ->first();
    }

    public function sp_UpdateAllergeen($id, $name, $description)
    {
        $affected = DB::table('Allergeen')
            ->where('Id', $id)
            ->update([
                'naam' => $name,
                'omschrijving' => $description,
                'updated_at' => now()
            ]);

        return $affected;
    }
}
