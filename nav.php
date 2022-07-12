
<?php 
$output="";
if(isset($_GET['go']))
{
    $p = $_GET['p'];
    
    if(strlen($p) != 3)
    {
        $output = "";
    }
    else if($p == "EUR")
    {
        $output = number_format(689.70,2);
    }
    else if($p == "GBP")
    {
        $output = number_format(650.39,2);
    }
    else if($p == "INR")
    {
        $output = number_format(5.54,2);
    }
    else if($p == "JPY")
    {
        $output = number_format(3.75,2);
    }
    else if($p == "USD")
    {
        $output = number_format(509.66,2);
    }
    else if($p == "ZAR")
    {
        $output = number_format(27.94,2);
    }
    else
    {
        $output = "NA";
    }
    
        echo $output;
}

$output1="";
if(isset($_GET['go']))
{
$q = $_GET['q'];
    
    if(strlen($q) != 3)
    {
        $output1 = "";
    }
    else if($q == "BCH")
    {
        $output1 = number_format(656860);
    }
    else if($q == "BTC")
    {
        $output1 = number_format(47951998);
    }
    else if($q == "ETH")
    {
        $output1 = number_format(3141527);
    }
    else if($q == "LTC")
    {
        $output1 = number_format(180486);
    }
    else if($q == "XRP")
    {
        $output1 = number_format(1193);
    }
    else
    {
        $output1 = "NA";
    }
}

?>