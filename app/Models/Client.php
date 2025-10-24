<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $table = "client";
    protected $primaryKey = "id_client";
    public $incrementing = false;
    public $keyType = "string";
    public $timestamps = false;

    protected $fillable = [
        "id_client",
        "nama_client",
        "alamat",
        "nama_pic",
        "bagian_pic",
        "nomor_pic"
    ];

    public static function generateId()
    {
         $last = self::orderBy('id_client', 'desc')->first();
        $number = $last ? (int) substr($last->id_client, 4) + 1 : 1;
        return 'PKF-' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }
}
