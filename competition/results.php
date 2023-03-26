<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,600&display=swap" rel="stylesheet">

        <meta name="description" content="JBOI 2022 - Results">
        <meta name="keywords" content="Junior Balkan Olympiad in Informatics, JBOI, jboi, Regina Maria Dorohoi, Regina Maria, jboi, jboi2022, JBOI2022, jboi-2022, olimpiada, Dorohoi, concurs, Balka, balcaniada, juniori, junior, boi, regina dorohoi, jboi dorohoi, olimpiada dorohoi, dorohoi">
        <meta name = "author" content = "Neauna Madalin">
        <link rel="icon" href="../../image/icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../../js/script.js"></script>
        
        <link rel="stylesheet" href="../../style/navbar.css">
        <link rel="stylesheet" href="../../competition/style/results.css">
        <title>JBOI - 2022</title>
        <script> 
            $(function(){
            $("#navbar").load("../../include/navbar.html"); 
            });
        </script> 
    </head>
    <body>
        <div class = "navbar" id = "navbar"></div>

        <div class="contain">
            <h1 style = "text-align: left; margin-bottom: 50px; color: black; font-size: 50px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Results</h1>
            
            <table class="styled-table" id = "scor_elevi">
            <?php
                /*
                $p = 1;
                $file = fopen($_SERVER['DOCUMENT_ROOT'] . '/document/test.csv' , "r");
                while (($data = fgetcsv($file)) !== false) {
                    $contor = 1;
                    if ($p == 1)
                    {
                        echo "<thead><tr>";
                        foreach ($data as $i) {

                            echo "<th>".htmlspecialchars($i)."</th>";
                        }
                        echo "</tr></thead> \n";
                        $p = 2;
                    }
                    else
                    {
                        echo "<tr>";
                        foreach ($data as $i) {
                            echo "<td>" . htmlspecialchars($i) 
                                . "</td>";
                        }
                        echo "</tr> \n";
                    }
                 }
           
                fclose($file);
                */
                 
            ?>
            </table>
        </div>
        <script>
            let cols = 3;
            let colf = 8;
            for(let i = 1; i < document.getElementById("scor_elevi").rows.length; i++)
            {
                for(let j = cols; j <= colf; j++){
                    if (document.getElementById("scor_elevi").rows[i].cells[j].innerHTML <= 25)
                    {
                        document.getElementById("scor_elevi").rows[i].cells[j].style.backgroundColor = "#fc3f3f";    
                    }
                    else if (document.getElementById("scor_elevi").rows[i].cells[j].innerHTML <= 50)
                    {
                        document.getElementById("scor_elevi").rows[i].cells[j].style.backgroundColor = "#f57c2c";    
                    }
                    else if (document.getElementById("scor_elevi").rows[i].cells[j].innerHTML <= 75)
                    {
                        document.getElementById("scor_elevi").rows[i].cells[j].style.backgroundColor = "#e1ed3e";    
                    }
                    else if (document.getElementById("scor_elevi").rows[i].cells[j].innerHTML <= 100)
                    {
                        document.getElementById("scor_elevi").rows[i].cells[j].style.backgroundColor = "#82db2c";    
                    }
                }
            }
            for(let i = 1; i < document.getElementById("scor_elevi").rows.length; i++)
            {
                if (document.getElementById("scor_elevi").rows[i].cells[9].innerHTML <= 150)
                {
                    document.getElementById("scor_elevi").rows[i].cells[9].style.backgroundColor = "#fc3f3f";    
                }
                else if (document.getElementById("scor_elevi").rows[i].cells[9].innerHTML <= 300)
                {
                    document.getElementById("scor_elevi").rows[i].cells[9].style.backgroundColor = "#f57c2c";    
                }
                else if (document.getElementById("scor_elevi").rows[i].cells[9].innerHTML <= 450)
                {
                    document.getElementById("scor_elevi").rows[i].cells[9].style.backgroundColor = "#e1ed3e";    
                }
                else if (document.getElementById("scor_elevi").rows[i].cells[9].innerHTML <= 600)
                {
                    document.getElementById("scor_elevi").rows[i].cells[9].style.backgroundColor = "#82db2c";    
                }
            }
            
        </script>
    </body>
</html>