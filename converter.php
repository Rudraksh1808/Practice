<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body style="background-color: #FFFADD;">

    <div style="width: 40%;

    border: 1px solid #212529;

    padding: 10px 15px 10px 15px;

    margin-left: 30%;

    background-color:#FFCC70;

    margin-top:5%;">

        <h3 style="text-align: center;">CURRENCY CONVERTER</h3>
        

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

        <div style="font-size:1.2em;">

            <label class="form-label" for="from">

                From:

            </label><br>

            <select class="form-select" id="from" name="from" required>

                <option value Selected>Select currency</option>

                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="INR">INR</option>
                <option value="AED">AED</option>
                <option value="AUD">AUD</option>
                <option value="ARS">ARS</option>
                <option value="BRL">BRL</option>
                <option value="BGN">BGN</option>
                <option value="CAD">CAD</option>
                <option value="BSD">BSD</option>
                <option value="CLP">CLP</option>
                <option value="CHF">CHF</option>
                <option value="COP">COP</option>
                <option value="CNY">CNY</option>
                <option value="DKK">DKK</option>
                <option value="CZK">CZK</option>
                <option value="DOP">DOP</option>
                <option value="FJD">FJD</option>
                <option value="GBP">GBP</option>
                <option value="EGP">EGP</option>
                <option value="HRK">HRK</option>
                <option value="GTQ">GTQ</option>
                <option value="HUF">HUF</option>
                <option value="HKD">HKD</option>
                <option value="IDR">IDR</option>
                <option value="ILS">ILS</option>
                <option value="ISK">ISK</option>
                <option value="JPY">JPY</option>
                <option value="KRW">KRW</option>
                <option value="KZT">KZT</option>
                <option value="MXN">MXN</option>
                <option value="MYR">MYR</option>
                <option value="NOK">NOK</option>
                <option value="NZD">NZD</option>
                <option value="PAB">PAB</option>
                <option value="PEN">PEN</option>
                <option value="PHP">PHP</option>
                <option value="PKR">PKR</option>
                <option value="PLN">PLN</option>
                <option value="PYG">PYG</option>
                <option value="RON">RON</option>
                <option value="RUB">RUB</option>
                <option value="SAR">SAR</option>
                <option value="SEK">SEK</option>
                <option value="SGD">SGD</option>
                <option value="THB">THB</option>
                <option value="TRY">TRY</option>
                <option value="TWD">TWD</option>
                <option value="UAH">UAH</option>
                <option value="UYU">UYU</option>
                <option value="VND">VND</option>
                <option value="ZAR">ZAR</option>

            </select>

        </div><br>

        <div style="font-size:1.2em;">

            <label class="form-label" for="to">

                To:

            </label><br>

            <select class="form-select" id="to" name="to" required>

                <option value selected>Select currency</option>

                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="INR">INR</option>
                <option value="AED">AED</option>
                <option value="AUD">AUD</option>
                <option value="ARS">ARS</option>
                <option value="BRL">BRL</option>
                <option value="BGN">BGN</option>
                <option value="CAD">CAD</option>
                <option value="BSD">BSD</option>
                <option value="CLP">CLP</option>
                <option value="CHF">CHF</option>
                <option value="COP">COP</option>
                <option value="CNY">CNY</option>
                <option value="DKK">DKK</option>
                <option value="CZK">CZK</option>
                <option value="DOP">DOP</option>
                <option value="FJD">FJD</option>
                <option value="GBP">GBP</option>
                <option value="EGP">EGP</option>
                <option value="HRK">HRK</option>
                <option value="GTQ">GTQ</option>
                <option value="HUF">HUF</option>
                <option value="HKD">HKD</option>
                <option value="IDR">IDR</option>
                <option value="ILS">ILS</option>
                <option value="ISK">ISK</option>
                <option value="JPY">JPY</option>
                <option value="KRW">KRW</option>
                <option value="KZT">KZT</option>
                <option value="MXN">MXN</option>
                <option value="MYR">MYR</option>
                <option value="NOK">NOK</option>
                <option value="NZD">NZD</option>
                <option value="PAB">PAB</option>
                <option value="PEN">PEN</option>
                <option value="PHP">PHP</option>
                <option value="PKR">PKR</option>
                <option value="PLN">PLN</option>
                <option value="PYG">PYG</option>
                <option value="RON">RON</option>
                <option value="RUB">RUB</option>
                <option value="SAR">SAR</option>
                <option value="SEK">SEK</option>
                <option value="SGD">SGD</option>
                <option value="THB">THB</option>
                <option value="TRY">TRY</option>
                <option value="TWD">TWD</option>
                <option value="UAH">UAH</option>
                <option value="UYU">UYU</option>
                <option value="VND">VND</option>
                <option value="ZAR">ZAR</option>


            </select>

        </div><br>

        <div style="font-size:1.2em;">

        <label for="amount" class="form-label" >Amount:</label>

        <input class="form-control" type="text" id="amount" name="amount" placeholder="Enter amount" required>

        <div><br>

        <input type="submit" value="Convert Currency" class="btn btn-dark w-100">

    </form>

    </div>

 

    <?php

 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

 

    // Retrieve user input from the form

    $amount = $_POST['amount'];

    $fromCurrency = $_POST['from'];

    $toCurrency = $_POST['to'];

    // Create a cURL request to fetch the conversion data

    $ch = curl_init();

    $url = "https://v6.exchangerate-api.com/v6/d5ecfe443c36ff29603803aa/pair/$fromCurrency/$toCurrency/$amount";

 

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_URL, $url);

    $result = curl_exec($ch);

    curl_close($ch);

 

    // Decode the JSON response

 

    $jsonObj = json_decode($result);

 

    // Check if the conversion result is available

    if (isset($jsonObj->conversion_result)) {

 

        $conversionResult = $jsonObj->conversion_result;

        echo "<h2>Conversion Result:</h2>";

        echo "<p>$amount $fromCurrency is equal to $conversionResult $toCurrency</p>";

 

    } else {

 

        echo "<h2>Error:</h2>";

        echo "<p>Unable to fetch conversion rate. Please check your input and try again.</p>";

 

    }

 

} else {

 

    // Handle cases where the form is not submitted

    echo "<h2>Error:</h2>";

    echo "<p>Invalid request.</p>";

 

}

?>

</body>

</html>