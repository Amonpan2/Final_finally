<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_todo extends Model
{
    use HasFactory;
    public $table = "todo_list";
    public $timestamps = false;
    public $primaryKey = "td_id";
}
