<?php

namespace App\Api\v3\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ClientCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'lista_de_clientes_nao_excluidos' => $this->collection,
            'novo_campo' => 'novo_valor'
        ];
    }
}
