<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;
    protected $fillable = [
        'matintuc',
        'tieude',
        'noidung',
        'matheloai',
    ];
    public function TheLoai()
    {
        // return $this->hasOne(TheLoai::class, 'matheloai', 'matheloai')
        //     ->withDefault(['tentheloai' => '']);
        return $this->belongsTo(TheLoai::class, 'matheloai')->select('matheloai', 'tentheloai');
    }
}
