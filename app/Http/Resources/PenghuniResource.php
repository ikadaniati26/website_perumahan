<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PenghuniResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->idpenghuni,
            'nama' => $this->nama,
            'foto_ktp' => $this->foto_ktp,
            'status_penghuni' =>  $this->status_penghuni,
            'no_telp' => $this->no_telp,
            'status_menikah' =>  $this->status_menikah,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at

        ];
    }
}
