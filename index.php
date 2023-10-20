<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Demo</title>
    </head>
    <body>
       <?php
            // associative array
            $books = [
                [
                    "title" => "Harry Potter",
                    "author" => "J.K. Rowling",
                    "releaseYear" => 1997,
                    "price" => 200,
                    "purchaseUrl" => "https://www.amazon.com/Harry-Potter-Sorcerers-Stone-Rowling/dp/059035342X"
                ],
                [
                    "title" => "Dunes",
                    "author" => "Frank Herbert",
                    "releaseYear" => 1965,
                    "price" => 300,
                    "purchaseUrl" => "https://www.amazon.com/Dune-Frank-Herbert/dp/0441172717"
                ],
                [
                    "title" => "Star Wars",
                    "author" => "George Lucas",
                    "releaseYear" => "1977",
                    "price" => 400,
                    "purchaseUrl" => "https://www.amazon.com/Star-Wars-George-Lucas/dp/0345320225"
                ]
            ];
       ?>

       <ul>
            <?php foreach ($books as $book) :  // : is like { ?>  
                <li>
                    <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['title'] ?>(<?= $book['releaseYear'] ?>) - <?= $book['author'] ?>
                    </a>
                </li>

            <?php endforeach; ?>
       </ul>
    </body>
</html>