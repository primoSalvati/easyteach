<table class="pure-table pure-table-bordered">
    <h3>Select a student for this lesson</h3>
    <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Details</th>
            <th>Select for a Lesson</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach (($students?:[]) as $row): ?>
            <tr>
                <td><?= ($row['name']) ?></td>
                <td><?= ($row['surname']) ?></td>

                <!-- TODO: nel cliccare i dettagli qui, invece di andare alla pagina classica coi dettagli, è meglio che faccio una funzione popup javascript che mi fa vedere velocemente i dettagli, senza dover editare ecc,  alert? -->
                <td><a href="/students/<?= ($row['id']) ?>/details">Details</a></td>

                <!-- the link here should send data from the selected student in the lesson table, or i can do it with js, or directly with an sql command...?-->
                <td>
                    <form>
                        <input type="hidden" name="date"
                            value="" id="date">
                        <button type="submit" class="pure-button"
                            formaction="/lessons/seeAllStudents/<?= ($row['id']) ?>/lessonForm">
                            Select
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>




    </tbody>
</table>

<form class="pure-form pure-form-stacked">
    <p><button type="submit" formaction="<?= (Base::instance()->alias('addNewStudent')) ?>" class="pure-button">Add new student</button></p>
</form>

<script>

    document.getElementsByName('date').forEach((e)=>e.value = new
    URLSearchParams(window.location.search).get('date'));
</script>