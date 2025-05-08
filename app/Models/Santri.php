<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    // Mengambil semua data santri
    public static function getAll($columns = ['*'])

    {
        return Santri::all($columns);
    }

    // Mencari data santri berdasarkan id
    public static function find($id)
    {
        return Santri::where('id', $id)->first();
    }
}
