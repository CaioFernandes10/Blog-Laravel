<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteContato extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['nome','email','telefone','mensagem','motivo_contatos_id'];
}






