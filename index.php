<html>
<title>Форма заказа звонка</title>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>

<body>
<form id="formMain" action="send.php" method="POST" name="formMain">
   <input name="name" type="name" id="Name" maxlength="20" placeholder="Введите ваше имя" required />
   <input name="telephone" type="Tel" id="Telephone" maxlength="20" placeholder="Введите ваш телефон" required/>
   <button class="Button" type="submit" form="formMain">Заказать звонок</button>
</form>
</body>