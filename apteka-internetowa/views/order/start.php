<link rel="stylesheet" href="/apteka/css/home.css" type="text/css" />
<article>
	<section>
		<div id="nav_head">
			<h2>Skladanie zamowienia</h2>
		</div>
	</section>
	<section>
		<div>
			<h4>Dane adresata</h4>
		</div>
		<form action="" id="order_form">
		<div id="input_buyer_data">
			Imie: <input type="text" value="<?php echo $buyer-> name ?>" name="b_name"><br>
			Nazwisko: <input type="text" value="<?php echo $buyer->surname?>" name="b_surname"><br>
			Miasto: <input type="text" value="<?php echo $buyer->city?>" name="b_city"><br>
			Ulica: <input type="text" value="<?php echo $buyer->street?>" name="b_street"><br>
			Numer: <input type="text" value="<?php echo $buyer->number?>"name="b_nb"><br>
		</div>
		<hr>
		<div id="delivery_opt" class="select_opt">
			Wybierz forme wysy³ki:
			<select>
				<option value="kurier1">DHL</option>
				<option value="kurier2">UPS</option>
				<option value="poczta1">Poczta polska</option>
				<option value="poczta2">Poczta polska, priorytet</option>
			</select>
		</div>
		<hr>
		<div id="payment_opt" class="select_opt">
			Wybierz formê zap³aty:
			<select>
				<option value="1">Przelewy24</option>
				<option value="2">Przelew internetowy</option>
				<option value="3">Przelew w³asny</option>
				<option value="4">Za pobraniem</option>
			</select>
		</div>
		<input type="submit" class="category_buttons">
	</section>
			
</article>
