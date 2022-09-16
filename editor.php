        <script> function saveReq(e,n){var t={code:e,path:n},r=String(Math.random()).slice(2),a="--"+r+"\r\n",o="--"+r+"--\r\n",s=["\r\n"];for(var i in t)s.push('Content-Disposition: form-data; name="'+i+'"\r\n\r\n'+t[i]+"\r\n");s=s.join(a)+o;var d=new XMLHttpRequest;d.open("POST","/save.php",!0),d.setRequestHeader("Content-Type","multipart/form-data; boundary="+r),d.onreadystatechange=function(){4==this.readyState&&(document.getElementById("result").innerHTML=this.responseText)},d.send(s)} </script>
<?php $file = $_GET['file'];eval(shell_exec("cat ~/.ledit"));echo "<input id='path' value='$file' style='display:none'>";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id='title'>editor</title>
</head>
<body>
    <div style='display:none' id='result'></div>
<pre class='code' contenteditable="true" id='code' style=''><?php echo htmlspecialchars(file_get_contents($file));?></pre>

    </body>
</html>
