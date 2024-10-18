<?php

// define('NAMA', 'Raihan Nagata');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;

// class Coba
// {
//     const NAMA = 'Raihan';
// }
// echo Coba::NAMA;



// echo __FILE__;


// function coba()
// {
//     return __FUNCTION__;
// }

// echo coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
