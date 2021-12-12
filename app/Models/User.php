<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class User extends Model
{
    use Sortable;

    protected $fillable = [
        'name', 'age', 'email', 'comment'];

    public $sortable = ['name', 'age', 'comment'];


}
