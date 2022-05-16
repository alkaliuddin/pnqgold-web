<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model {
    use HasFactory, SoftDeletes;

    public $table = 'schools';
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];

    public $fillable = [
        'school_name',
        'school_code',
        'school_district',
    ];

    public $casts = [
        'id' => 'integer',
        'school_name' => 'string',
        'school_code' => 'string',
        'school_district' => 'string',
    ];

    public $rules = [
        'id' => 'required|integer',
        'school_name' => 'required|string',
        'school_code' => 'required|string',
    ];

    public static $validationAttributes = [
        'school_name' => 'Nama Sekolah',
        'school_code' => 'Kod Sekolah',
    ];

    public static $message = [
        'school_name.required' => 'Sila masukkan Nama Sekolah',
        'school_code.required' => 'Sila masukkan Kod Sekolah',
    ];

    public function complaints() {
        return $this->hasMany(Complaint::class, 'school_id');
    }
}
