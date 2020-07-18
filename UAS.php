<html>
<head>
	<title>UTS Lusian Andrianto 2016142055</title>
	
</head>
<?php
echo "<br>";
echo "<p align=center>";
echo "Data Pemantauan Covid19 Wilayah Banten";
echo "<br>";
echo "Per " . date('l,d-m-Y H:i:s a') . "";
echo "<br>";
echo "<br>Lusian Andrianto / 2016142055";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<table width = 750 border =1>
<tr>
<td><p align=center>Positif</td>
<td><p align=center>Dirawat</td>
<td><p align=center>Sembuh</td>
<td><p align=center>Meninggal</td>
</tr>
<tr>
<td><p align=center>222</td>
<td><p align=center>159</td>
<td><p align=center>27</td>
<td><p align=center>36</td>
</tr>
</table>";
?>
<form action="" method="post">
		<div class="row">
			<label>Jumlah Positif</label>
			<input type="number_format" name="jumlah_positif" value="<?=isset($_POST['jumlah_positif']) ? $_POST['jumlah_positif'] : ''?>"/>
		</div>
		<div class="row">
			<label>Jumlah Dirawat</label>
			<input type="number_format" name="jumlah_dirawat" value="<?=isset($_POST['jumlah_dirawat']) ? $_POST['jumlah_dirawat'] : ''?>"/>
		</div>
		<div class="row">
			<label>Jumlah Sembuh</label>
			<input type="number_format" name="jumlah_sembuh" value="<?=isset($_POST['jumlah_sembuh']) ? $_POST['jumlah_sembuh'] : ''?>"/>
		</div>
		<div class="row">
			<label>Jumlah Meninggal</label>
			<input type="number_format" name="jumlah_meninggal" value="<?=isset($_POST['jumlah_meninggal']) ? $_POST['jumlah_meninggal'] : ''?>"/>
		</div>
		<div class="row">
			<label>Nama Wilayah</label>
			<select name="area">
				<?php $options = array('DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah');
				foreach ($options as $area) {
					$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
					echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
				}?>
			</select>
		</div>
		<div class="row">
			<input type="submit" name="submit" value="Simpan"/>
		</div>
	</form>
	<?php
	if (isset($_POST['submit'])) {
		
		echo '<h1>Hasil Pasien</h1>';
		echo '<ul>';
		echo '<li>Jumlah Positif: ' . $_POST['jumlah_positif'] . '</li>';
		echo '<li>Jumlah Dirawat: ' . $_POST['jumlah_dirawat'] . '</li>';
		echo '<li>Jumlah Sembuh: ' . $_POST['jumlah_sembuh'] . '</li>';
		echo '<li>Jumlah Meninggal: ' . $_POST['jumlah_meninggal'] . '</li>';
		
		
		echo '</ul>';
	}?>
	</body>
</html>

