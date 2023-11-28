<?php

declare(strict_types=1);

namespace App;

class ContaBancaria {
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function exibirDadosPublicos(): array 
    {
        return [
            'nomeTitular' => $this->nomeTitular,
            'numeroConta' => $this->numeroConta,
        ];
    }

    public function exibirDadosDaConta(): array 
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo
        ];
    }

    public function getBanco(): string {
        return $this->banco;
    }

    public function setBanco(string $banco): void {
        $this->banco = $banco;
    }

    public function getNomeTitular(): string {
        return $this->nomeTitular;
    }

    public function setNomeTitular(string $nomeTitular): void {
        $this->nomeTitular = $nomeTitular;
    }

    public function getAgencia(): string {
        return $this->numeroAgencia;
    }

    public function setAgencia(string $numeroAgencia): void {
        $this->numeroAgencia = $numeroAgencia;
    }

    public function getConta(): string {
        return $this->numeroAgencia;
    }

    public function setConta(string $numeroConta): void {
        $this->numeroConta = $numeroConta;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void {
        $this->saldo = $saldo;
    }

    

}