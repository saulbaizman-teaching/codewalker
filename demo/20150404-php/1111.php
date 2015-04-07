<?php

// Form processing.
print_r ( $_POST ) ;

?>

<form id="form1" name="form1" method="post" action="1111.php">
    <p>
        <label for="name">First name</label>
        <input type="text" name="firstname" id="name" />
    </p>
    <p>
        <label for="surname">Surname</label>
        <input type="text" name="surname" id="surname" />
    </p>
    <p>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" />
    </p>
    <p>
        <label for="email">Profile photo:</label>
        <input type="file" name="photo" id="photo" />
    </p>
    <p>
        <input type="checkbox" name="abc" id="abc1" checked="checked" />
        <label for="abc1">Choice 1</label>
        <input type="checkbox" name="abc" id="abc2" />
        <label for="abc2">Choice 2</label>
        <input type="checkbox" name="abc" id="abc3" />
        <label for="abc3">Choice 3</label>
    </p>
    <p>
        <input type="submit" name="submit" id="submit" value="Submit" />
    </p>
</form>
