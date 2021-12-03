<?php
$faq = [
     [
         'Domanda' => "Come state implementando la recente decisione della Corte di giustizia dell Unione europea (CGUE) relativa al diritto all oblio?",
         'Risposta' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ratione doloremque accusamus, veniam minima cum quos deleniti iure debitis ullam ab hic itaque consequatur iusto dignissimos molestias incidunt! Vel excepturi at suscipit laborum! Dolor veritatis voluptatibus nihil a labore, ipsam velit laborum consequuntur officia nesciunt laboriosam sapiente. Quos omnis iure commodi, dolorem dolores, dignissimos quod perferendis temporibus tempora facilis repellendus, magnam ipsum eos saepe esse debitis necessitatibus quis accusamus incidunt enim eius? Cum, vero, officiis alias ad fugit quos sunt nihil officia reiciendis fuga dolorem velit minus. Cumque iure blanditiis pariatur assumenda porro rerum natus nostrum sed vel, animi qui!"
     ],
     [
         'Domanda' => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
         'Risposta' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ratione doloremque accusamus, veniam minima cum quos deleniti iure debitis ullam ab hic itaque consequatur iusto dignissimos molestias incidunt! Vel excepturi at suscipit laborum! Dolor veritatis voluptatibus nihil a labore, ipsam velit laborum consequuntur officia nesciunt laboriosam sapiente. Quos omnis iure commodi, dolorem dolores, dignissimos quod perferendis temporibus tempora facilis repellendus, magnam ipsum eos saepe esse debitis necessitatibus quis accusamus incidunt enim eius? Cum, vero, officiis alias ad fugit quos sunt nihil officia reiciendis fuga dolorem velit minus. Cumque iure blanditiis pariatur assumenda porro rerum natus nostrum sed vel, animi qui!"
     ],
     [
         'Domanda' => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
         'Risposta' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ratione doloremque accusamus, veniam minima cum quos deleniti iure debitis ullam ab hic itaque consequatur iusto dignissimos molestias incidunt! Vel excepturi at suscipit laborum! Dolor veritatis voluptatibus nihil a labore, ipsam velit laborum consequuntur officia nesciunt laboriosam sapiente. Quos omnis iure commodi, dolorem dolores, dignissimos quod perferendis temporibus tempora facilis repellendus, magnam ipsum eos saepe esse debitis necessitatibus quis accusamus incidunt enim eius? Cum, vero, officiis alias ad fugit quos sunt nihil officia reiciendis fuga dolorem velit minus. Cumque iure blanditiis pariatur assumenda porro rerum natus nostrum sed vel, animi qui!"
     ],
     [
         'Domanda' => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
         'Risposta' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ratione doloremque accusamus, veniam minima cum quos deleniti iure debitis ullam ab hic itaque consequatur iusto dignissimos molestias incidunt! Vel excepturi at suscipit laborum! Dolor veritatis voluptatibus nihil a labore, ipsam velit laborum consequuntur officia nesciunt laboriosam sapiente. Quos omnis iure commodi, dolorem dolores, dignissimos quod perferendis temporibus tempora facilis repellendus, magnam ipsum eos saepe esse debitis necessitatibus quis accusamus incidunt enim eius? Cum, vero, officiis alias ad fugit quos sunt nihil officia reiciendis fuga dolorem velit minus. Cumque iure blanditiis pariatur assumenda porro rerum natus nostrum sed vel, animi qui!"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google faq</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing:border-box;
        }
        body{
            font-family: 'Roboto', sans-serif;
        }
        img{
            vertical-align:middle;
        }
        span{
            vertical-align:middle;
            font-size:25px;
        }
        .flex{
            display:flex;
            flex-direction:row
        }
        ul, hr{
            margin:0;
        }
        li{
            list-style:none;
            padding:0 1rem 4rem 1rem;
        }
        li:last-child{
            color:#377dff;
            border-bottom:5px solid #377DFF;
        }
        main{
            width:60%;
            margin:auto;
        }
    </style>
</head>
<body>
    <header>
<img src="./img/Google-Logo.png" alt="Google" style="height:100px;"><span>Privacy e Termini</span>
<ul class="flex">
    <li>Introduzione</li>
    <li>Norme sulle privacy</li>
    <li>Termini di servizio</li>
    <li>Tecnologie</li>
    <li>Domande Frequenti</li>
</ul>
    </header>
    <hr>
    <br>
    <main>
        <?php 
        for ($i=0; $i <count($faq) ; $i++) {?>
        <section>
            <h1><?= $faq[$i]['Domanda'];?></h1>
            <br>
            <p><?= $faq[$i]['Risposta'];?></p>
            <br>
        </section>
        <?php 
        };
        ?>
    </main>
</body>
</html>


