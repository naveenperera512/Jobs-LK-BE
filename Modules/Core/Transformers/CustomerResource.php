<?php

namespace Modules\Core\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'company_name' => $this->company_name,
        'email' => $this->email,
        'phone_number' => $this->phone_number,
        'locale' => $this-> locale,
        'preferred_currency' => $this-> preferred_currency,
            ];
    }
}
