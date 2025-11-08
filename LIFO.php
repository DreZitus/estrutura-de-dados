<?php

class Pilha
{
    private array $pilha;
    private int $tamanho;

    public function __contruct()
    {
        $this->pilha = [];
        $this->tamaho = 0;
    }


    public function adicionarNoinicio(string $nomeJogo): void
    {
        array_unshift($this->pilha, $nomeJogo);
        #this->tamanho++;
    }

    public function mostrarItens(): void
    {   foreach ($this->pilha as $item) {
            print_r("nome do jogo => {$item}. \n");
        }
    
    }
}

$pilhaDEJogos = new pilha();

$pilhaDEJogos->adicionarNoInicio ("god of war");
$pilhaDEJogos->adicionarNoInicio ("PES");
$pilhaDEJogos->adicionarNoInicio ("rule of rose");
$pilhaDEJogos->adicionarNoInicio ("GTA 5");
$pilhaDEJogos->mostrarItens();