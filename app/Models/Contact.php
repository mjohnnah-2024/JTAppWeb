<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     /** @use HasFactory<\Database\Factories\DomainFactory> */
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'query',
        'email',
        'message',
    ];

    // You can define relationships, accessors, or other methods here if needed
    // For example, if you want to define a relationship with another model, you can do it here
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    // You can also add validation rules or other methods as needed
    // For example, if you want to add validation rules for the contact form, you can do it here
    // public static function rules()
    // {
    //     return [
    //         'firstname' => 'required|string|max:255',
    //         'lastname' => 'required|string|max:255',
    //         'query' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'message' => 'required|string',
    //     ];
    // }
    // You can also add custom methods for your model if needed
    // For example, if you want to format the contact's full name, you can do it like this:
    // public function getFullNameAttribute()
    // {
    //     return $this->firstname . ' ' . $this->lastname;
    // }
    // You can also add custom methods for your model if needed
    // For example, if you want to format the contact's full name, you can do it like this:
    // public function getFullNameAttribute()
    // {
    //     return $this->firstname . ' ' . $this->lastname;
    // }
    // You can also add custom methods for your model if needed
    // For example, if you want to format the contact's full name, you can do it like this:
    // public function getFullNameAttribute()
    // {
    //     return $this->firstname . ' ' . $this->lastname;
    // }
}
