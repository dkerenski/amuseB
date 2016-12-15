<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="styles/main.css" rel="stylesheet" type="text/css">
    <link href="styles/client-info.css" rel="stylesheet" type="text/css">

    <title>Amuse Bouche</title>

</head>

<body>

    <div class="main-container client-info">
	   <?php include 'layout/header.php'; ?>

		<section class="timeline-section">
			<div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                        <div class="timeline"></div>
                        <h1>ИНФОРМАЦИЯ ЗА КЛИЕНТА</h1>
                        <p>Моля влезте в личния си профил или регистрирайте нов клиент, за да продължите напред и да запазите места за курса.</p>
                    </div>
                </div>
            </div>
		</section>

		<section class="login">
			<div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">

                    	<div class="left-side">

                    		<div class="title">Влезте в профила си:</div>

                    		<div class="input-container">
                                <div class="icon-d mail"></div>
                                <input type="email" name="email" placeholder="Имейл">
                            </div>

                            <div class="input-container">
                                <div class="icon-d pass"></div>
                                <input type="pass" name="pass" placeholder="Парола">
                                <a href="">Забравена парола/Forgot Password</a>
                            </div>

                    	</div>

                    	<div class="right-side">

                    		<div class="separator"></div>

                    		<div class="title">Нов клиент:</div>

                    		<div class="input-container">
                                <div class="icon-d person"></div>
                                <input type="name" name="name" placeholder="Име">
                            </div>

                            <div class="input-container">
                                <div class="icon-d pass"></div>
                                <input type="lastName" name="lastName" placeholder="Фамилия">
                            </div>

                            <div class="input-container">
                                <div class="icon-d mail"></div>
                                <input type="email" name="email" placeholder="Имейл">
                            </div>

                            <div class="input-container">
                                <div class="icon-d phone"></div>
                                <input type="phone" name="phone" placeholder="Телефон">
                            </div>

                    	</div>

                    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    		<div class="ab-button rounded">Напред</div>
                    	</div>

                    </div>
                 </div>

                 <div class="row">
                 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                 		<div class="terms-and-conditions-container">
                 			<div class="border top"></div>
                 			<div class="border left"></div>
                 			<div class="border right"></div>
                 			<div class="border bottom"></div>
                 			<div class="text-container">
	                 			<p>
	                 				Общите правила за работа в кухнята на Amuse Bouche са задължителни и се отнасят за всички
	                 				работещи в кухнята на компанията (служители, гости, клиенти, посетители и др.) и са част от
	                 				корпоративната визия и култура за предлагане на висококачествен продукт на нашите клиенти.
	                 				Същите обхващат най-общите случаи в процеса на работа и не претендират за изчерпателност, но очертават духа, подхода и отношението на компанията към разработвания и предлаган от нея продукт на пазара. Правилата търпят развитие и промяна и са отворени за допълнение и усъвършенстване от всички участващи в процеса на създаване и потребяване на предлагания от компанията продукт. <br>
	                 			</p>

	                 			<div class="title">РЕГИСТРАЦИЯ И ЗАПЛАЩАНЕ</div>

	                 			<p>
	                 				1. Регистрацията за курсове в Кулинарно Училище Amuse Bouche става само и единствено лично, по електронен път, чрез формата за регистрация на всеки един курс. <br>

	                 				За извършване на регистрация за събитие на Кулинарно Училище Amuse Bouche е необходимо да бъде попълнена собствената регистрационна форма на страницата на съотвения курс. <br>

	                 				Необходими две имена, електронен адрес без предишна регистрация и телефон за връзка. <br>

	                 				С маркирането на полето 'Съгласен съм с общите правила', Вие поемате отговорността, че сте прочели и приели всички правила за регистрация, заплащане и работа в Кулинарно Училище Amuse Bouche.
	                 			</p>
	                 		</div>
                 		</div>
                 	</div>
                 </div>
             </div>

		</section>

	   <?php include 'layout/footer.php'; ?>

    </div>

    	

    <script src="lib/jquery-2.1.3.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <script src="scripts/main.js"></script>

</body>
</html>