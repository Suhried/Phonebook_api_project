<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhonebookModel extends Model
{
    protected $table = 'phonebook_details';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false; 
}
