<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Post', array(
    									'action' => 'edit',
    									'inputDefaults' => array(
            									'div'   => array(
            											'class' => 'form-group'
            									)
    									)
    									));
	echo $this->Form->input('title', array('class' => 'form-control'));
	echo $this->Form->input('body', array('rows' => '3', 'class' => 'form-control'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->button('Save Post', array('type' => 'submit', 'class' => 'btn btn-default'));
?>