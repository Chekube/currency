
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURRENCY</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php 
        include("nav.php");  
    ?>
        <header><h1>CURRENCY</h1></header>
       <form action="" method="get" autocomplete="off">
        <div class="container">
           <h2>Fiat Currency</h2>
           <div class="currency">
                <input type="search" name="p" placeholder="search fiat" list="find">
                <datalist id="find">
                    <option value="EUR"/>
                    <option value="GBP"/>
                    <option value="INR"/>
                    <option value="JPY"/>
                    <option value="USD"/>
                    <option value="ZAR"/>
                </datalist> <br/>
                <input type="text" value=" &#8358; <?php echo $output; ?>" readonly> <br/>
                <button type="submit" name="go">Submit</button>
           </div>


            <h2>Crypto Currency</h2>
           <div class="currency">
                    <input type="search" name="q" placeholder="search crypto" list="me">
                    <datalist id="me">
                        <option value="BCH"/>
                        <option value="BTC"/>
                        <option value="ETH"/>
                        <option value="LTC"/>
                        <option value="XRP"/>
                    </datalist> <br/>
                    <input type="text" value=" &#8358; <?php echo $output1; ?>" readonly/> <br/>
                    <button type="submit" name="go">Submit</button>
           </div>
        </div>
       
       </div>
    </form>
   <footer></footer>
    
</body>
</html>