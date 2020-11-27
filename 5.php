<?php
$data = date('D');
$mes = date('M');
$dia = date('d');
$semana = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terca-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado'
);

$mes_extenso = array(
    'Jan' => 'Janeiro',
    'Feb' => 'Fevereiro',
    'Mar' => 'Marco',
    'Apr' => 'Abril',
    'May' => 'Maio',
    'Jun' => 'Junho',
    'Jul' => 'Julho',
    'Aug' => 'Agosto',
    'Nov' => 'Setembro',
    'Sep' => 'Outubro',
    'Oct' => 'Novembro',
    'Dec' => 'Dezembro'
);

echo $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"];
?>