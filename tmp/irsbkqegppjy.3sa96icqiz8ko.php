<div>
    <button class="pure-button" onclick="openTab('instruments')">Instruments</button>
    <button class="pure-button" onclick="openTab('event_types')">Gig Types</button>
    <button class="pure-button" onclick="openTab('student_sources')">Student Sources</button>
    <button class="pure-button" onclick="openTab('lesson_length')">Lesson Length</button>
    <button class="pure-button" onclick="openTab('student_regularity')">Student Regularity</button>
</div>

<div id="instruments" class="settingsTabs" style="display:<?= ($activeTab == 'instruments' ? 'block' : 'none') ?>">
    <h3>Insert the instrument(s) you teach</h3>
    <div class="form-inline">
        <!-- i need to put the current url of the POST route in the action, a different value for every tab of the page: here action="/settings/instruments" -->
        <form action="/settings" method="post" class="pure-form pure-form-stacked">
            <?php if ($errors['instrument']): ?>
                <div class="field-error"><?= ($errors['instrument']) ?></div>
            <?php endif; ?>
            <input type="text" name="instrument">

            <input type="submit" class="pure-button inline-button" value="Save">
        </form>
    </div>

<br>


    <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Your instruments</th>
                <!-- <th>Edit</th> -->
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (($instruments?:[]) as $inst): ?>
                <tr>
 <!--                    <form method="POST"></form> -->
                        <td><?= ($inst['type']) ?></td>

<!--                         <td>
                            <input type="submit" class="pure-button" value="Edit"
                                formaction="/settings/<?= ($inst['id']) ?>/edit">
                        </td>
                    </form> -->
                    <td><button class="pure-button btn-delete"
                            data-url="/settings/deleteInst/<?= ($inst['id']) ?>">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>








<!-- <div id="event_types" class="settingsTabs" style="display:none"> -->
    <div id="event_types" class="settingsTabs" style="display:<?= ($activeTab == 'event_types' ? 'block' : 'none') ?>">
    <h3>Insert the gig types you can have</h3>
    <div class="form-inline">
        <form action="/settings/eventTypes" method="post" class="pure-form pure-form-stacked">
            <?php if ($errors['event_types']): ?>
                <div class="field-error"><?= ($errors['event_types']) ?></div>
            <?php endif; ?>
            <input type="text" name="event_types">

            <input type="submit" class="pure-button inline-button" value="Save">
        </form>
    </div>

<br>


    <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Your gig types</th>
                <!-- <th>Edit</th> -->
                <th>Delete</th>
            </tr>
        </thead>
    
        <tbody>
            <?php foreach (($event_types?:[]) as $event): ?>
                <tr>
                    <!-- <form method="POST"> -->
                        <td><?= ($event['type']) ?></td>

<!--                         <td><input type="submit" class="pure-button" value="Edit"
                                formaction="/settings/<?= ($event['id']) ?>/edit"></td> -->
                    <!-- </form> -->
                    <td><button class="pure-button btn-delete"
                            data-url="/settings/deleteEvType/<?= ($event['id']) ?>">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>

</div>



<div id="student_sources" class="settingsTabs" style="display:<?= ($activeTab === 'student_sources' ? 'block' : 'none') ?>">
    <h3>Insert the sources of your students (private, different schools...)</h3>
    <div class="form-inline">
        <form action="/settings/studentSources" method="post" class="pure-form pure-form-stacked">
            <?php if ($errors['student_sources']): ?>
                <div class="field-error"><?= ($errors['student_sources']) ?></div>
            <?php endif; ?>
            <input type="text" name="student_sources">

            <input type="submit" class="pure-button inline-button" value="Save">
        </form>
    </div>


<br>

    <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Your Student Sources</th>
                <!-- <th>Edit</th> -->
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (($student_sources?:[]) as $val): ?>
                <tr>
 <!--                    <form method="POST"></form> -->
                        <td><?= ($val['source']) ?></td>

<!--                         <td>
                            <input type="submit" class="pure-button" value="Edit"
                                formaction="/settings/<?= ($inst['id']) ?>/edit">
                        </td>
                    </form> -->
                    <td><button class="pure-button btn-delete"
                            data-url="/settings/deleteSource/<?= ($val['id']) ?>">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>

</div>



<div id="lesson_length" class="settingsTabs" style="display:<?= ($activeTab === 'lesson_length' ? 'block' : 'none') ?>">
    <h3>Lesson Lengths</h3>
    <div class="form-inline">
        <form action="/settings/lessonLength" method="post" class="pure-form pure-form-stacked">
            <?php if ($errors['lesson_length']): ?>
                <div class="field-error"><?= ($errors['lesson_length']) ?></div>
            <?php endif; ?>
            <input type="text" name="lesson_length">

            <input type="submit" class="pure-button inline-button" value="Save">
        </form>
    </div>


<br>

    <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Your Lesson Lengths</th>
                <!-- <th>Edit</th> -->
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (($lesson_length?:[]) as $length): ?>
                <tr>
<!--                     <form method="POST"> -->
                        <td><?= ($length['length']) ?></td>

<!--                         <td><input type="submit" class="pure-button" value="Edit"
                                formaction="/settings/<?= ($length['id']) ?>/edit"></td>
                    </form> -->
                    <td>
                        <button class="pure-button btn-delete"
                            data-url="/settings/deleteLessLength/<?= ($length['id']) ?>">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>

</div>


<div id="student_regularity" class="settingsTabs" style="display:<?= ($activeTab === 'student_regularity' ? 'block' : 'none') ?>">
    <h3>Insert the regularity of your students (once a week, one time, every two weeks...)</h3>
    <div class="form-inline">
        <form action="/settings/studentRegularity" method="post" class="pure-form pure-form-stacked">
            <?php if ($errors['student_regularity']): ?>
                <div class="field-error"><?= ($errors['student_regularity']) ?></div>
            <?php endif; ?>
            <input type="text" name="student_regularity">

            <input type="submit" class="pure-button inline-button" value="Save">
        </form>
    </div>


   <br>

    <table class="pure-table pure-table-bordered">
        <thead>
            <tr>
                <th>Your Student Regularities</th>
                <!-- <th>Edit</th> -->
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (($student_regularity?:[]) as $regularity): ?>
                <tr>
                    <!-- <form method="POST"> -->
                        <td><?= ($regularity['type']) ?></td>
<!-- 
                        <td><input type="submit" class="pure-button" value="Edit"
                                formaction="/settings/<?= ($regularity['id']) ?>/edit"></td>
                    </form> -->
                    <td><button class="pure-button btn-delete"
                            data-url="/settings/deleteRegul/<?= ($regularity['id']) ?>">Delete</button>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>

</div>