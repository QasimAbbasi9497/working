<html>
<head>
	<title>Hackerchess</title>
        <style>
select,
select::before,
select::after {
  box-sizing: border-box;
}

select {
  background-color: transparent;
  display: grid;
  border: none;
  padding: 0 1em 0 0;
  margin: 0;
  width: 100%;
  font-family: 'Press Start 2P', cursive;
  font-size: small;
  cursor: inherit;
  line-height: inherit;
}
		body {
			background: black;
			color:  green;
			padding:  30px;
			margin:  30px;
			font-family: 'Press Start 2P', cursive;
		}

		table {
			background: url('./assets/BG_Dot_Black.svg');
			width: 500px;
			height: 500px;
		}
		#boardwrapper {
		}
		table td {
			border: solid green 1px;
		}
		tr:nth-child(2n+1):not(:last-child) > td:nth-child(2n):not(:first-child) {background: green}
		tr:nth-child(2n):not(:last-child) > td:nth-child(2n+1):not(:first-child) {background: green}
		
a.bp {
                        background: url('./assets/Black_Pawn.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}


td.target {
		border: solid white 2px;
	}
td.target > a {
	display: block;
	width: 100%;
	height: 100%;
}

a.wp {
                        background: url('./assets/White_Pawn.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}


a.bb {
                        background: url('./assets/Black_Bishop.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}


a.wb {
                        background: url('./assets/White_Bishop.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}


a.br {
                        background: url('./assets/Black_Rook.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}


a.wr {
                        background: url('./assets/White_Rook.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}


a.bn {
                        background: url('./assets/Black_Knight.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}


a.wn {
                        background: url('./assets/White_Knight.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}


a.bq {
                        background: url('./assets/Black_Queen.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}


a.wq {
                        background: url('./assets/White_Queen.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}


a.bk {
                        background: url('./assets/Black_King.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}


a.wk {
                        background: url('./assets/White_King.svg');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: 25px;
                        display:block;
                        width:100%;
                        height:100%;
}

		
		
		.rank {
			color: green;
			background: black;
			border: 0;
			vertical-align: top;
	}
		td.file {
			color: green;
			background: black;
			border: 0;
			text-align: right;
		}
		#header {
			color: grey;

		}
		#title {
			color: white;
		}
		#timer h1 {
			color: white;
			font-size: 1em;
		}
		#start {
			background: url('./assets/Start.svg');
			width: 200px;
			height: 50px;	
		}
		#movehistory {
                        overflow: scroll;
                        min-width: 303px;
		}

		#movehistory h3 {
			color: white;
			text-align: left;
			margin-left: 2em;
		}
		h3 {
			padding: 0;
			margin: 0;
			font-weight: 300;

		}
		ul {
			  list-style-type: none; /* Remove bullets */
			  color: white;	
		}
		ul > li {
			height: 1.8em;
			margin: 0;
		}
		#moveno, #frommove, #tomove {
			display: inline-block;
		}
		#moveno {
			margin-right: 3em;

		}
		#mainarea {
			height: 31em;
			display: flex;
			justify-content: center;
		}
		.custom-select > select {
			background: black;
			color: white;
			width: 100%;
		} 
		#tomove, #frommove {
			margin-left: 1em;
			margin-right: 1em;
		}
		#row1 {
			padding: 0;
		}
		#row1 > #title {
			font-size: 1em;
		}
		#row1 > * {
			width: 33%;
		}
		#start {
			margin: 4em;
		}
		#timer {
			top: 0;
		}
		#row1 > #lvl {
			width: 9.3%;
		}
		#header, #row1 {
			display: flex;
			justify-content: space-between;
			width: 100%;

		}
		#header {
			display: flex;
			justify-content: center;
			flex-direction: column;
		}
		#row2 {
			display: flex;
			justify-content: center;
			width: 100%;
		}
		#boardwrapper {
			padding: 0em;
		}
		
::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 7px;
}
::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 255, 0, .5);
  -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}
	

        </style>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
