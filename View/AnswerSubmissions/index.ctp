
<table class="table table-hover">
	<thead>
		<tr>
			<th>date</th>
			<th>form title</th>
			<th>submitted by</th>
			<th>actions</th>
		</tr>
	</thead>
	<tbody>
<?php
foreach ( $submissions as $submission ) {
	if ( !empty($submission['User']) ) {
		$submittedBy = $this->Html->link($submission['User']['full_name'], array('plugin' => 'users', 'controller' => 'users', 'action' => 'view', $submission['User']['id']));
	} else {
		$submittedBy = '(guest)';
	}
?>
		<tr>
			<td><?php echo $submission['AnswerSubmission']['created'] ?></td>
			<td><?php echo $this->Html->link($submission['Answer']['title'], array('action' => 'index', $submission['Answer']['id'])) ?></td>
			<td><?php echo $submittedBy ?></td>
			<td><?php echo $this->Html->link('view', array('action' => 'view', $submission['AnswerSubmission']['id']), array('class' => 'btn btn-mini')) ?></td>
		</tr>
<?php
	} // end foreach()
?>
	</tbody>
</table>
