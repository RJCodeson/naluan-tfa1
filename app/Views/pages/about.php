<?= view('templates/header', ['title' => $title]) ?>

<section class="page-banner">
    <div class="container">
        <p class="eyebrow">About the project</p>
        <h1>A first CodeIgniter application</h1>
        <p>This four-page website demonstrates the basic MVC request-response flow.</p>
    </div>
</section>

<section class="container content-section">
    <div class="about-grid">
        <div>
            <h2>What is SimplePOS?</h2>
            <p>SimplePOS is the starting version of a Point-of-Sale system. It displays customer and user accounts without using a database. For now, its sample records are stored in PHP arrays inside the controllers.</p>
            <p>This keeps the project focused on the CodeIgniter foundations covered in Module 1: routes, controllers, views, and passing data to a page.</p>
        </div>
        <aside class="flow-box">
            <h2>Basic MVC flow</h2>
            <ol>
                <li><strong>Route</strong> receives the requested URL.</li>
                <li><strong>Controller</strong> prepares the page data.</li>
                <li><strong>View</strong> displays the HTML in the browser.</li>
            </ol>
        </aside>
    </div>
</section>

<?= view('templates/footer') ?>
