<!DOCTYPE html>
<html lang="en">>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>

<div class="w3-container">
    <h2>W3.CSS Modal</h2>
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Open Modal</button>

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
            <div class="w3-container">
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <p>Some text. Some text. Some text.</p>
                <p>Some text. Some text. Some text.</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
