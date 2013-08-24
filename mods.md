```css
@import "http://fonts.googleapis.com/css?family=Ledger|Open+Sans";
body {
    font-family: 'Open Sans',sans-serif;
}
h2, h1, h3, h4 {
    font-family: 'Ledger',serif;
}
.button {
    background-clip: padding-box;
    border: 1px solid;
    border-radius: 2px 2px 2px 2px;
    box-shadow: 0 1px rgba(255, 255, 255, 0.1) inset, 0 0 0 1px rgba(255, 255, 255, 0.08) inset, 0 1px 2px rgba(0, 0, 0, 0.25);
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-size: 13px;
    height: 36px;
    line-height: 35px;
    padding: 0 20px;
    position: relative;
    text-align: center;
    text-decoration: none;
    text-shadow: 0 -1px rgba(0, 0, 0, 0.4);
    vertical-align: top;
}
.button:before {
    background-image: radial-gradient(farthest-corner at center top , rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0));
    bottom: 0;
    content: "";
    left: 0;
    pointer-events: none;
    position: absolute;
    right: 0;
    top: 0;
}
.button:hover:before {
    background-image: radial-gradient(farthest-corner, rgba(255, 255, 255, 0.18), rgba(255, 255, 255, 0.03));
}
.button:active {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2) inset;
}
.button:active:before {
    content: none;
}
.button-green {
    background: linear-gradient(to bottom, #69C03B, #5CA934 66%, #54992F) repeat scroll 0 0 #5CA934;
    border-color: #478228 #478228 #3C6F22;
}
.button-green:active {
    background: none repeat scroll 0 0 #5CA934;
    border-color: #3C6F22 #478228 #478228;
}
.button-red {
    background: linear-gradient(to bottom, #DA5C48, #D5452F 66%, #C73D28) repeat scroll 0 0 #D5452F;
    border-color: #AE3623 #AE3623 #992F1F;
}
.button-red:active {
    background: none repeat scroll 0 0 #D5452F;
    border-color: #992F1F #AE3623 #AE3623;
}
.button-blue {
    background: linear-gradient(to bottom, #25A5F0, #1097E6 66%, #0F8AD3) repeat scroll 0 0 #1097E6;
    border-color: #0D78B6 #0D78B6 #0B689E;
}
.button-blue:active {
    background: none repeat scroll 0 0 #1097E6;
    border-color: #0B689E #0D78B6 #0D78B6;
}
.button-orange {
    background: linear-gradient(to bottom, #F69F47, #F4902A 66%, #F38617) repeat scroll 0 0 #F4902A;
    border-color: #DF770C #DF770C #C76A0A;
}
.button-orange:active {
    background: none repeat scroll 0 0 #F4902A;
    border-color: #C76A0A #DF770C #DF770C;
}
.button-pink {
    background: linear-gradient(to bottom, #EB5190, #E8367F 66%, #E62473) repeat scroll 0 0 #E8367F;
    border-color: #D31865 #D31865 #BC165A;
}
.button-pink:active {
    background: none repeat scroll 0 0 #E8367F;
    border-color: #BC165A #D31865 #D31865;
}
.button-gray {
    background: linear-gradient(to bottom, #55585F, #47494F 66%, #3D3F44) repeat scroll 0 0 #47494F;
    border-color: #2F3034 #2F3034 #232427;
}
.button-gray:active {
    background: none repeat scroll 0 0 #47494F;
    border-color: #232427 #2F3034 #2F3034;
}
.button-darkblue {
    background: linear-gradient(to bottom, #4369B6, #3B5CA0 66%, #365391) repeat scroll 0 0 #3B5CA0;
    border-color: #2D477B #2D477B #263C68;
}
.button-darkblue:active {
    background: none repeat scroll 0 0 #3B5CA0;
    border-color: #263C68 #2D477B #2D477B;
}
.button-purple {
    background: linear-gradient(to bottom, #A87DD3, #9966CB 66%, #8F57C6) repeat scroll 0 0 #9966CB;
    border-color: #8040BE #8040BE #733AAB;
}
.button-purple:active {
    background: none repeat scroll 0 0 #9966CB;
    border-color: #733AAB #8040BE #8040BE;
}
#urlfield {
    font-family: 'Open Sans';
    font-size: 16px;
    height: 30px;
    text-align: center;
    width: 460px;
}
body {
    background-image: url("http://subtlepatterns.com/patterns/cream_pixels.png");
}
#container {
    background-color: #FFFFFF;
    border-radius: 10px 10px 10px 10px;
    box-shadow: 1px 1px 15px rgba(50, 50, 50, 0.75);
    margin-left: auto;
    margin-right: auto;
    margin-top: 40px;
    padding: 3px 10px 10px;
    width: 600px;
}

```

```html
<html><head>
<meta content="text/html;charset=UTF-8" http-equiv="Content-type">
<meta content="PastableTweets" property="og:title">
<meta content="http://blha303.com.au/blha303.png" property="og:image">
<meta content="PastableTweets" property="og:site_name">
<meta content="An easy-to-use website for producing single-line plaintext versions of linked tweets." property="og:description">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
function getTweet(url) {
 $('#outputbox').val("Loading...");
 var id = url.split("/").pop();
 if (id == "") { var id = url.slice(0, - 1).split("/").pop(); }
 $.get('gettweet.php?id=' + id, function(data) { $('#outputbox').val(data); $('#outputbox').select(); });
}
</script>
<title>Pastable Tweets</title>
</head>
<body onload="$('#urlfield').select();"><a href="https://github.com/blha303/PastableTweets"><img alt="Fork me on GitHub" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" style="position: absolute; top: 0; right: 0; border: 0;"></a>
<div id="container">
<h1>Pastable Tweets!</h1>
<p>Paste a direct link to a tweet in the box, hit Enter, then copy the text from the text area below it.<br>
We accept links in the form https://twitter.com/username/status/longlineofnumbers or even just the number at the end.<br>
If you have any questions about this free service, please tweet at <a href="https://twitter.com/blha303">@blha303</a> or email <a href="mailto:pastabletweets@blha303.com.au">pastabletweets@blha303.com.au</a></p>
<form method="GET" onsubmit="getTweet(document.getElementById('urlfield').value); return false;" action="gettweet.php">
<input type="text" value="https://twitter.com/blha303/status/371281788770844673" name="url" id="urlfield" size="67"> 
<input type="submit" class="button button-green" value="Get tweet">
</form><br>
<textarea readonly="readonly" id="outputbox" style="font-style: normal;" wrap="soft" cols="80" rows="6"></textarea>


</div>

</body></html>
```
