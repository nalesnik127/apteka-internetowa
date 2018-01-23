<link rel="stylesheet" href="/apteka/css/home.css" type="text/css" />
<article>
	<section>
		<div id="nav_head">
			<h2>Podsumowanie zamowienia</h2>
		</div>
	</section>
	<section>
		<div>
			<h4>Dane adresata:</h4>
		</div>
		<form action="views/order/submit.php" id="order_form" method="get">
		<div id="input_buyer_data">
			Imie: <input type="text" value="<?php echo $buyer-> name ?>" name="b_name"><br>
			Nazwisko: <input type="text" value="<?php echo $buyer->surname?>" name="b_surname"><br>
			Miasto: <input type="text" value="<?php echo $buyer->city?>" name="b_city"><br>
			Ulica: <input type="text" value="<?php echo $buyer->street?>" name="b_street"><br>
			Numer: <input type="text" value="<?php echo $buyer->number?>"name="b_nb"><br>
		</div>
		<hr>
		<div id="delivery_opt" class="select_opt">
			Wybierz forme wysylki:
			<select name="wysylka">
				<option value="kurier1" name="Kurier - UPS" >Kurier - UPS</option>
				<option value="kurier2" name="Kurier - DHL" >Kurier - DHL</option>
				<option value="poczta1" name="Poczta polska - priorytet">Poczta polska - priorytet</option>
				<option value="poczta2" name="Poczta polska">Poczta polska</option>
			</select>
		</div>
		<hr>
		<div id="payment_opt" class="select_opt">
			Wybierz forme zaplaty:
			<select name="zaplata">>
				<option value="1" >Przez zewnetrzny system</option>
				<option value="2">Za pobraniem</option>
			</select>
			
		</div>
		<input type="submit" value="Zamawiam">
		</form>
	</section>
			
</article>
