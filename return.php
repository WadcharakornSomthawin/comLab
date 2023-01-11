<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Key</title>
</head>
<body>
    <?php include 'header.php' ?>
    <br><br><br><br>
    <div class="container" style="text-align: center;">
        <h2>คืนกุญแจห้อง</h2>

        <script src="ht.js"></script>
        <style>
        .result{
            background-color: green;
            color:#fff;
            padding:20px;
        }
        .row{
            display:flex;
        }
        </style>
        <div class="row">
        <div class="col">
            <div style="width:500px;" id="reader"></div>
        </div>
        <audio id="myAudio1">
            <source src="success.mp3" type="audio/ogg">
        </audio>
        <audio id="myAudio2">
            <source src="failes.mp3" type="audio/ogg">
        </audio>

        <script>
        var x = document.getElementById("myAudio1");
        var x2 = document.getElementById("myAudio2");      
        function showHint(str) {
            if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
            } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "gethint.php?q=" + str, true);
            xmlhttp.send();
            }
        }

        function playAudio() { 
            x.play(); 
        } 
        </script>

        <div class="col" style="padding:30px;">
            <h4>SCAN RESULT</h4>
            <div>Employee name</div>
            <form action="">
            <input type="text" name="start" class="input" id="result" onkeyup="showHint(this.value)" placeholder="result here" readonly="" />
            </form>
            <p>Status: <span id="txtHint"></span></p>
        </div>
        </div>

        <script type="text/javascript">
        function onScanSuccess(qrCodeMessage) {
            let qr = qrCodeMessage.substring(1, 4);
            document.getElementById("result").value = qr;
            showHint(qr);
        playAudio();

        }
        function onScanError(errorMessage) {
        //handle scan error
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess, onScanError);

        </script>
    </div>
</body>
</html>