<?php

class Cartas
{
    private int $numero;
    private string $nome;

    public function __tostring()
    {
        return "Cartas sorteada $this->numero de $this->nome";
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}
// Copas
$cartas = array();
for ($i = 0; $i < 10; $i++) {
    $carta = new Cartas();
    $carta->setNumero($i + 1);
    $carta->setNome("Copas");
    array_push($cartas, $carta);
}
// Espadas
for ($i = 0; $i < 10; $i++) {
    $carta = new Cartas();
    $carta->setNumero($i + 1);
    $carta->setNome("Espadas");
    array_push($cartas, $carta);
}
// Paus
for ($i = 0; $i < 10; $i++) {
    $carta = new Cartas();
    $carta->setNumero($i + 1);
    $carta->setNome("Paus");
    array_push($cartas, $carta);
}
// Ouros

for ($i = 0; $i < 10; $i++) {
    $carta = new Cartas();
    $carta->setNumero($i + 1);
    $carta->setNome("Ouros");
    array_push($cartas, $carta);
}

$sorteado = $cartas[array_rand($cartas)];

//print ($sorteado);

$escolhaNum=0;
$escolhaNome=0;

$errado=false;
print "---Instruções---\n";
print("1-Descubra o numero (1 -> 10) e o naipe da carta (Copas; Espadas; Ouros; Paus).\n2-Os numeros devem ser escritos em numerais (1;2;3;etc.) e o naipe em PascalCase, ou seja, a primeira letra maiuscula (Copas).\n3-Naipe e Numeros serão escritos em caixas diferentes, e o programa avisa caso você acerte alguma\n---Boa sorte e bom jogo---\n");
//Nenhum certo\\
while ($errado=true){
if ($escolhaNum != $sorteado->getNumero() and $escolhaNome != $sorteado->getNome()) {
    print("\nNenhum acerto\n");
    $escolhaNum = readline("Número:");
    $escolhaNome = readline("Naipe:");
}

//Só numero certo\\
elseif ($escolhaNome != $sorteado->getNome()) {
    print("\nNumero certo: ". $sorteado->getNumero()."\n");
    $escolhaNome = readline("Naipe:");
}

//Só Naipe certo\\
elseif ($escolhaNum != $sorteado->getNumero()) {
    print("\nNaipe certo: ". $sorteado->getNome() ."\n");
    $escolhaNum = readline("Número:");
}

else{
    print("Parabens, você acertou!\nNúmero sorteado:".$sorteado);
    $errado=false;
    die();
}

}
