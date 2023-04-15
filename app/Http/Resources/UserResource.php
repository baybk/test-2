<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $result = [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'api_token' => (isset($this->api_token) && !empty($this->api_token)) ? $this->api_token : '',
            'is_admin' => $this->is_admin,
            'user_details' => $this->extraInfo()
        ];

        return $result;
    }
}
