<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

use App\Traits\FormattedDateSerialization;
use App\Traits\ActiveDurationScope;

use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

use Eloquent as Model;
use Carbon\Carbon;
use Exception;

class Complaint extends Model {
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'complaint_isd_code',
        'school_id',
        'asset_model',
        'tagging_no',
        'serial_no',
        'complainant_name',
        'complainant_email',
        'complainant_phone',
        'complaint_details',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'complaint_isd_code' => 'string',
        'school_id' => 'string',
        'asset_model' => 'string',
        'tagging_no' => 'string',
        'serial_no' => 'string',
        'complainant_name' => 'string',
        'complainant_email' => 'string',
        'complainant_phone' => 'string',
        'complaint_details' => 'string',
        'status' => 'string',
    ];

    public function school() {
        return $this->belongsTo(School::class, 'school_id');
    }
}
