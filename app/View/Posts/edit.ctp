<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Edit Post</h1>
  </div>
</div>
<div class="row">
    <div class="col-md-6">
        <form action="/cakephp2/posts/edit/<?php echo "1" ?>" id="post_edit_form" method="post" accept-charset="utf-8">
            <input type="text" class="form-control" id="id" name="id" value="<?php echo "1" ?>" required hidden>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" value="<?php echo $post['Post']['title'] ?>" class="form-control" id="title" name="title" maxlength="50" required="required">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="3" required="required"><?php echo trim($post['Post']['body']) ?>
                </textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success"> Update Post </button>
            </div>    
        </form>
    </div>
</div>