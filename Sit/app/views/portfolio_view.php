<h1>Портфолио</h1>

<div class="card-body">
	<a href="/">Главная</a>
</div>

<table>
	Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
	<tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
	<?php

		foreach($data as $row)	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
	}
	?>
</table>





