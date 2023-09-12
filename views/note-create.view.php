<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <form class="mt-8" method="POST">

            <?php if (isset($errors['body'])) : ?>
                <p class="text-red-500 my-3"><?= $errors['body'] ?></p>
            <?php endif; ?>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                    Your note:
                </label>
                <textarea 
                    cols="30" 
                    rows="15" 
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    name="body"
                    id="body"
                    required>
                <?php $_POST['body'] ?? '' ?>
                </textarea>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Create Note
                </button>
            </div>
        </form>
        
    </div>
</main>

<?php require('partials/footer.php') ?>