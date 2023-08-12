<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividadesphp</title>
</head>
<body>
        
    <?php 
        echo " <button class='button'><a href='principal.php'>voltar</a></button>";
    ?>

    <H1>ATIVIDADE 1</H1>

    $array = [
        'quimica' => [
                         'mat'=> [
                                    'nota1' => 5,
                                    'nota2' => 6, 

                         ],

                         'port' => [
                            'nota1' => 5,
                            'nota2' => 7,
                         ]
            ]
                         ];
  echo '<pre>';
  print_r($array['quimica']);
  echo '</pre>';    
                             
  echo '<pre>';
  print_r($array['quimica'] ['mat']);
  echo '</pre>'; 
                                 
  echo '<pre>';
  print_r($array['quimica'] ['mat'] ['nota1']);
  echo '</pre>';  

   $n1 = $array ['quimica'] ['mat'] ['nota1'];
   echo'<br>';
   $n2 = $array ['quimica'] ['mat']  ['nota2'];
   $soma = $n1 + $n2;
   echo'<pre>';
   echo $soma;





    ?>

    <h1>ATIVIDADE 2</h1>

            $Array = [
                'cursos' => [
                    [
                        'nome' => 'Agronomia',
                        'alunos' => [
                            [
                                'nome' => 'Italo',
                                'disciplinas' => [
                                    [
                                        'nome' => 'Zoologia',
                                        'notas' => [7, 8, 6]
                                    ],
                                    [
                                        'nome' => 'Matematica',
                                        'notas' => [9, 5, 7]
                                    ],
                                    [
                                        'nome' => 'Mecanica',
                                        'notas' => [8, 9, 7]
                                    ]
                                ]
                            ],
                            [
                                'nome' => 'Guilherme',
                                'disciplinas' => [
                                    [
                                        'nome' => 'Zoologia',
                                        'notas' => [6, 7, 8]
                                    ],
                                    [
                                        'nome' => 'Matematica',
                                        'notas' => [5, 6, 7]
                                    ],
                                    [
                                        'nome' => 'Mecanica',
                                        'notas' => [7, 8, 9]
                                    ]
                                ]
                            ]
                        ]
                    ],
                    [
                        'nome' => 'Engenharia civil',
                        'alunos' => [
                            [
                                'nome' => 'Iuri',
                                'disciplinas' => [
                                    [
                                        'nome' => 'Ciencias exatas',
                                        'notas' => [8, 9, 7]
                                    ],
                                    [
                                        'nome' => 'Tecnologia das contrucoes',
                                        'notas' => [7, 8, 6]
                                    ],
                                    [
                                        'nome' => 'Topografia',
                                        'notas' => [6, 7, 8]
                                    ]
                                ]
                            ],
                            [
                                'nome' => 'Julio',
                                'disciplinas' => [
                                    [
                                        'nome' => 'Ciencias exatas',
                                        'notas' => [9, 7, 8]
                                    ],
                                    [
                                        'nome' => 'Tecnologia das contrucoes',
                                        'notas' => [8, 9, 7]
                                    ],
                                    [
                                        'nome' => 'Topografia',
                                        'notas' => [7, 8, 9]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ];

            // a) Print course names
            foreach ($Array['cursos'] as $curso) {
                echo "<pre>";
                echo 'Curso: ' . $curso['nome'] . "\n";
                echo "<pre>";
                
            }

            echo "\n";

            // b) Print student names
            foreach ($Array['cursos'] as $curso) {
                foreach ($curso['alunos'] as $aluno) {
                    echo "<pre>";
                    echo 'Aluno: ' . $aluno['nome'] . "\n";
                    echo "<pre>";
                }
            }

            echo "\n";


            foreach ($Array['cursos'] as $curso) {
                foreach ($curso['alunos'] as $aluno) {
                    foreach ($aluno['disciplinas'] as $disciplina) {
                        echo "<pre>";
                        echo 'Disciplina: ' . $disciplina['nome'] . "\n";
                        echo "<pre>";
                    }
                }
            }

            echo "\n";


            foreach ($Array['cursos'] as $curso) {
                foreach ($curso['alunos'] as $aluno) {
                    echo "<pre>";
                    echo 'Aluno: ' . $aluno['nome'] . "\n";
                    echo "<pre>";
                }
            }
            ?>
            ?>

    <h1> ATIVIDADE-3</h1>

    
    $array = [
        'quimica'=> [ 
            'zeca'=>[
              
                'mat' => [
                    'nota1'=> 4,
                    'nota2'=> 4

                ],
                'portugues' => [
                    'nota1'=> 6,
                    'nota2'=> 6

                ]
                
                ],
           
                'Ruan'=>[
                  'mat' => [
                      'nota1'=> 9,
                      'nota2'=> 6
  
                  ],
                  'portugues' => [
                      'nota1'=> 4,
                      'nota2'=> 9
 
                  ]
                  
                  ]
             
                
            ]
                    ];

        

    foreach ($array as $keyc => $curso) {
      echo '<table>';
     

        foreach ($curso as $keya => $aluno) {
          echo '<tr><th>Materia</th><th>Aluno</th><th>Nota 1</th><th>Nota 2</th><th>Media</th><th>Resultado</th></tr>';
           foreach ($aluno as $keyd => $disciplina){
            $nota1 = $disciplina['nota1'];
            $nota2 = $disciplina['nota2'];
            $soma = ($nota1 + $nota2) / 2;
            $resultado = '';

            if ($nota1 > 5 && $nota2 > 5) {
                $resultado = ($nota1 + $nota2)/2;
                $resultado = 'Aprovado';
               
                echo '<tr><td>' .$keyd. '</td><td>' . $keya . '</td><td>' . $nota1 . '</td><td>' . $nota2 . '</td><td>' . $soma . '</td><td>' . $resultado . '</td></tr>';
            } 
            else {
              
              
              $resultado = 'Reprovado'; 
              echo '<tr><td>' .$keyd. '</td><td>' . $keya. '</td><td>' . $nota1 . '</td><td>' . $nota2 . '</td><td>' . $soma . '</td><td>' . $resultado . '</td></tr>';
          
            } } } }
           
            
    echo '</table>';
    
</body>
</html>


