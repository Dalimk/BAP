<form method="post">
    <label>Voer een fruit in:</label>
    <input type="text" name="fruit">
    <input type="submit" name="submit" value="Go!">
</form>

<?php
    $fruit = $_POST['fruit'];

    switch ($fruit){
        case 'apple':
            echo 'Fruit is apple';
            echo "<img src=\"https://www.organicfacts.net/wp-content/uploads/2013/05/Apple4.jpg\" width=\"480px\" height=\"480px\">";
            break;
        case 'pear':
            echo 'Fruit is pear';
            echo "<img src=\"http://mariesveg.com/image/cache/pear2-800x800.jpg\" width=\"480px\" height=\"480px\">";
            break;
        case 'orange':
            echo 'Fruit is orange';
            echo "<img src=\"http://media.buzzle.com/media/images-en/gallery/fruits/oranges/450-187108077-orange-fruit.jpg\" width=\"480px\" height=\"480px\">";
            break;
        default:
            echo 'I don\'t know what fruit that is';
            echo "<img src=\"https://image.freepik.com/iconen-gratis/vraagteken_318-52837.jpg\" width=\"480px\" height=\"480px\">";
    }
    ?>