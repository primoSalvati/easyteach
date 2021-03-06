<form action="" method="post" class="pure-form pure-form-stacked formatted-form">
    <input type="hidden" name="event_types_id" value="1">
    <!-- the ternary operators below (if/else statements) are meant to receive the data in the form in case of unsuccessfull validation -->
    <!-- i named this field also students_id, please check if it makes collisions with the field below -->
    <input type="hidden" name="students_id" value="<?= ((empty($values['id'])) ? ($values['students_id']) : ($values['id'])) ?>">
    
        
            
                 <label for="students_id">Student</label>
<!-- again, the || in the ternary operator below is there because, in case of lesson edit, the id has the key name "students_id", in case of new lesson, the id key has the name "id" -->
                     
                    <select name="students_id">
                        <?php foreach (($student_list?:[]) as $student): ?>
                            <option value="<?= ($student['id']) ?>"
                                          <?= (($student['id'] == $values['students_id'] || $student['id'] == $values['id']) ? ('selected') : ('')) ?>>
                                          <?= ($student['name']) ?> <?= ($student['surname'])."
" ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

            
        
                <label for="instrument">Instrument</label>
                <input type="hidden" name="instrument" value="<?= ($values['instrument']) ?>">
                <input name="instrument" value="<?= ($values['instrument']) ?>" readonly></input>

                
                <!--All this if i want to change the instrument, for now i don't need it and i will automatically have the assigned instrument
                                     
                    <select name="instrument"> -->
        <!-- since, after the validation, the value instruments_id was appearing with another key name (instrument) i made the OR statement, i could also have changed the name attribute of the select tag above, but the i would need to check in the SQL statements...-->
        <!-- ACHTUNG: if the instrument is empty, it will not be selected, but if i put the empty value as the first option, and there's no other selected values, this empty will be the shown one...it is a trick, and it is working also on studentForm, as well as here below in lesson length -->
<!--                 <option value="">---</option>
                      <?php foreach (($instruments?:[]) as $instrument): ?>
                         <option value="<?= ($instrument['id']) ?>"
                           <?= (($instrument['id'] == $values['instruments_id'] || $instrument['id'] == $values['instrument']) ? ('selected') : ('')) ?>>
                              <?= ($instrument['type'])."
" ?>
                         </option>
                      <?php endforeach; ?>
                      
                   </select>
                 -->
        



            
                <label for="date">Date</label>
                
                    <?php if ($errors['date']): ?>
                        <div class="field-error"><?= ($errors['date']) ?></div>
                    <?php endif; ?>
                    <!-- meaning of the ternary operators below, in case of a new lesson i will automatically receive the current date and time, in case of edit, this and other values below will be in the array $values, sometime with another name -->
                    <input type="date" name="date" id="date" value="<?= ((empty($values['date'])) ? ($currentDate) : ($values['date'])) ?>">
                
            

            
                <label for="time">Time</label>
                
                    <?php if ($errors['time']): ?>
                        <div class="field-error"><?= ($errors['time']) ?></div>
                    <?php endif; ?>
                    <input type="time" name="time" id="lessonTime"
                        value="<?= ((empty($currentTime)) ? ($values['time']) : ($currentTime)) ?>">
                
            
            
<!--                 <input type="hidden" name="length" value="<?= ((empty($values['length'])) ? ($values['lesson_length']) : ($values['length'])) ?>"> -->
                
                <label for="lesson_length">Lesson Length</label>
                <input type="text" name="length" value="<?= ($values['length']) ?>" readonly>
            
<!--                       <select name="lesson_length" id="lesson_length">
                        <option value="">---</option>
                               <?php foreach (($lesson_length?:[]) as $length): ?>
                                   <option value="<?= ($length['id']) ?>" <?= (($length['id'] == $values['lesson_length_id'] || $length['id'] == $values['lesson_length']) ? ('selected') : ('')) ?>>
                                   <?= ($length['length'])."
" ?>
                                   </option>
                               <?php endforeach; ?>
                      </select>  -->
               
            
            
                <label for="earning">Earning - Euro</label>
                
                    
                        <?php if ($errors['earning']): ?>
                            <div class="field-error"><?= ($errors['earning']) ?></div>
                        <?php endif; ?>
                        <input type="text" name="earning" id="lessonEarning"
                            value="<?= ((empty($values['student_price'])) ? ($values['earning']) : ($values['student_price'])) ?>">
                    
                
            
            
                <label for="address">Place</label>
                <?php if ($errors['address']): ?>
                    <div class="field-error"><?= ($errors['address']) ?></div>
                <?php endif; ?>
                <input type="text" name="address" id="lessonAddress"
                        value="<?= ((empty($values['source'])) ? ($values['address']) : ($values['source'])) ?>">
            
            
                <label for="notes">Notes</label>
                
                    <?php if ($errors['notes']): ?>
                        <div class="field-error"><?= ($errors['notes']) ?></div>
                    <?php endif; ?>
                    <textarea name="notes" id="lessonNotes" cols="30" rows="5"><?= ($values['notes']) ?></textarea>
                
            
           <!--   
                               <strong>Files</strong>
                
                    <input type="file" name="lessonFiles" id="lessonFiles">
                
            
            
                <strong>Links</strong>
                
                    <input type="url" name="lessonLinks" id="lessonLinks">
                
             -->

    <!--     <label for="email">E-Mail</label>
    <input type="email" name="email" id="email" value="<?= ($values['email']) ?>">

    <label for="telephone">Phone</label>
    <input type="tel" name="telephone" id="telephone" value="<?= ($values['phone']) ?>"> -->


    <p><input type="submit" value="Save" class="pure-button"></p>

</form>