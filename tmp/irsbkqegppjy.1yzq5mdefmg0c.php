<?php echo $this->render('/Views/modules/alert.html',NULL,get_defined_vars(),0); ?>

<form class="pure-form pure-form-stacked">
    <button type="submit" formaction="<?= (Base::instance()->alias('addNewStudent')) ?>" class="pure-button">Add new</button>

    <button type="submit" formaction="<?= (Base::instance()->alias('students')) ?>" class="pure-button">See all</button>

    <button type="submit" formaction="<?= (Base::instance()->alias('lessons')) ?>" class="pure-button">Go to lesson</button>
</form>