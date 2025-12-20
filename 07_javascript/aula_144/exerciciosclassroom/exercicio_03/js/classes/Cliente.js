/*
class Cliente{

  // Atributos
  public $nome;
  public $idade;
  public $morada;
  public $peso;
  public $altura;
  private $cartao;

  // Construtor
  public function __construct($nome, $idade, $morada, $peso, $altura){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->morada = $morada;
    $this->peso = $peso;
    $this->nome = $altura;
  }

  // Métodos
  public function exibir_ficha(){
    echo "$this->nome - ($this->idade) ($this->morada) ($this->peso) ($this->altura)";
  }

  public function get_imc(){
    $imc = $this->peso / $this->altura ** 2;
    return $imc;
  }

}
*/

class Cliente{

  // Atributos Privados
  #cartao;
  #nif;

  // Atributos e Construtor
  constructor(nome, idade, morada, peso, altura){
    this.nome = nome;
    this.idade = idade;
    this.morada = morada;
    this.peso = peso;
    this.altura = altura;
    this.#cartao = 123;
    this.#nif = 321;
  }

  // Métodos
  exibir_ficha(){
    let novo_p = document.createElement("p");
    novo_p.innerHTML += `${this.nome} (${this.idade}) (${this.morada}) (${this.peso}) (${this.altura})`;
    saida.appendChild(novo_p);
  }

  get_imc(){
    let imc = this.peso / this.altura ** 2;
    return imc.toFixed(1);
  }

}