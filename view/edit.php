<?php if ($model): ?>

    <form method="POST" action="?action=save&id=<?= $model->getId() ?>">
        <input type="text" name="name" value="<?= $model->getName() ?>"/>
        <input type="text" name="surname" value="<?= $model->getSurname() ?>"/>
        <input type="text" name="sex" value="<?= $model->getSex() ?>"/>
        <input type="text" name="date_of_birth" placeholder="may be validate it?"
               value="<?= $model->getDateOfBirth() ?>"/>
        <input type="text" name="city" value="<?= $model->getCity() ?>"/>
        <input type="submit" value="Save"/>
    </form>
<?php else: ?>
    <p>Object not found</p>
<?php endif ?>
