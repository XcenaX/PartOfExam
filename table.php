<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
    <script src="jquery.min.js"></script>
</head>
<body>

<script>
    function tdClick(prop){
        prop.style.backgroundColor == "black" ? prop.style.backgroundColor = "white": prop.style.backgroundColor = "black";
    }
</script>

<div class="main">
    <table>
        <tbody>
            <?php
                for($y = 0; $y < $_GET["rows"]; $y++) :?>
                <tr>
                    <?php
                    for($x = 0; $x < $_GET['cols']; $x++) :?>
                    <td data-x="<?=$x?>" data-y="<?=$y?>" onclick="tdClick(this)"></td>
                    <?php endfor; ?>
                </tr>
                <?php endfor; ?>
        </tbody>
    </table>
    <button class="generateButton">
        Сгенерировать
    </button>
</div>

<script>
let cells = $("td");
$(cells).each(function (i, item) {
    $(item).data(x);
});
</script>
    
</body>
</html>