<?php

namespace Jumbojett;

class StateData
{
    private $id;
    private $nonce;
    private $codeVerifier;

    public function __construct(string $id, string $nonce, string $codeVerifier = null)
    {
        $this->id = $id;
        $this->nonce = $nonce;
        $this->codeVerifier = $codeVerifier;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNonce()
    {
        return $this->nonce;
    }

    public function getCodeVerifier()
    {
        return $this->codeVerifier;
    }

    public function setCodeVerifier(string $codeVerifier): self
    {
        $this->codeVerifier = $codeVerifier;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'nonce' => $this->nonce,
            'code_verifier' => $this->codeVerifier
        ];
    }

    public static function fromArray(array $data): self
    {
        return new StateData(
            $data['id'],
            $data['nonce'],
            $data['code_verifier'] ?? null
        );
    }
}
