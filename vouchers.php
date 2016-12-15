<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="styles/main.css" rel="stylesheet" type="text/css">
    <link href="styles/vouchers.css" rel="stylesheet" type="text/css">

    <title>Amuse Bouche</title>

</head>

<body>

    <div class="main-container vouchers">
	    <?php include 'layout/header.php'; ?>

        <section class="courses-separator">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                       <h1>ПОДАРЕТЕ ПРЕЖИВЯВАНЕ</h1>
                       <p>
                            Изненадайте Вашите любими хора, близки, приятели, роднини и колеги с нестандартно предложение за подарък, като им <br>поднесете незабравимо гастрономическо преживяване с Кулинарно училище Amuse Bouche! <br>
                            Ваучерите за подарък са перфектно решение пред алтернативата за дълго лутане по магазините в търсене на подходящият <br>подарък. Всеки ваучер може да бъде използван в вамките на една година от издаването. <br>
                            Направете специален подарък или подарете ваучер за някой от основните ни курсове. За най-забързаните, предлагаме да <br>изберете само стойността на ваучера Ние ще се погрижим за останалото.
                       </p>  
                       <div class="separator"></div>       
                    </div>
                </div>
            </div>
        </section>

        <section class="receive-voucher">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1>ВАРИАНТИ ЗА ИЗДАВАНЕ НА ВАУЧЕР</h1>
                        <p>
                            Научете повече за ваучерите, които можете да закупите. Поръчайте и <br>получете ваучера в удобен PDF формат на посочения от Вас имейл.
                        </p>  
                    </div>
                </div>
                <div class="row">
                    <div class="steps-container">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="step">    
                                <h4>за най-забързаните*</h4>
                                <p>
                                    Изберете сами стойността на подаръка. Ваучера ще бъде валиден в рамките на една година от издаването му, Получателят ще може сам да избере за кой[и] курс[ове] да използва сумата.
                                    Ваучерът предполага получателят сам да се регистрира за избрания курс.
                                </p>
                                <div class="separator-left"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="step">    
                                <h4>специален подарък</h4>
                                <p>
                                    Ако вече сте направили своя избор, моля направете регистрацията, като натиснете бутона ПОДАРИ на страницата на курса, който сте избрали. Ваучерът ще Ви бъде изпратен електронно в PDF формат, на посочения от Вас имейл и автоматично ще бъде направена регистрация за курса.
                                </p>
                                <div class="separator-left"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <h4>основни курсове*</h4>
                            <p>
                                Направете подарък, като изберете някой от основните ни курсове, които предлагаме редовно. Оставете датата отворена и дайте възможност на 
                            </p>
                        </div>
                        <div class="clear"></div>
                        <div class="hint">
                            * Този тип ваучери изискват получателят да се регистрира за избрания от него курс!
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="order-vouchers">
            <h1>ПОРЪЧАЙТЕ ВАУЧЕР</h1>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
                        <div class="timeline"></div>
                    </div>
                </div>
                
                <form action="orderVoucher">
                    <div class="separator-left"></div>

                    <div class="row">

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3 col-lg-offset-3">
                            <div class="dropdown-container">
                                <div class="icon-d mixer"></div>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Kitchen Survivor -   ...
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="title">Вашите контакти:</div>

                            <div class="input-container">
                                <div class="icon-d person"></div>
                                <input type="text" name="firstName" placeholder="Име">
                            </div>


                            <div class="input-container">
                                <div class="icon-d person"></div>
                                <input type="text" name="lastName" placeholder="Фамилия">
                            </div>


                            <div class="input-container">
                                <div class="icon-d mail"></div>
                                <input type="email" name="email" placeholder="Имейл">
                            </div>

                            <div class="input-container">
                                <div class="icon-d phone"></div>
                                <input type="number" name="number" placeholder="Телефон">
                            </div>

                            <!-- <div class="checkbox-container">
                                
                            </div> -->

                            <div class="ab-button rounded">Запази</div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                             <div class="input-container">
                                <div class="icon-d euro"></div>
                                <input type="number" name="price" placeholder="80.00лв.">
                            </div>

                            <div class="title">Данни за участника:</div>

                             <div class="input-container">
                                <div class="icon-d person"></div>
                                <input type="text" name="firstName" placeholder="Име">
                            </div>

                             <div class="input-container">
                                <div class="icon-d person"></div>
                                <input type="text" name="lastName" placeholder="Фамилия">
                            </div>

                             <div class="input-container">
                                <div class="icon-d mail"></div>
                                <input type="email" name="email" placeholder="Имейл">
                            </div>

                             <div class="textarea-container">
                                <div class="icon-d symbol"></div>
                                <textarea name="" cols="30" rows="10" placeholder="Послание"></textarea>
                            </div>

                            <div class="dropdown-container">
                                <div class="icon-d alergy"></div>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Алергии
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="hint">* Всички полета са задължителни!</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="questions">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        
                        <h1>ЧЕСТО ЗАДАВАНИ ВЪПРОСИ</h1>

                        <h2>Как да закупя ваучер за определен курс?</h2>

                        <p>
                            Закупуването на тзои тип ваучери става директно от страницата на курса който сте харесали.
                        </p>
                        <p>
                            В този случай, ваучерът гарантира място за курса. Върху него са изписани датата - начало на курса и името на курса. Собственикът на ваучера има предварително направена регистрация за въпросния курс на страницата на Kулинарно Училище Amuse Bouche. При тези обстоятелства важат общите правила за регистрация и заплащане, с които можете да се запознаете на този линк.
                        </p>
                        <p>При неявяване на курс, ваучерът се счита за невалиден и сумата на ваучера не подлежи на въстановяване. </p>

                        <h2>Как да закупя ваучер за курс, който не е обвързан с дата?</h2>

                        <p>
                            В случаите, в които ваучерът е за курс от определен цикъл (например “Kitchen Survivor”) и на вауера не е опоменато началото на курса, ваучерът е валиден в рамките на една година от датата на издаване (виж серииния номер). Тъй като не е обвързан с определена начална дата, регистрацията на официалната страница на курса е задължителна (за всички участници). Регистрацията става на официалната страница на въпросния курс. След регистрация важат общите права за регистрация и заплащане посочени на официалната страница на училището. <br> В случаите, когато е издаден ваучер за определена сума, той не е обвързан с който и да било от курсовете, които Кулинарно Училище Amuse Bouche предлага. В тези случаи ваучерът е валиден в рамките на една година от издаването му. Ваучерът може да бъде използван за посещението на един или повече класове в рамките на определената (записана) сума. В случаите, когато собственика на ваучера има желание да се запише за по-скъп курс, разликата се заплаща на място. Регистрацията на официалната страница на училището за всички курсове е задължителна за всички участници. След регистрация важат общите права за регистрация и заплащане посочени на официалната страница на училището.
                        </p>
                        
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
