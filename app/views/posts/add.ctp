<h1>Add Post</h1>
<form action="/cakephp/posts/add" id="PostAddForm" method="post" accept-charset="utf-8">
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="data[Post][title]">
  </div>
  <div class="form-group">
    <label for="body">Body:</label>
    <textarea class="form-control" id="body" row="5" name="data[Post][body]"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
