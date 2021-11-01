<?php
   require APPROOT . '/views/includes/head.php';
?>
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
<div class="container center">
    <h6>
        <a class="goback" href="<?php echo URLROOT; ?>/posts">Go back</a>
    </h6>

<div class="container center">
    <h1>
        Create new post
    </h1>

    <form action="<?php echo URLROOT; ?>/posts/create" method="POST">
        <div class="form-item">
            <input type="text" name="title" placeholder="Name/Lastname">

            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
            </span>
        </div>

        <div class="form-item">
            <textarea name="body" placeholder="Description"></textarea>

            <span class="invalidFeedback">
                <?php echo $data['bodyError']; ?>
            </span>
        </div>
        <div class="form-item">
        <input type="text" name="car" placeholder="Car...">

            <span class="invalidFeedback">
                <?php echo $data['bodyError']; ?>
            </span>
        </div>
        <div class="form-item">
        <input type="number" name="contact" placeholder="Contact...">

            <span class="invalidFeedback">
                <?php echo $data['bodyError']; ?>
            </span>
        </div>

        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
</div>
<?php
       require APPROOT . '/views/includes/footer.php';
?>
