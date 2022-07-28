<form method="POST" action="?action=new">
    <input type="text" name="name" value=""/>
    <input type="text" name="surname" value=""/>
    <input type="text" name="sex" value=""/>
    <input type="text" name="date_of_birth" placeholder="may be validate it?" value=""/>
    <input type="text" name="city" value=""/>
    <input type="submit" value="create" name="create"/>
</form>
<?php
if ($result):?>
    <p>Saved</p>
<?php endif;?>