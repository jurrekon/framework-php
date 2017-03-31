<h1>Clients</h1>
	<p class="options"><a href="<?= URL ?>client/create">create</a></p>
	<table>
		<thead>
			<tr>
				<th>Full name</th>
				<th>lastname</th>
				<th>Street</th>
				<th>City</th>
				<th>Zipcode</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		</tbody>
<?php
	foreach($clients as $client):
?>
			<tr>
				<td><?=$client['fullname']?></td>
				<td><?=$client['lastname']?></td>
				<td><?=$client['street']?></td>
				<td><?=$client['city']?></td>
				<td><?=$client['zipcode']?></td>
				<td class="center"><a href="<?= URL ?>client/edit/<?= $client['id']?>">edit</a></td>
				<td class="center"><a href="<?= URL ?>client/delete/<?= $client['id']?>">delete</a></td>
			</tr>

<?php
	endforeach;
?>
		</tbody>
	</table>