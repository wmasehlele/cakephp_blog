<h1>Add Post</h1>

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