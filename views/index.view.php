
<?php require base_path('views/partials/header.php')?>
<?php require base_path('views/partials/navbar.php')?>

<?php require base_path('views/partials/banner.php')?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      <p>Hello <?= $_SESSION['user']['email']?? 'guest' ?>.Welcome to my Home page</p>
    </div>
  </main>
  <?php require base_path('views/partials/footer.php')?>