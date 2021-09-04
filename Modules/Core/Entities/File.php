<?php

namespace Modules\Core\Entities;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * Modules\Core\Entities\File
 *
 * @property int $id
 * @property string $s3_key
 * @property string $path
 * @property string $file_type
 * @property float $file_size
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Vacancy|null $vacancies
 * @method static Builder|File newModelQuery()
 * @method static Builder|File newQuery()
 * @method static Builder|File query()
 * @method static Builder|File whereCreatedAt($value)
 * @method static Builder|File whereFileSize($value)
 * @method static Builder|File whereFileType($value)
 * @method static Builder|File whereId($value)
 * @method static Builder|File wherePath($value)
 * @method static Builder|File whereS3Key($value)
 * @method static Builder|File whereUpdatedAt($value)
 * @mixin Eloquent
 */
class File extends Model
{
    use HasFactory;

    protected $fillable = ['s3_key', 'path', 'file_type', 'file_size'];


    /**
     * @return HasOne
     */
    public function vacancies(): HasOne
    {
        return $this->HasOne(Vacancy::class, 'cv_image');
    }
}

