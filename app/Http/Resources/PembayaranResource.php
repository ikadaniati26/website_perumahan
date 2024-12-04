<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PembayaranResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->idPembayaran,
            'jenis_iuran' => $this->jenis_iuran,
            'jumlah' => $this->jumlah,
            'bulan_bayar' => $this->bulan_bayar,
            'status' => $this->status,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'Penghuni_idPenghuni' => $this->Penghuni_idPenghuni
        ];
    }
}
