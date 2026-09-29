
<style>
    h1 {
        color: blue;
        text-align: center;
        
    }
    h2{
        color: green;
    }
</style>

    <?php
    $headline = "Jamhuriya University of Science and Technology";
    $subheadline1 = " About information ";
    $paragraph1 = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque eius unde culpa ipsum fugiat, temporibus debitis modi sit deserunt perferendis, voluptatem ducimus odio soluta veniam quaerat quo error praesentium est?";
    $subheadline2 = "Contact information";
    $Email = "info@just.edu.so";
    $phone = "+252 61 1234567";
    $Address = "Digfeeer st , Mogadishu, Somalia";
    $website = "<a href='http://www.just.edu.so' target='_blank'>Visit Website</a>";

    echo "<h1>" . $headline . "</h1>";
    echo "<h2>" . $subheadline1 . "</h2>";
    echo "<h4>" . $paragraph1 . "</h4>";
    echo "<h2>" . $subheadline2 . "</h2>";
    echo "<p>Email: " . $Email . "</p>";
    echo "<p>Phone: " . $phone . "</p>";
    echo "<p>Address: " . $Address . "</p>";
    echo "<p>Website: " . $website . "</p>";

    ?>
