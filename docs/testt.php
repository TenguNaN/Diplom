<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style-main.css">
	<link rel="stylesheet" href="css/style-test.css">
</head>
<body>
	<div class="header">
		<a href="#"><div class="header-button" id="logInOut">Вход</div></a>
		<a href="./fullcourses.html"><div class="header-button" id="fullcourses">Курсы</div></a>
		<!-- <a href="Chat.html"><div class="header-button" id="chats">Связь</div></a> -->
		<a href="Tasks.html"><div class="header-button" id="tasks">Задачи</div></a>
	</div>

	<div class="main">
		<div class="courses">
			<ul>
				<li>
					<div class="test-course"><a href="#">Длинный текст</a></div>
				</li>

				<li>
					<div class="test-course"><a href="#">Текст более длинный</a></div>
				</li>
				
				<li>
					<div class="test-course"><a href="#">Очень большой текст без лорема</a></div>
				</li>
				
				<li>
					<div class="test-course"><a href="#">Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Quasi, dolores.</a></div>
				</li>
				<li>
					<div class="testcourse"><a href="testt.html">Тестовый тест</a></div>
				</li>
			</ul>
		</div>

		<div class="tests">
			<div class="heading">Тестовый вариант</div>
			<!-- Дальше идёт сменяемость теста. Так как сменяемость кода мне неподвластна её на данном этапе не будет. Но вы держитесь) -->
			<div class="tests-number"></div>
			<div class="question">
				<p>Данный вопрос является тестовым и не несёт в себе никакой смысловой нагрузки.</p>
				<!-- В этом блоке будут вопросы. 1 тест - 1 вопрос. 1 курс состоит из нескольких несложных тестов и 1 развёрнутого. -->
			</div>
			
			<div class="answer">
				<form action="">
					<input type="radio" name="answer" id="ans1" class="answercheck">1
					<br>
					<input type="radio" name="answer" id="ans2" class="answercheck">2
					<br>
					<input type="radio" name="answer" id="ans3" class="answercheck">3
					<br>
					<input type="radio" name="answer" id="ans4" class="answercheck">4
				<!-- Тут будут варианты ответа. Так как вопросов пока нет, то нет и ответ, думаю логично ;) -->
				</form>
			</div>
		</div>
	</div>

</body>
</html>