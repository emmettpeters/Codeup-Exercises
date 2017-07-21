<?php 

$books = array(
    'The Hobbit' => 
        array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ),
     'Lord of the Rings' => array(
        'published' => 1968,
        'author' => 'J. R. R. Tolkien',
        'pages' => 1178
    )
);

//completed and Bonuses

foreach ($books as $key => $book){
    if ($book["published"] > 1950 && $book["pages"] < 300){
        echo "$key\n";
        foreach($book as $key2 => $value){
                echo "$key2 === $value\n";  
        }
    }
}

$pages=0;
$yearTot=0;

foreach ($books as $key => $book){
    $pages = $pages + ((int)$book["pages"]);
    $yearTot = $yearTot + ((int)$book["published"]);  
}

echo "Average Page count is => " . ($pages/count($books)) . PHP_EOL;
echo "Average Year of Publishing is => " . ($yearTot/count($books)) . PHP_EOL;
