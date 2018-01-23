<link rel="stylesheet" href="/apteka/css/home.css" type="text/css" />
<article>
   <section>
      <p>Adres wysylki:</p>

      <p>Imie: <?php echo $_GET['b_name'] ?></p>
      <p>Nazwisko: <?php echo $_GET['b_surname'] ?></p>
      <p>Miasto: <?php echo $_GET['b_city'] ?></p>
      <p>Ulica: <?php echo $_GET['b_street'] ?></p>
      <p>Numer: <?php echo $_GET['b_nb'] ?></p>

   </section>
</article>
<a href="?controller=pages&action=home"> wroc do przegladania katalogu</a>