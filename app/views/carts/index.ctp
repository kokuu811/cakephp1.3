<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Home','/');?>
			</li>
			<li class="active">Cart</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<table class="table">
			<thead>
				<tr>
					<th>Product Name</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $total=0;?>
				<?php foreach ($carts as $product):?>
				<tr>
					<td><?php echo $product['Product']['name'];?></td>
					<td>$<?php echo $product['Product']['price'];?>
					</td>
					<td>
						<?php echo $this->Html->link(
		                    'Delele',
		                    array('controller' => 'carts', 'action' => 'delete',$product['Product']['id']),
		                    null,
		                    'Are you sure?')
		                ?>
					</td>
				</tr>
				<?php endforeach;?>

				<tr class="success">
					<td colspan=3></td>
					<td>$<?php echo $total;?>
					</td>
				</tr>
			</tbody>
		</table>

		<p class="text-right">
			<?php echo $this->Form->submit('Update',array('class'=>'btn btn-warning','div'=>false));?>
			<a class="btn btn-success" href="/cakephp/carts/destroy"
				onclick="alert('Would you like delete all Cart');">Delete All</a>
		</p>

	</div>
</div>
</body>
</html>
