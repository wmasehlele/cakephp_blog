<h1>Blog posts</h1>

<div class="row" style="padding:15px">
    <div class="col-md-12">
    
        <p><?php echo $this->Html->link("Add Post", array('action' => 'add'), ['class' => 'btn btn-primary']); ?></p>
    </div>
</div>

<?php foreach ($posts as $post): ?>
<div class="row" style="padding:15px">
    <div class="col-md-6">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">
                    <?php
                        echo $this->Html->link(
                            $post['Post']['title'],
                            array('action' => 'view', $post['Post']['id'])
                        );
                    ?>    
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <?php echo $post['Post']['created']; ?>
                </h6>
                <p class="card-text"><?php echo h($post['Post']['body']); ?></p>
                <a href="#" class="card-link">
                    <?php
                        echo $this->Form->postLink(
                            'Delete',
                            array('action' => 'delete', $post['Post']['id']),
                            array('confirm' => 'You are about to delete a post, click OK to continue')
                        );
                    ?>     
                </a>
                <a href="#" class="card-link">
                    <?php
                        echo $this->Html->link(
                            'Edit',
                            array('action' => 'edit', $post['Post']['id'])
                        );
                    ?>    
                </a>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>