<?php
    echo $this->Form->create('Product', array(
    									'action' => 'edit',
    									'inputDefaults' => array(
            									'div'   => array(
            											'class' => 'form-group'
            									)

    									),
                                        'enctype' => 'multipart/form-data'
    						        )
                            );
	echo $this->Form->input('name', array('class' => 'form-control'));
	echo $this->Form->input('description', array('rows' => '3', 'class' => 'form-control'));
    echo $this->Form->input('image', array('type' => 'file'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->button('Save Product', array('type' => 'submit', 'class' => 'btn btn-default'));
?>