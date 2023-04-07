<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/navbar.php') ?>

<main>

<form class="mt-8 space-y-6" action="/reset/password" method="POST">
              
<div>
    <table>
                
<h1>password successfully changed <br> new password :<?= $currentEmail ?></h1>
<a href="/login">go back</a>
    </table>
</div>

            </form>

</main>

<?php require base_path('views/partials/footer.php') ?>