<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            $this->mergeWhen(true, [
                'email' => $this->user->email,
                'created_at' => $this->created_at->format('Y-m-d')
            ])
        ];
    }
}
