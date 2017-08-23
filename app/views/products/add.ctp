<div class="container">
<h2>Create Product</h2>
    <form action="/cakephp/products/add" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Name of Product" name="data[Product][name]">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input class="form-control" type="text" id="price" name="data[Product][price]"></input>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="data[Product][description]" placeholder="Describing your Product"  ></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" accept="image/*" name="data[Product][image]">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>