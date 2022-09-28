<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Baby shark</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <main>
            <h1>Baby shark</h1>
            <div class="lyrics">
                <?php
                $family = ['baby', 'mommy', 'daddy', 'grandma', 'grandpa'];

                foreach ($family as $memberName) { ?>
                    <div class="verse member-<?= $memberName ?>">

                        <?php
                        for ($nbSentence = 1; $nbSentence < 4; $nbSentence++) {
                            for ($nbWord = 1; $nbWord < 7; $nbWord++) {
                                $word = ' doo';
                            }
                            $word = str_repeat($word, $nbWord);
                            $sentence = $memberName . " shark"; ?>
                            <p><?= $sentence . $word ?></p>
                        <?php
                        }
                        ?>

                        <p><?= $sentence . " !" ?></p>
                    </div>

                <?php
                }
                ?>

            </div>
        </main>
    </body>
</html>