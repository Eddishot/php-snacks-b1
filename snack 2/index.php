<?php
/*
Snack 2
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
 Stampare ogni data con i relativi post.

*/
                         
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$chiaviPosts = array_keys($posts);
// ciclo for vedere le chiavi dell`Array
for ($i=0; $i <count($chiaviPosts) ; $i++) { 
    $chiave = $chiaviPosts[$i];
    $singlePost = $posts[$chiave] ;
    var_dump($singlePost);

// adesso invece un ciclo per vedere i valori delle chiavi 

    for ($j=0; $j < count($singlePost) ; $j++) { 
        $singlePost = $singlePost[$j];
        $title = $singlePost[ $title];
        $author = $singlePost[$author];
        $text = $singlePost[$author];
    };

}

?>