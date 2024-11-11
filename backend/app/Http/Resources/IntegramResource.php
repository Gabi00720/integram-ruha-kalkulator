<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IntegramResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "cegnev" => $this->cegnev,
            "cim" => $this->cim,
            "adoszam" => $this->adoszam,
            "nev" => $this->nev,
            "tel" => $this->tel,
            "email" => $this->email,
        ];
    }
}
