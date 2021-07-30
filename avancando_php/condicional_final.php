<?php


$media = 7;
$mediaRecuperacao = 5;
$frequencia =70;

$frequenciaAluno =  70;
$mediaAluno = 3;

$reprovadoPorFaltas= $frequenciaAluno < $frequencia ? true : false;

if (!$reprovadoPorFaltas) {
  
    if ($mediaAluno < $mediaRecuperacao) {
        echo "Reprovado!";
    } elseif ($mediaAluno < $media) {
        echo "Recuperação!";
    } else {
        echo "Aprovado!";
    }

} else {
    echo "Reprovado por faltas";
};


/* 
if ($frequenciaAluno < $frequencia) {
    echo "Reprovado por falta de frequência";
}elseif ($mediaAluno >= $media && $frequenciaAluno >= $frequencia) {
    echo "Aprovado";
}elseif ($mediaAluno <= $mediaRecuperacao || $mediaAluno <= $media && $frequenciaAluno >= $frequencia) {
    echo "Recuperação";
}else {
    echo "Reprovado";
};
*/








