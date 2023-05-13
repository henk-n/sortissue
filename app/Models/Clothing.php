<?php

namespace App\Models;

use DateTime;
use Carbon\Carbon;
use Illuminate\Support\HtmlString;
use Spatie\Activitylog\LogOptions;
use SebastianBergmann\Type\NullType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PhpOffice\PhpSpreadsheet\Calculation\Logical\Boolean;

class Clothing extends Model
{
    use HasFactory;
    protected $table = 'clothing';
    protected $fillable = [
        'Status',
        'Code',
        'agency_id',
 

    ];



    public function agency(): BelongsTo
    {

        return $this->belongsTo(Agency::class);
    }
    
}
