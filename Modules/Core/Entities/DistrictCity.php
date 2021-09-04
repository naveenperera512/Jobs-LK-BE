<?php

namespace Modules\Core\Entities;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * Modules\Core\Entities\DistrictCity
 *
 * @property int $id
 * @property int $district_id
 * @property string $slug
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read District $district
 * @property-read Collection|Vacancy[] $vacancies
 * @property-read int|null $vacancies_count
 * @method static Builder|DistrictCity newModelQuery()
 * @method static Builder|DistrictCity newQuery()
 * @method static Builder|DistrictCity query()
 * @method static Builder|DistrictCity whereCreatedAt($value)
 * @method static Builder|DistrictCity whereDistrictId($value)
 * @method static Builder|DistrictCity whereId($value)
 * @method static Builder|DistrictCity whereName($value)
 * @method static Builder|DistrictCity whereSlug($value)
 * @method static Builder|DistrictCity whereUpdatedAt($value)
 * @mixin Eloquent
 */
class DistrictCity extends Model
{
    use HasFactory;

    protected $fillable = ['district_id', 'slug', 'name'];

    /**
     * @return BelongsTo
     */
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    /**
     * @return HasMany
     */
    public function vacancies(): HasMany
    {
        return $this->HasMany(Vacancy::class, 'district_city_id');
    }
}
