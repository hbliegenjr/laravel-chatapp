<!--
<!DOCTYPE html>
	<html lang="en">
	    <head>
	        <meta charset="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	        <meta name = "viewport" content = "width=device-width,
	        initial-scale=1.0">
	        <title>Laravel-Pusher Chat</title>
	 
	    </head>
	    <body>
	        <h1> HELLO WORLD!</h1>
	    </body>
</html>

-->



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name = "viewport" content = "width=device-width,
        initial-scale=1.0">

        <title>Laravel-Pusher Chat</title>
        <link rel="stylesheet" href="./css/app.css" />

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6275cb597b967b11798e29f0/1g2e24m1b';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    </head>
    <body>
    <div class="app">
        <header>
            <h1>Let's Talk!</h1>
            <input type="text" name="username" id="username" placeholder="Please enter
            a username..."/>
        </header>
        <div id="messages"></div>
            <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Write a
            message..." />
<button type="submit" id="message_send">Send Message</button>
</form>
</div>
<script src="./js/app.js"> </script>
    </body>
</html>
