<?php

namespace App\Enums;

enum SignatureStatus: string
{
    case APPROVED = 'A';
    case PENDING = 'P';
    case CANCELED = 'C';

    public function label(): string
    {
        return match($this) {
            self::APPROVED => 'Aprovado',
            self::PENDING => 'Pendente',
            self::CANCELED => 'Cancelado'
        };
    }
}