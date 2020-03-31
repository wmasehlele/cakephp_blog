
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Baby steps into Cakephp</h1>
    <p class="lead">This is my first app using Cakephp, lets start creating sweet blo posts.</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm">
        <form action="/cakephp2/posts/add" id="post_edit_form" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" value="" class="form-control" id="title" name="title" maxlength="50" required="required">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="3" required="required">
                </textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success"> Create Post </button>
            </div>    
        </form> 
    </div>
    <div class="col-sm">
        <?php foreach ($posts as $post): ?>
            <div class="card" style="width: 100%; margin-bottom:10px;">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $post['Post']['title'] ?>    
                    </h5>                   
                    <h6 class="card-subtitle mb-2 text-muted">
                        <?php echo $post['Post']['created']; ?>
                    </h6>
                    <p class="card-text"><?php echo h($post['Post']['body']); ?></p>
                    <?php
                        echo $this->Form->postLink(
                            'Delete', 
                            array('action' => 'delete', $post['Post']['id']),
                            array('class'=>'btn btn-outline-danger btn-sm', 'confirm' => 'Are you sure?')
                        );
                    ?> 
                    <?php
                        echo $this->Html->link(
                            'Edit', 
                            array('action' => 'edit', $post['Post']['id']),
                            array('class'=>'btn btn-outline-info btn-sm')
                        );
                    ?>               
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>