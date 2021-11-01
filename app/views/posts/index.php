<?php
   require APPROOT . '/views/includes/head.php';
?>
<?php
 require APPROOT . '/views/includes/navigation.php';
?>
<div class="container">
<div class="row">
<div class="col">
<table class="table table-striped">
<?php if(isLoggedIn()): ?>
        <a  class="btn btn-primary" href="<?php echo URLROOT; ?>/posts/create">
            Create
        </a>
    <?php endif; ?>
  <thead>
 
    <tr>
      <th scope="col">Name/lastname</th>
      <th scope="col">Problem</th>
      <th scope="col">Car</th>
      <th scope="col">Contact</th>
      <th scope="col">Recived on</th>
      <th  scope="col"></th>
      <th class="action" scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($data['posts'] as $post): ?>
    <tr>
      <td><?php echo $post->title; ?></td>
      <td><?php echo $post->body ?></td>
      <td><?php echo $post->car ?></td>
      <td><?php echo $post->contact?></td>
      <td> <?php echo 'Received on: ' . date('F j h:m', strtotime($post->created_at)) ?></td>
      
      <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id): ?>
        <td><a
                class="btn btn-warning" id="update"
                    href="<?php echo URLROOT . "/posts/update/" . $post->id ?>">
                    Update
                </a></td>
                <td><form action="<?php echo URLROOT . "/posts/delete/" . $post->id ?>" method="POST">
                    <button type="submit" name="delete" class="btn btn-danger" id="btnred">Delete</button>
                </form></td>
                <?php endif; ?>
                <?php endforeach; ?>
    </tr>
    
  </tbody>
</table>
</div>
</div>
</div>

<?php
       require APPROOT . '/views/includes/footer.php';
?>