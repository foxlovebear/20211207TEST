<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserCRUDList extends Model
{
    use HasFactory;  //技術原則
    protected $table = "account_info";
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
