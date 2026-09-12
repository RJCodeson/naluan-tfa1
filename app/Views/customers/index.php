<?= view('templates/header', ['title' => $title]) ?>

<section class="page-banner">
    <div class="container">
        <p class="eyebrow">Accounts directory</p>
        <h1>Customer Accounts</h1>
        <p>A list of customer records from a temporary PHP array.</p>
    </div>
</section>

<section class="container content-section">
    <div class="table-card">
        <table>
            <thead>
                <tr><th>Full Name</th><th>Email Address</th><th>Phone Number</th></tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td data-label="Full Name"><?= esc($customer['full_name']) ?></td>
                        <td data-label="Email Address"><?= esc($customer['email']) ?></td>
                        <td data-label="Phone Number"><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<?= view('templates/footer') ?>
