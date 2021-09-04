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
 * Modules\Core\Entities\JobType
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Vacancy[] $vacancies
 * @property-read int|null $vacancies_count
 * @method static Builder|JobType newModelQuery()
 * @method static Builder|JobType newQuery()
 * @method static Builder|JobType query()
 * @method static Builder|JobType whereCreatedAt($value)
 * @method static Builder|JobType whereId($value)
 * @method static Builder|JobType whereName($value)
 * @method static Builder|JobType whereSlug($value)
 * @method static Builder|JobType whereUpdatedAt($value)
 * @mixin Eloquent
 */
class JobType extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'name'];

    /**
     * @return HasMany
     */
    public function vacancies(): HasMany
    {
        return $this->HasMany(Vacancy::class, 'vacancy_id');
    }
}
