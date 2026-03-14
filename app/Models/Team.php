<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // Ini adalah 'izin' agar kolom-kolom ini boleh diisi (Mass Assignment)
    protected $fillable = [
        'user_id',
        'team_name',
        'competition_category',
        'institution',
    ];

    // Menghubungkan Tim kembali ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}