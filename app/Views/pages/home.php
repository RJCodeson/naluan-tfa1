<?= view('templates/header', ['title' => $title]) ?>

<section class="hero">
    <div class="container">
        <p class="eyebrow">Point-of-Sale Account System</p>
        <h1>People records, kept simple.</h1>
        <p class="hero-text">Welcome to SimplePOS, a basic CodeIgniter application for viewing customer and staff account information.</p>
        <div class="actions">
            <a class="button" href="<?= base_url('customers') ?>">View customers</a>
            <a class="button button-light" href="<?= base_url('users') ?>">View users</a>
        </div>
    </div>
</section>

<section class="container overview">
    <div class="section-heading">
        <p class="eyebrow">Quick access</p>
        <h2>Explore the application</h2>
    </div>
    <div class="card-grid">
        <article class="card">
            <span class="card-number">01</span>
            <h3>Customer Accounts</h3>
            <p>View customer names, email addresses, and phone numbers.</p>
            <a href="<?= base_url('customers') ?>">Open customer list &rarr;</a>
        </article>
        <article class="card">
            <span class="card-number">02</span>
            <h3>User Accounts</h3>
            <p>View staff usernames, full names, and assigned roles.</p>
            <a href="<?= base_url('users') ?>">Open user list &rarr;</a>
        </article>
        <article class="card">
            <span class="card-number">03</span>
            <h3>About the Project</h3>
            <p>Learn how routes, controllers, and views work together.</p>
            <a href="<?= base_url('about') ?>">Read about SimplePOS &rarr;</a>
        </article>
    </div>
</section>

<?= view('templates/footer') ?>
