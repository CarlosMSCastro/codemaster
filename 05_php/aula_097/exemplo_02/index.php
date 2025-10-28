<?php

/*

# array
alunos = ["fabricio","Carlos","karol"]

#dicionario
a1 = {"nome":"Carlos",
      "idade":29,                                         -> array
      "morada":"covilha"
}
print(a1["idade"])

#vetor de dicionarios
alunos = [{"nome":"Carlos",
          "idade":29,
          "morada":"covilha"
        }
          {"nome":"Joana",
          "idade":26,                                     -> dicionario (em php : array associativo)
          "morada":"trofa"                                              
          }
          {"nome":"Karol",
          "idade":25,
          "morada":"Porto"
          }
]

print(alunos[2]["idade"])

*/

//array
$alunos = ["fabricio","ana","jose"];

// dicionario (em php é array associativo)
$a1 = [
  "nome"=>"fabricio",
  "idade"=>29,
  "morada"=>"covilha"
];
echo $a1["idade"] . "<br>";

//array de dicionario

$alunos = [
  ["nome"=>"fabricio",
  "idade"=>29,
  "morada"=>"covilha"],

  ["nome"=>"Rui",
  "idade"=>19,
  "morada"=>"trofa"],

  ["nome"=>"jorge",
  "idade"=>36,
  "morada"=>"coimbra"]
];
echo $alunos[2]["idade"] . "<br>";


?>