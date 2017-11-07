<?php

$word = "horse";
print_r(searchAnagram($word));
function searchAnagram($word) {
    $anagrams = []; 
    $sortWord = sortWord($word);
    $file = file('words.txt'); //чтение файла в массив
    for ($i = 0; $i < count($file); $i++) {
        $fileWord = $file[$i];
        $sortFileWord = sortWord($fileWord); 
        
        if ($sortWord === $sortFileWord) {
            $anagrams[] = $fileWord;
        }
    }
    return $anagrams;
}

function sortWord($word) { 
    $trimWord = trim($word); 
    $splitWord = str_split($trimWord); 
    sort($splitWord); 
    return implode($splitWord); 
}
