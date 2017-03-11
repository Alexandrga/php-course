<?php
$isFormSubmit = isset($_POST['csv_file_upload']);
$csvFile = (isset($_FILES['csv_file']['tmp_name']))? $_FILES['csv_file']['tmp_name']: false; // проверяем наличие ключа в массиве или существование
if ($isFormSubmit === true)
	{
		// 1. CSV handler
		// 2/ Output table in HTML
		// 3/ Form for file input
		$csvFile = __DIR__.'/data/user.csv';  // путь абсолютный до файла через функцию DIR
		//$csvFile = __DIR__.'/data/users_empty.csv';
		//$csvFile = __DIR__.'/data/empty.csv';
		if (!file_exists($csvFile)){  // проверка существования файла
			echo "File $csvFile not found";
			die(); // остановка выполнения сценария избегать эту функцию применять
		}
		$handle = fopen ($csvFile, "r+"); // + смещает указатель на начало файла
		if ($handle !== false){
		$rows =[]; // строки
			while (($buffer = fgets($handle, 4096)) !== false){
		$rows[]=explode(';',$buffer);	
	
		//var_dump ($users);
			}
			fclose ($handle);
			if (count($rows)== 0){						//		проверка пустого файла
		echo "File $csvFile is empty";
		die();
			}
			$columns = $rows[0]; // колонки
			$users = array_slice($rows,1); // пользователи
			$userscount = count($users);  // количество пользователей
			$columnscount = count($columns); // количество колонок
	}
}
?>

<Html>
	<HEAD>
		<title>csv loader</title>
	</HEAD>
	<body>
		<h1>CSV loader</h1>
		<form method="POST" name="CSV loader" enctype="multipart/form-data">
		<input type="hidden" name="csv_file_upload" value="yes"> <!-- проверяем что нажата кнопка-->
			Csv_file:<input type="file" name="csv_file">
			<input type="submit" name="csv_file_submit" value="Upload">
		</form>
		<?php if ($isFormSubmit == true):?>
		<table border="1">
			<thead>
				<tr>
				<?php foreach ($columns as $name):?>
							<td>
					<?php echo $name;?>
							</td>
					<?php endforeach;?>
				</tr>
<tbody>				<?php if ($userscount > 0) :?> 
						<?php foreach($users as $user):?>
				<tr>
							<?php foreach ($user as $propety):?>
							<td>
								<?php echo $propety;?>
							</td>
						<?php endforeach;?>
					
				</tr>
						<?php endforeach;?>
					<?php else:?>
					<tr>
							<td colspan="<?php echo $columnscount;?>">
					<?php echo "Нет пользователей";?>

							</td>

					</tr>
		<?php endif;?>
</tbody>

			</thead>


		</table>
	<?php endif;?>
	</body>

</Html>








Contact GitHub API Training Shop Blog About
© 2017 GitHub, Inc. Terms Privacy Security Status Help







