<?php
include '../includes/header.php';
include '../data/routine.php';

?>

<main>
    <section class="routine-section">
        <h2>Daily Schedule of Nyanduva Gustavu</h2>
        <table class="routine-table">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Activity</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($routine as $entry): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($entry['time']); ?></td>
                        <td><?php echo htmlspecialchars($entry['activity']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <section class="contact-section">
        <h2>Contact</h2>
        <ul class="contact-list">
            <li><strong>Phone:</strong> 0749383799</li>
            <li><strong>Email:</strong> azrieljackson14@gmail.com</li>
            <li><strong>Address:</strong> Arusha</li>
        </ul>
    </section>
</main>

<?php
include '../includes/footer.php';
?>