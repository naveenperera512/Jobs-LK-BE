<?php

namespace Modules\Core\Entities;

use App\Models\User;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * Modules\Core\Entities\Vacancy
 *
 * @property int $id
 * @property int $category_id
 * @property int $job_type_id
 * @property int $district_id
 * @property int $district_city_id
 * @property int $user_id
 * @property string $slug
 * @property string $title
 * @property string $employee_name
 * @property string $employee_email
 * @property string $telephone
 * @property string|null $deadline_date
 * @property string $description
 * @property int|null $cv_image
 * @property mixed|null $data
 * @property int $is_approved
 * @property string|null $approved_by_id
 * @property string|null $approved_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Category $category
 * @property-read DistrictCity $cities
 * @property-read District $district
 * @property-read File|null $files
 * @property-read JobType $jobs
 * @property-read User $users
 * @method static Builder|Vacancy newModelQuery()
 * @method static Builder|Vacancy newQuery()
 * @method static Builder|Vacancy query()
 * @method static Builder|Vacancy whereApprovedAt($value)
 * @method static Builder|Vacancy whereApprovedById($value)
 * @method static Builder|Vacancy whereCategoryId($value)
 * @method static Builder|Vacancy whereCreatedAt($value)
 * @method static Builder|Vacancy whereCvImage($value)
 * @method static Builder|Vacancy whereData($value)
 * @method static Builder|Vacancy whereDeadlineDate($value)
 * @method static Builder|Vacancy whereDescription($value)
 * @method static Builder|Vacancy whereDistrictCityId($value)
 * @method static Builder|Vacancy whereDistrictId($value)
 * @method static Builder|Vacancy whereEmployeeEmail($value)
 * @method static Builder|Vacancy whereEmployeeName($value)
 * @method static Builder|Vacancy whereId($value)
 * @method static Builder|Vacancy whereIsApproved($value)
 * @method static Builder|Vacancy whereJobTypeId($value)
 * @method static Builder|Vacancy whereSlug($value)
 * @method static Builder|Vacancy whereTelephone($value)
 * @method static Builder|Vacancy whereTitle($value)
 * @method static Builder|Vacancy whereUpdatedAt($value)
 * @method static Builder|Vacancy whereUserId($value)
 * @mixin Eloquent
 */
class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'job_type_id', 'district_id', 'district_city_id', 'user_id', 'slug', 'title', 'employee_name', 'employee_email', 'telephone', 'deadline_date', 'description', 'cv_image', 'data', 'is_approved', 'approved_by_id','approved_at'];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function district(): BelongsTo
    {
        return $this->BelongsTo(District::class, 'district_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function cities(): BelongsTo
    {
        return $this->BelongsTo(DistrictCity::class, 'district_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function users(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function jobs(): BelongsTo
    {
        return $this->BelongsTo(JobType::class, 'job_type_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function files(): BelongsTo
    {
        return $this->BelongsTo(File::class, 'cv_image', 'id');
    }
}
