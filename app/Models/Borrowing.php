<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasFactory;

    protected $table ='borrowings';
    protected $fillable =['nama_peminjam', 'judul_buku', 'tgl_pinjam', 'tgl_kembali', 'ket'];


    public function scopeFilter($query, array $filters) 
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_peminjam', 'like', '%' . $search . '%')->orWhere('judul_buku', 'like', '%', 'tgl_pinjam' . $search . '%');
        });
    }


}

