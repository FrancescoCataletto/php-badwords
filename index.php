<?php 

$text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, tempore. Eveniet libero repellendus, alias voluptatibus quis numquam ex porro! Harum sint vero similique ducimus iure incidunt sequi consequatur reprehenderit voluptatum eligendi perferendis autem sunt, eius cupiditate deleniti, rem consectetur, dicta corporis. Veniam iste saepe, cumque ipsa odio beatae in consequuntur alias officiis suscipit eius cupiditate nulla rerum praesentium laboriosam quo, architecto ducimus asperiores. Harum laborum, amet aspernatur corporis libero debitis, inventore reiciendis minima eos voluptatum veniam quod. Consequatur eveniet fuga, numquam neque, minus est consequuntur autem omnis earum modi quasi similique architecto esse cumque cum libero. Non magni culpa quaerat voluptates ratione, maxime excepturi nisi laboriosam, repellat sed quibusdam voluptate, id pariatur fugit. Velit facilis atque nostrum est vel nesciunt, et commodi, consequatur veritatis illo excepturi maxime aperiam rerum autem? Eligendi magnam voluptatem aliquam adipisci porro. Ullam doloribus quod iure eum tempore natus pariatur quibusdam, praesentium doloremque repellendus error voluptas voluptatibus nemo eius officiis aperiam voluptatum eaque sunt et libero ut. Cupiditate dicta aliquid suscipit voluptate officia unde asperiores nam, molestias odio ipsam, cum consequuntur saepe vel, aut minus. Officiis quidem dolores, veritatis consectetur cumque ullam culpa nihil atque quaerat nesciunt, quibusdam animi consequatur sit iusto architecto labore beatae assumenda rerum provident officia blanditiis. Adipisci itaque rem numquam beatae esse, quos commodi at expedita consequuntur quisquam explicabo dicta ab laudantium incidunt nisi? Magni fugit tenetur accusamus consequatur tempora animi, nihil distinctio ipsam alias. Corrupti veritatis ullam ipsum beatae dolores neque cumque accusantium nihil quasi, voluptatem aperiam aliquam ducimus. Pariatur ipsa esse quas vero doloribus ipsam natus veniam laudantium fugiat voluptatibus molestiae consectetur, tempore modi debitis labore. Est, ullam dolore veniam esse maxime quas, deserunt tempora ea totam rem, aspernatur provident? Consequatur quaerat aliquam asperiores quia, unde deserunt vel, dolor dolore at laboriosam, nam delectus maxime id qui minus soluta error.";

$censoredParagraph = str_ireplace($_GET["badword"], "***", $text); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords php</title>
</head>
<body>
    <h3><?php echo $text ?></h3>
    <p>Il paragrafo è lungo <?php echo strlen($text)?> caratteri </p>
    
    <p>Il paragrafo con le parole censorate è: <?php echo $censoredParagraph?></p>
    <p>Il paragrafo con le parole censorate è lungo: <?php echo strlen($censoredParagraph) ?> caratteri</p>
</body>
</html>

