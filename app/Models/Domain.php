<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    /** @use HasFactory<\Database\Factories\DomainFactory> */
    use HasFactory;

    protected $fillable = [
        'domain_name',
        'domain_type',
        'company_name',
        'notes',
        'contact_email',
        'contact_phone',
        'contact_name',
        'ipa_number',        
    ];
}
