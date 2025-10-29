<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Nama tabel di database.
     */
    protected $table = 'products';

    /**
     * Primary key dari tabel.
     */
    protected $primaryKey = 'id';

    /**
     * Kolom yang dapat diisi secara massal (fillable).
     */
    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    /**
     * Mengaktifkan timestamps (created_at & updated_at).
     */
    public $timestamps = true;
}
