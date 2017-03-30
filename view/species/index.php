<h1>Species</h1>
	<p class="options"><a href="<?= URL ?>species/create">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Species</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($species as $specie):
?>
			<tr>
				<td><?=$specie['species']?></td>
				<td class="center"><a href="<?= URL ?>species/edit/<?= $specie['id']?>">edit</a></td>
				<td class="center"><a href="<?= URL ?>species/delete/<?= $specie['id']?>">delete</a></td>
			</tr>
<?php
	endforeach;
?>
		</tbody>
	</table>