<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">List of products
                <div class="pull-right">
                    <a href="/cakephp/products/add"><button class="btn btn-xs btn-primary ">Create new product</button></a>
                </div>
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="example">
                        <thead class="orders">
                            <th>STT</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th class="text-center">Actions</th>
                        </thead>
                        <tbody>
                            <?php foreach($products as $product) { ?>
                            <tr>
                                <td><?php echo $product['Product']['id'] ?></td>
                                <td>
                                    <?php echo $this->Html->link($product['Product']['name'], array('controller' => 'products', 'action' => 'index', 'index')) ?>
                                </td>
                                <td>
                                    <?php echo $product['Product']['description']; ?>
                                </td>
                                <td>
                                    <?php echo $this->Html->image($product['Product']['image'], array('alt' => $product['Product']['image']))?>
                                </td>
                                <td class="text-center">
                                    <a href="/cakephp/products/edit/<?php echo $product['Product']['id'] ?>"><button class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil"></span>Edit</button></a>
                                    <a href="/cakephp/products/delete/<?php echo $product['Product']['id'] ?> data-toggle="modal"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>