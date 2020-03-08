<?php echo $this->render('/Views/modules/alert.html',NULL,get_defined_vars(),0); ?>
<!--TODO: The mobile version should have only placeholders and no labels -->
<form action="" method="post" class="pure-form pure-form-stacked">

    <table class="pure-table pure-table-bordered">
        <tr>
            <td><strong>Name</strong></td>
            <td>
                <?php if ($errors['name']): ?>
                    <div class="field-error"><?= ($errors['name']) ?></div>
                <?php endif; ?>
                <input type="text" name="name" id="name" value="<?= ($values['name']) ?>">
            </td>
        </tr>

        <tr>
            <td><strong>Surame</strong></td>
            <td>
                <?php if ($errors['surname']): ?>
                    <div class="field-error"><?= ($errors['surname']) ?></div>
                <?php endif; ?>
                <input type="text" name="surname" id="surname" value="<?= ($values['surname']) ?>">
            </td>
        </tr>



        <tr>
            <td><strong>Email</strong></td>
            <td>
                <?php if ($errors['email']): ?>
                    <div class="field-error"><?= ($errors['email']) ?></div>
                <?php endif; ?>
                <input type="email" name="email" id="email" value="<?= ($values['email']) ?>">
            </td>
        </tr>



        <tr>
            <td><strong>Phone</strong></td>
            <td>
                <?php if ($errors['phone']): ?>
                    <div class="field-error"><?= ($errors['phone']) ?></div>
                <?php endif; ?>
                <input type="tel" name="phone" id="phone" value="<?= ($values['phone']) ?>">
            </td>
        </tr>


        <tr>
            <td><strong>Date of Birth</strong></td>
            <td>
                <?php if ($errors['date_of_birth']): ?>
                    <div class="field-error"><?= ($errors['date_of_birth']) ?></div>
                <?php endif; ?>
                <input type="date" name="date_of_birth" id="date_of_birth" value="<?= ($values['date_of_birth']) ?>">
            </td>
        </tr>


        <tr>
            <td><strong>Price</strong></td>
            <td>
                <?php if ($errors['student_price']): ?>
                    <div class="field-error"><?= ($errors['student_price']) ?></div>
                <?php endif; ?>
                <input type="number" min="1" step="any" name="student_price" id="student_price"
                    value="<?= ($values['student_price']) ?>">
            </td>
        </tr>



        <tr>
            <td><strong>Source</strong></td>
            <td>
                <select name="student_source" id="student_source">
                    <!-- with this option, i send an empty value, which will be transformed in NULL by the funtion valOrNUll() in Model (the same for alle select boxes below and in student form) -->
                    <option value="">---</option>
                    <!-- below is a ternary operator, as an alternative to if/else statement, in order to receive the selected values in the selected boxes(used in all select boxes below). (Condition) ? (Statement1) : (Statement2); anyway below, only for student_sources, Thomas showed me the fat-free alternative-->
                    <?php foreach (($student_sources?:[]) as $student_source): ?>
                        <?php if ($student_source['id'] == $values['student_sources_id'] || $student_source['id'] == $values['student_source']): ?>
                            
                                <option value="<?= ($student_source['id']) ?>" selected>
                                    <?= ($student_source['source'])."
" ?>
                                </option>
                            
                            <?php else: ?>
                                <option value="<?= ($student_source['id']) ?>">
                                    <?= ($student_source['source'])."
" ?>
                                </option>
                            
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>


        <tr>
            <td><strong>Instrument</strong></td>

            <td>
                <select name="instrument" id="instrument">
                    <option value="">---</option>
                    <!-- since, after the validation, the value instruments_id was appearing with another key name (instrument) i made the OR statement, i could also have changed the name attribute of the select tag above, but the i would need to check in the SQL statements...-->

                    <?php foreach (($instruments?:[]) as $instrument): ?>
                        <option value="<?= ($instrument['id']) ?>"
                            <?= (($instrument['id'] == $values['instruments_id'] || $instrument['id'] == $values['instrument']) ? ('selected') : ('')) ?>>
                            <?= ($instrument['type'])."
" ?>
                        </option>

                    <?php endforeach; ?>
                </select>
            </td>
        </tr>

        <td><strong>Lesson Length</strong></td>

        <td>
            <select name="lesson_length" id="lesson_length">

                <option value="">---</option>
                <?php foreach (($lesson_length?:[]) as $length): ?>
                    <option value="<?= ($length['id']) ?>"
                        <?= (($length['id'] == $values['lesson_length_id'] || $length['id'] == $values['lesson_length']) ? ('selected') : ('')) ?>>
                        <?= ($length['length']) ?></option>
                <?php endforeach; ?>
            </select>
            <!-- <a href="/insertLessonLength">Other (insert a lesson length)</a> -->
        </td>
        <tr>
            <td><strong>Regularity</strong></td>

            <td>
                <select name="student_regularity" id="student_regularity">
                    <option value="">---</option>
                    <?php foreach (($student_regularity?:[]) as $regularity): ?>
                        <option value="<?= ($regularity['id']) ?>"
                            <?= (($regularity['id'] == $values['student_regularity_id'] || $regularity['id'] == $values['student_regularity']) ? ('selected') : ('')) ?>>
                            <?= ($regularity['type'])."
" ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>



    </table>

    <p><input type="submit" value="Save" class="pure-button"></p>

</form>