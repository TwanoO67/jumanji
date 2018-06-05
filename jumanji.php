<html>
    <body>
    <section>
    <div class="container">
        <div id="output"></div>
        <div class="avatar">

            <div class="skull">
            <div class="left-antenna"></div>
            <div class="left-ear"></div>
            <div class="left-cheek">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <div class="eye"></div>
            <div class="eye"></div>
            <div class="right-antenna"></div>
            <div class="right-ear"></div>
            <div class="right-cheek">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            </div>
            <div class="neck"></div>
            <!--div class="shoulders"></div-->
        </div>
    </div>
    <div class="container">
        <input type="text" id="input" placeholder="Ma réponse...">
    </div>
    </section>

    <style>
    * {
    box-sizing: border-box;
    }

    body {
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center; 
        height: 100vh;
        position: relative;
    }

    body:after {
        content: '';
        background: url('http://thepatternlibrary.com/img/u.png');
        position: absolute;  opacity: 0.7;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        position: absolute;
        z-index: -1;  
    }

    h1 {
        font-size: 28px;
    }

    .container {
        width: 500px;
        margin: 0 auto;
    } 

    input[type="text"] {
        width: 100%;
        padding: 25px;
        font-size: 18px;
        border-radius: 5px;
        border: none;
    }

    #output {
        background-color: white;
        padding: 20px;
        border-radius: 100px;
        margin-bottom: 20px;
        width: 100%;
        position: relative;
    }

    #output:before {
        content: '';
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        border-top: 40px solid white;
        position: absolute;
        bottom: -25px;
        left: 35%;
        -ms-transform: rotate(-25deg); /* IE 9 */
        -webkit-transform: rotate(-25deg); /* Chrome, Safari, Opera */
        transform: rotate(-25deg);
    }

    html {
        transform: scale(2)
    }

    /*ROBOT*/

    .eye
    {
        height:25px;
        width: 25px;
        background-color: #000;
        border-radius: 100%;
        position: relative;
        margin: 5px;
        padding: 3px;
        overflow: hidden; 
    }
    .eye::after
    {
        content: "";
        height:12px;
        width: 12px;
        background-color: #fff;
        border-radius: 100%;
        position: absolute;
        top: 1px;
        left: -1px;
        z-index: 1;
    }
    .eye::before
    {
        content: "";
        height:6px;
        width: 6px;
        background-color: #fff;
        border-radius: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        transform: translate(-50%, -50%);
    }
    .skull
    {
        display:flex;
        flex-direction: row;
        align-items: flex-end;
        justify-content: space-around;
        width: 140px;
        height: 100px;
        border-top-left-radius:70px;
        border-top-right-radius:70px;
        background-color: #f2f2f2;
        padding: 10px 20px;
        box-sizing: border-box;
        border-bottom: 14px solid #777;
        box-shadow: inset 10px 0px 0px #d4d4d4;
        position: relative;
        z-index: 2;
        margin-left: 30px;
    }
    .left-ear
    {
        width: 30px;
        height: 5px;
        background-color:#d4d4d4;
        position: absolute;
        top: 30px;
        left: -4px;
        transform: rotate(-55deg);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        z-index: 1;
    }
    .right-ear
    {
        width: 30px;
        height: 5px;
        background-color:#f2f2f2;
        position: absolute;
        top: 30px;
        right: -4px;
        transform: rotate(55deg);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        z-index: 1;
    }
    .dot
    {
        height:2px;
        width:2px;
        margin:1px 1px;
        border-radius: 100%;
        background-color:#444;
    }
    .right-cheek
    {
        position:absolute;
        right: 15px;
        bottom: 4px;
        display:flex;
        flex-direction: row;
        max-width: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }
    .left-cheek
    {
        position:absolute;
        left: 15px;
        bottom: 4px;
        display:flex;
        flex-direction: row;
        max-width: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }
    .left-antenna
    {
        height: 30px;
        width:5px;
        background-color: #000;
        position: absolute;
        left: 5px;
        top: 5px;
        border-radius: 40px;
    }
    .right-antenna
    {
        height: 30px;
        width:5px;
        background-color: #000;
        position: absolute;
        right: 5px;
        top: 5px;
        border-radius: 40px;
    }
    .neck
    {
        background-color:#000;
        height: 10px;
        width: 130px;
        margin-left:0px;
        position: relative;
        left: 35px;
    }
    .neck::before
    {
        content:"";
        width: 180px;
        height: 40px;
        background-color: #A31E29;
        position: absolute;
        top: -30px;
        left: -25px;
        z-index: -1;
        border-top-left-radius: 80px;
        border-top-right-radius: 80px;
    } 
    .shoulders
    {
        border-top: 3px solid #fff;
        background-color: #A31E29;
        width: 200px;
        height: 3px;
        position: relative;
        border-radius: 10px;  
    }
    .shoulders::before
    {
        content:"";
        background-color: #fff;
        width: 200px;
        height: 30px;
        position: absolute;
        top: 3px;
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
    }
    .shoulders::after
    {
        content:"";
        background-color: #A31E29;
        width: 200px;
        height: 3px;
        position: absolute;
        top: 27px;
    }



    </style>

    <script>
        var qNumb = 0;
        var output = document.getElementById('output');
        var input = document.getElementById('input');
        output.innerHTML = '<h1>Bonjour,<br/> Je suis votre nouvel assistant personnel !</h1>';
        setTimeout(function(){
            output.innerHTML = '<h1> Quelle salle souhaitez-vous visitez ?</h1>';
        }, 3000);

        var reponses = {
            "p14": ["Je parle beaucoup","et des fois pour rien dire..."],
            "p13": ["Mais des fois c'est trés important"]
        }

        function chatBot() {

            var txt = input.value.toLowerCase();
            if(typeof reponses[txt] !== 'undefined'){
                reponses[txt].forEach(function(element) {
                    output.innerHTML = '<h1>'+element+'</h1>';
                    sleep(3000);
                });

            }
            else{
                output.innerHTML = "<h1>Désolé, je n'ai pas compris... Vous disiez?</h1>";
            }
            
            /*if (qNumb == 6) {
                switch(input) {
                case "yes":
                output.innerHTML = '<h1>Awesome!</h1>';
                break;
                case "no":
                output.innerHTML = '<h1>Bummer! Sorry to hear that.</h1>';
                }
                input.value = "";
                question = '<h1>Well, I have to go. Have a great day. Hope to talk again!</h1>'; 
                setTimeout(timedQuestion, 3000);
            }*/
        
        }

        function sleep(milliseconds) {
            var start = new Date().getTime();
            for (var i = 0; i < 1e7; i++) {
                if ((new Date().getTime() - start) > milliseconds){
                break;
                }
            }
        }

        function timedQuestion() {
            output.innerHTML = question;
        }

        input.addEventListener('keypress', pressKey);

        function pressKey(event) {
        if (event.which == 13) {
            chatBot();
        }
        }
    </script>

</body>
</html>