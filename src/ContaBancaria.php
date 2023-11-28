<?php

declare(strict_types=1);

namespace App;

class ContaBancaria {
    private string $banco;
    private string $nomeTitular = "Gabriel Camurça";
    private string $numeroAgencia = "5346";
    private string $numeroConta = "33359-3";
    private float $saldo = 0;

    public function exibirDadosPublicos(): array 
    {
        return [
            'nomeTitular' => $this->nomeTitular,
            'numeroConta' => $this->numeroConta,
        ];
    }

    private function exibirDadosDaConta(): array 
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo
        ];
    }

    public function setBanco(string $banco): void {
        $this->banco = $banco;
    }

    public function getBanco(): string {
        return $this->banco;
    }

}