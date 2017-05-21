<?php
include ('connection.php');
include ('head.php');
?>
                <script type="text/javascript" src="game.js"></script>

            	<div class="game__wrapper">
                    <canvas id="pingpong" width="800" height="500"></canvas>
                    <div class="article">
                        <h1>Описание</h1>
                        <hr class="line">
                    </div>  
                    <div class="game__description">
                        <dl>
                            <dt>E</dt> <dd>- рестарт шарика</dd>
                            <dt>R</dt> <dd>- рестарт игры</dd><br>
                            <dt>W</dt> <dd>- 1 игрок вверх</dd>
                            <dt>S</dt> <dd>- 1 игрок вниз</dd><br>
                            <dt>P</dt> <dd>- 2 игрок вверх</dd>
                            <dt>;</dt> <dd>- 2 игрок вниз</dd> <br>
                            <dt>Enter</dt> <dd>- пуск шарика</dd>
                            <dt>Shift</dt> <dd>- Вкл. выкл. ускорение</dd>

                        </dl>
                    </div>
                </div>
            </div> 
			<div class="underground">
                <h2 id="underarticle">Авторские права</h2>
				<p>Copyright © 2017. Официальный сайт Мартынова Егора.</p>
				<address>
                Связаться со мной вы всегда можете по e-mail: e.martinow@yandex.ru, 
                либо на сайте vk.com: https://vk.com/martinow111
                </address>
            </div>
       </div>
	</body>
</html>