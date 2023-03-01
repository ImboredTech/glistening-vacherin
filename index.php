<!DOCTYPE html>
<html>
    <head>
        <title>Haha school you can't block me</title>
        <link rel="stylesheet" type="text/css" href="./css/navbar.css">
        <script type="text/javascript" src="./js/navbar.js"></script>
        <style>
          body {
            font-family: poppins, sans-serif;  
            margin: 0px;
          }
      
          .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
          }
      
          .announcement {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            font-size: 1.2em;
            line-height: 1.5em;
            color: #333;
            text-align: center;
            word-wrap: break-word;
            overflow-wrap: break-word;
            hyphens: auto;
          }
        </style>
    </head>
    <body>
      <div class="container">
		  <?php
			// Connect to the database
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $dbname = 'admin_database';
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			  // Check for errors in the connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			  // Retrieve the latest announcement from the database
			$sql = "SELECT announcement_text FROM announcements ORDER BY announcement_id DESC LIMIT 1";
			$result = mysqli_query($conn, $sql);

			  // Display the announcement
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				echo '<div class="announcement">' . $row['announcement_text'] . '</div>';
			} else {
				echo '<div class="announcement">No announcements</div>';
			}

			  // Close the database connection
			mysqli_close($conn);
		?>
	  </div>
        <section id="header">
            <article>
              <h2>Have fun in your lesson.</h2> 
            </article>
            <nav id="main-nav">
              <a href="#header" class="active">Home</a>
              <a href="#how-do-it">How we do it</a>
              <a href="#block-website">Can't block website</a>
              <a href="#games">Games</a>
              <a href="https://twitter.com/imboredtech">News</a>
              <a href="http://imboredtech.ml/admin/index.html">Admin Panel</a>
            </nav>
          </section>
          
          <section id="how-do-it">
            <article>
              <h2>How we do it.</h2>
              <p>Well, some schools blocking systems are really sifisticated. And lets say my schools is, you would use the common method of websockets. But my school and some other schools block websockets.</p>
              <p>Then you could say well you could use embeds, and yes they could be used but they can be really laggy and some schools have better blocking systems than others so that might get blocked as well.</p>
              <p>So that only leaves one reliable option. Strip the game of its code and add it to a different file.</p>
            </article>
          </section>
          <section id="block-website">
            <article>
              <h2>How schools wont block this website.</h2> 
              <p>Now you could say the school would just block the website. Well no.</p>
              <p>This website will use tempory domains and will always be changing. So they cant block the domains.</p>
              <p>All domain updates will be posted on our twitter and our discord server.</p>
            </article>
          </section>
          <section id="games">
            <article>
              <h2>List of games.</h2> 
              <p>Programmed by me!</p>
              <a href="./snake.html" class="yes">Snake</a>
              <br>
              <a href="./tetris.html" class="yes">Tetris</a>
              <br>
              <a href="https://www.google.co.uk/logos/2010/pacman10-i.html" class="yes">Pacman (not my creation)</a>
              <br>
              <a href="./fruitninja/index.html" class="yes">Fruit Ninja. (not my creation)</a>
              <br>
              <a href="./currentlybeingfixed.html" class="yes">Cut the rope. (not my creation) CURRENTLY BEING FIXED!</a>
              <br>
              <a href="./yeahs/index.html" class="yes">Cookie Clicker. (not my creation) CURRENTLY BEING FIXED!</a>
              <br>
              <a href="./currentlybeingfixed.html" class="yes">Defender. (not my creation) CURRENTLY BEING</a>
              <br>
              <a href="./runner/game.html" class="yes">Runner. (not my creation)</a>
            </article>
          </section>
          <section id="social">
            <article>
                <h2>Socials</h2>
                <a href="https://twitter.com/imboredtech" class="yes"><br>Twitter: https://twitter.com/imboredtech</a>
                <a href="https://github.com/imboredtech" class="yes"><br>Github: https://github.com/imboredtech</a>
                <p>Made with love by Ilikefivem</p>
                <p>Little dislamer. Games like 1v1.lol and krunker.io (are just examples they are some more) won't be able to be played. This is due to me not having the tools to strip the code.</p>
                <h2>Why did i do it.</h2>
                <p>Well i am a student myself in a secondary school. (yes im British)</p>
                <p>And congrats to the school that im in if they find me. (and no you can't check domain records they get destroyed after the domain change)</p>
                <p>Anyway most people would get bored in lessons so why not give them something fun to do.</p>
                <h2>Contact</h2>
                <p>Hey whats that? You want to contact me. Well your in luck.</p>
                <p>Also use this for if this website has been blocked under your school or if there is any issues you find.</p>
                <p>Email: imboredtech@gmail.com (checks everyday)</p>
                <p>Twitter: @imboredtech (checks everyday)</p>
                <p>Discord: [T-304] Bob Dylan#0001 (checks everyday)</p>
                <a href="https://10fastfingers.com/typing-test/english"><img src="http://img.10fastfingers.com/badge/typing-test_1_DB.png" alt="Typing Test" /></a><p>Visit the <a href="https://10fastfingers.com/typing-test/english">Typing Test</a> and try!</p>            </article>
                <iframe src="https://discord.com/widget?id=985562187139526736&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
              </section>
    </body>
</html>