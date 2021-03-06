<form  class="pure-form" method="post">

    <h2>You Earned</h2>
    <!-- display the earning -->
    <h3><input type="text" class="display" id="display" value="<?= (empty($sum) ? 0 : $sum) ?> Euro" readonly></h3>

    <h3>Filter Options</h3>
    <div>
        <fieldset>

            <legend><strong>Earnings from Lessons</strong></legend>
            <label for="singleSelect">Activate</label>
            <input type="radio" name="singleSelect" value="sourceType"
                <?= (($singleSelect == "sourceType") ? ('checked') : ('')) ?>>

            <label for="studentSourceId">Source</label>
            <select name="studentSourceId">
                <option value="">All Sources</option>
                <?php foreach (($student_sources?:[]) as $student_source): ?>
                    <!-- the ternary operat below is meant to keep the selected value after the filtering -->
                    <option value="<?= ($student_source['id']) ?>"
                        <?= (($student_source['id'] == $selected_source) ? ('selected') : ('')) ?>>
                        <?= ($student_source['source'])."
" ?>
                    </option>
                <?php endforeach; ?>
            </select>

        </fieldset>
        <fieldset>

            <legend><strong>Earnings from Gigs</strong></legend>
            <label for="singleSelect">Activate</label>
            <input type="radio" name="singleSelect" value="gigType"
                <?= (($singleSelect == "gigType") ? ('checked') : ('')) ?>>


            <label for="eventTypeId">Source</label>
            <select name="eventTypeId">
                <option value="">All Types of Gig</option>
                <?php foreach (($event_types?:[]) as $eventType): ?>
                    <!-- the ternary operat below is meant to keep the selected value after the filtering -->
                    <option value="<?= ($eventType['id']) ?>"
                        <?= (($eventType['id'] == $selected_eventType) ? ('selected') : ('')) ?>>
                        <?= ($eventType['type'])."
" ?>
                    </option>
                <?php endforeach; ?>
            </select>

        </fieldset>

        <label for="startDate">From date</label>
        <input type="date" name="startDate" value="<?= ($startDate) ?>">
        <label for="endDate">To date</label>
        <input type="date" name="endDate" value="<?= ($endDate) ?>">

        <p><button type="submit" class="pure-button">GO</button></p>

    </div>





    <!-- TODO: inserire select by date! -->


</form>