<script
    data-autoload-cookie-consent-bar="true"
    data-autoload-cookie-consent-bar-intl-code=""
    src="https://www.gstatic.com/brandstudio/kato/cookie_choice_component/cookie_consent_bar.v3.js">
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-06YS0MVC8B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-06YS0MVC8B', { anonymize_ip: true, referrer: document.referrer.split('?')[0] });
      </script>

<script>
let seconds = 0;
let mins = 0;
const timerId = setInterval(() => {
    seconds++;
    if (seconds === 60) {
        seconds = 0;
        mins++;
    }
    document.getElementById("timerh1").innerHTML = String(mins).padStart(2, '0') + ":" + String(seconds).padStart(2, '0')

}, 1000); // Execute event every second (1000 milliseconds = 1 second).
</script>
</head>
<body>
<div id="header">
	<div id="row1">
	<div id="title">
		HACKER CHESS
	</div>
	<div id="timer">
		<h1 id="timerh1">00:00</h1>
	</div>
	<div id="lvl">
  <form method="POST">

		<div class="custom-select">
  <select name="diff" onchange='if(this.value != 0) { this.form.submit(); }'>
    <option value="0">DIFFICULTY</option>
    <option value="1" >Impossible</option>
    <option value="2" >Unbeatable</option>
    <option value="3" >Invincible</option>
 </select>

		</div>
 </form>
	</div>

	</div>
	<div id="row2">
	<button id="start"  onclick="load_baseboard()"/>
	</div>
	
</div>

<center>
<div id="mainarea">
<div id="boardwrapper">
<table id="board"><tr><td class="file">8</td><td><a class="br"></a></td><td><a class="bn"></a></td><td><a class="bb"></a></td><td><a class="bq"></a></td><td><a class="bk"></a></td><td><a class="bb"></a></td><td><a class="bn"></a></td><td><a class="br"></a></td></tr>
<tr><td class="file">7</td><td><a class="bp"></a></td><td><a class="bp"></a></td><td><a class="bp"></a></td><td><a class="bp"></a></td><td><a class="bp"></a></td><td><a class="bp"></a></td><td><a class="bp"></a></td><td><a class="bp"></a></td></tr>
<tr><td class="file">6</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td class="file">5</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td class="file">4</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td class="file">3</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
<tr><td class="file">2</td><td><a class="wp" href="?move_start=a2"></a></td><td><a class="wp" href="?move_start=b2"></a></td><td><a class="wp" href="?move_start=c2"></a></td><td><a class="wp" href="?move_start=d2"></a></td><td><a class="wp" href="?move_start=e2"></a></td><td><a class="wp" href="?move_start=f2"></a></td><td><a class="wp" href="?move_start=g2"></a></td><td><a class="wp" href="?move_start=h2"></a></td></tr>
<tr><td class="file">1</td><td><a class="wr"></a></td><td><a class="wn" href="?move_start=b1"></a></td><td><a class="wb"></a></td><td><a class="wq"></a></td><td><a class="wk"></a></td><td><a class="wb"></a></td><td><a class="wn" href="?move_start=g1"></a></td><td><a class="wr"></a></td></tr>
<tr><td class="file"></td><td class="rank">a</td><td class="rank">b</td><td class="rank">c</td><td class="rank">d</td><td class="rank">e</td><td class="rank">f</td><td class="rank">g</td><td class="rank">h</td></tr></table></div>
<div id="movehistory">
<h3>MOVES</h3>
<ul>
</ul>
</div>
</div>
</center>
<script>
function load_baseboard() {
  const url = "load_board.php"
  let xhr = new XMLHttpRequest()
  const formData = new FormData();
  formData.append('filename', 'baseboard.fen')

  xhr.open('POST', url, true)
  xhr.send(formData);
  window.location.href = "index.php";
}
</script>
<br/>
<div style="text-color: white; display: flex;"><div style="display: flex; width: 50%; justify-content: left;"><a style="color: white;" href="https://policies.google.com/">PRIVACY & TERMS</a></div><div style="display: flex; width: 50%; justify-content: right;"><a style="color: white;" href="admin.php">Master Login</a></div></div>
</body>
