<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){

	header("location:login.php");	exit;

}

?>

<!doctype html>

<Html>

<Head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta http-equiv="X-UA-Compatible" content="IE=edge"/>

<meta name="exoclick-site-verification" content="6e59b90f591a706945e4c14bd3e6d25f">

<link rel="icon" type="image/png" href="https://img.icons8.com/ios-filled/100/000000/sdtv.png">

<title>Video Player</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css" rel="stylesheet" />

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<!-- Help use= to earn from your site!, if you dont want then just remove the below line -->

<script async type="application/javascript" src="https://a.exdynsrv.com/ad-provider.js"></script> 

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

body {

  margin: 0;

  width: 100vw;

  height: 100vh;

  background: #ecf0f3;

  display: flex;

  align-items: center;

  text-align: center;

  justify-content: center;

  place-items: center;

  overflow: hidden;

  font-family: poppins;

}

.container {

  position: relative;

  width: 350px;

  height: 500px;

  border-radius: 20px;

  padding: 40px;

  box-sizing: border-box;

  background: #ecf0f3;

  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;

}

.brand-logo {

  height: 100px;

  width: 100px;

  background: url("https://img.icons8.com/ios-filled/100/000000/sdtv.png");

  margin: auto;

  border-radius: 50%;

  box-sizing: border-box;

  box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white;

}

.brand-title {

  margin-top: 10px;

  font-weight: 900;

  font-size: 1.8rem;

  color: #1DA1F2;

  letter-spacing: 1px;

}

.inputs {

  text-align: left;

  margin-top: 30px;

}

label, input, button {

  display: block;

  width: 100%;

  padding: 0;

  border: none;

  outline: none;

  box-sizing: border-box;

}

label {

  margin-bottom: 4px;

}

label:nth-of-type(2) {

  margin-top: 12px;

}

input::placeholder {

  color: gray;

}

input {

  background: #ecf0f3;

  padding: 10px;

  padding-left: 20px;

  height: 50px;

  font-size: 14px;

  border-radius: 50px;

  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;

}

select {

  background: #ecf0f3;

  padding: 10px;

  padding-left: 20px;

  height: 38px;

  font-size: 12px;

  border-radius: 50px;

  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;

}

.special {

  font-size: 12px;

  font-color: black;

  background: #ecf0f3 !important;

}

button {

  margin-top: 20px;

  background: #1DA1F2;

  height: 40px;

  border-radius: 20px;

  cursor: pointer;

  font-weight: 900;

  box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;

  transition: 0.5s;

}

button:hover {

  box-shadow: none;

}

a {

  position: absolute;

  font-size: 8px;

  bottom: 4px;

  right: 4px;

  text-decoration: none;

  color: black;

  background: yellow;

  border-radius: 10px;

  padding: 2px;

}

h1 {

  position: absolute;

  top: 0;

  left: 0;

}

</style>

</Head>  

<Body>  

<form action="/checker" method="GET">

<div class="container">

<div id="sfcpt7b1s6bfy4ng559z21wf1h2k7qld3fn"></div><script type="text/javascript" src="https://counter9.stat.ovh/private/counter.js?c=pt7b1s6bfy4ng559z21wf1h2k7qld3fn&down=async" async></script><noscript><a href="https://www.freecounterstat.com" title="web counter"><img src="https://counter9.stat.ovh/private/freecounterstat.php?c=pt7b1s6bfy4ng559z21wf1h2k7qld3fn" border="0" title="web counter" alt="web counter"></a></noscript>

  <div class="brand-logo"></div>

  <div class="brand-title">Sd Video Player</div>

  <div class="inputs">

    <label>Enter Link</label>

    <input type="text" name="id" placeholder="Enter Your Link or Video id Here" required />

	<input type="hidden" name="en" value="0"/>

   <label >Choose Link Type</label>

   <select name="type" id="selector" required>

      <option class="special" value="" disabled selected hidden>Select Type</option>

      <option class="special" value="direct">Direct Link</option>

      <option class="special" value="m3u8">m3u8 Link</option>

      <option class="special" value="mpd">mpd Link</option>

      <option class="special" value="youtube">YouTube Link</option>

      <option class="special" value="gdrive">Google Drive Link</option>

      <option class="special" value="brightcove">Brightcove video ID</option>

      <option class="special" value="jwplayer">JW Player ID</option>

      <option class="special" value="streamtape">ST</option>

      <option class="special" value="vu">VU</option>

      <option class="special" value="yd">YD</option>

   </select>

    <button type="submit">Submit</button>

  </div>

</div>

</form>

</Body>  

</Html>
