<!-- https://codepen.io/lushen/pen/QNvVWp -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Textile.js | A more easy way to process text within HTML5</title>
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body class=".jumanji">
  <br><br><br><br><br>
    <h1>Textile<small style="color:#545454">.<sub>js</sub></small></h1>
    <h2>"A more easy way to process text within HTML5."</h2>
    <br><br>
    <script src="https://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js'></script>

<style>
@font-face {
    font-family: 'Tribeca'; /*a name to be used later*/
    src: url('./Tribeca.ttf'); /*URL to font*/
}

.jumanji {
    font-family: 'Tribeca';
    background-color: black;
    color: green;
}
</style>

<script>
//on ready
$(()=>{
    var node = document.querySelector('h2');
    var text = new T(node);

    function random(min, max) {
        return (Math.random() * (max - min)) + min;
    }

    text.chars.map(function(v, i){
        TweenMax.from(v, 2.5, {
            opacity: 0,
            x: random(-500, 500),
            y: random(-500, 500),
            z: random(-500, 500),
            scale: .1,
            delay: i * .02,
            yoyo: true
        });
    });
})
</script>
</body>
</html>