<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Attachable;


class Requerimiento extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;
    protected $fillable = ["codigo","titulo","descripcion","objetivo"];
}
