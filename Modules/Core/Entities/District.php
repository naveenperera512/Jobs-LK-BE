<?php

namespace Modules\Core\Entities;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * Modules\Core\Entities\District
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|DistrictCity[] $cities
 * @property-read int|null $cities_count
 * @property-read Collection|Vacancy[] $vacancies
 * @property-read int|null $vacancies_count
 * @method static Builder|District newModelQuery()
 * @method static Builder|District newQuery()
 * @method static Builder|District query()
 * @method static Builder|District whereCreatedAt($value)
 * @method static Builder|District whereId($value)
 * @method static Builder|District whereName($value)
 * @method static Builder|District whereSlug($value)
 * @method static Builder|District whereUpdatedAt($value)
 * @mixin Eloquent
 */
class District extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name'];

    /**
     * @return HasMany
     */
    public function cities(): HasMany
    {
        return $this->HasMany(DistrictCity::class, 'district_id');
    }

    /**
     * @return HasMany
     */
    public function vacancies(): HasMany
    {
        return $this->HasMany(Vacancy::class, 'district_id');
    }
}
