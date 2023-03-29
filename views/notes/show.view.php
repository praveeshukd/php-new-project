<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">Go back...</a>
        </p>

        <p><?= htmlspecialchars ($note['body']) ?></p>

        <!-- <form method="POST" class="mt-8">
        <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?=$note['id'] ?>">
        <button type="submit" class="text-green-500">Delete</button>
        </form> -->
       <footer class="mt-8">
       <a href="/note/edit?id=<?=$note['id'] ?>" class="text-green-800 border border-current px-3 py-1 rounded">Edit</a>
       </footer>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>