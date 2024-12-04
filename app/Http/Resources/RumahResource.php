<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RumahResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->idrumah,
            'no_rumah' => $this->no_rumah,
            'status' => $this->status_rumah,
            'nama' => $this->nama_penghuni

        ];

    }
}
