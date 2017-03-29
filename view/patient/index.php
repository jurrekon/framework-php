<h1>Patiënts</h1>
	<p class="options"><a href="<?= URL ?>patient/create">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Gender</th>
				<th>Status</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($patients as $patient):
?>
			<tr>
				<td><?=$patient['name']?></td>
				<td><?=$patient['species']?></td>
				<td><?=$patient['gender']?></td>
				<td><?=$patient['status']?></td>
				<td class="center"><a href="<?= URL ?>patient/edit/<?= $patient['id']?>">edit</a></td>
				<td class="center"><a href="<?= URL ?>patient/delete/<?= $patient['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>