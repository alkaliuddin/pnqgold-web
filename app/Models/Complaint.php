<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model {
    use HasFactory;
    protected $fillable = [
        'complaint_isd_code',
        'school_code',
        'school_name',
        'asset_model',
        'tagging_no',
        'serial_no',
        'complainant_name',
        'complainant_email',
        'complainant_phone',
        'complaint_details',
        'status',
    ];
}
