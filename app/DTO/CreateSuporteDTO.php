<?php

namespace App\DTO;

use App\Enums\SuporteStatus;
use App\Http\Requests\StoreUpdateSuporteRequest;

class CreateSuporteDTO
{
    public function __construct(
        public string $subject,
        public SuporteStatus $status,
        public string $body,
    ) {}

    public static function makeFromRequest(StoreUpdateSuporteRequest $request): self
    {
        return new self(
            $request->subject,
            SuporteStatus::A,
            $request->body
        );
    }
}