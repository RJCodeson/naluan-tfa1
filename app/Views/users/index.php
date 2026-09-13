<?= view('templates/header', ['title' => $title]) ?>

<section class="page-banner">
    <div class="container">
        <p class="eyebrow">Staff directory</p>
        <h1>User Accounts</h1>
        <p>A list of user and staff records from a temporary PHP array.</p>
    </div>
</section>

<section class="container content-section">
    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td data-label="Username"><?= esc($user['username']) ?></td>
                        <td data-label="Full Name"><?= esc($user['full_name']) ?></td>
                        <td data-label="Created At"><?= esc($user['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= view('templates/footer') ?>
