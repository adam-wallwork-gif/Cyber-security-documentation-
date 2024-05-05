<!DOCTYPE html>
<html lang="en-gb">
<!--Crypto coin api data-->
<?php $print_coin = json_decode(file_get_contents("https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LTC,XMR,DOGE&tsyms=GBP,USD,CNY,AUD,RON,CHF,EUR,JOD,OMR,KWD,RUB,INR"), true); // (cryptocompare, n.d) ?>

<head>
    <title>Crypto Chads | Home</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="description" content="Crypto Chads is a news and crypto analysis website focused on the latest developments in the cryptocurrency scene">
    <meta name="title" content="Crypto Chads">
</head>

<body>
    <header>
        <!--Main logo-->
        <a href="/"><img src="img/logo.png" alt="Crypto Chads Logo"></a>
        <p style="text-align: center; color: white;">(fontbolt, n.d)</p>
        <!--Navbar-->
        <div class="nav-container">
            <nav class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="faq.html">FaQ</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!--Crypto coin tracker title-->
        <h1 class="home-title">Crypto coin price tracker</h1>
        <!--Crypto coin price table-->
        <table class="coin-table">
            <tr>
                <td><b>Price value</b></td>
                <th><img src="img/coins/bitcoin-btc-logo.png" alt="Bitcoin image" class="crypto-coin-image">Bitcoin (BTC)</th>
                <th><img src="img/coins/ethereum-eth-logo.png" alt="Ethereum image" class="crypto-coin-image">Ethereum (ETH)</th>
                <th><img src="img/coins/monero-xmr-logo.png" alt="Monero image" class="crypto-coin-image">Monero (XMR)</th>
                <th><img src="img/coins/litecoin-ltc-logo.png" alt="Litecoin image" class="crypto-coin-image">Litecoin (LTC)</th>
                <th><img src="img/coins/dogecoin-doge-logo.png" alt="Dogecoin image" class="crypto-coin-image">Dogecoin (DOGE)</th>
            </tr>
            <!--Great british pound fiat currency (GBP)-->
            <tr>
                <td>GBP</td>
                <td>
                    <!--Bitcoin (BTC) GBP price value-->
                    <?php echo $print_coin['BTC']['GBP']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) GBP price value-->
                    <?php echo $print_coin['ETH']['GBP']; ?>
                </td>
                <td>
                    <!--Monero (XMR) GBP price value-->
                    <?php echo $print_coin['XMR']['GBP']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) GBP price value-->
                    <?php echo $print_coin['LTC']['GBP']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) GBP price value-->
                    <?php echo $print_coin['DOGE']['GBP']; ?>
                </td>
            </tr>
            <!--United states dollar fiat currency (USD)-->
            <tr>
                <td>USD</td>
                <td>
                    <!--Bitcoin (BTC) USD price value-->
                    <?php echo $print_coin['BTC']['USD']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) USD price value-->
                    <?php echo $print_coin['ETH']['USD']; ?>
                </td>
                <td>
                    <!--Monero (XMR) USD price value-->
                    <?php echo $print_coin['XMR']['USD']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) USD price value-->
                    <?php echo $print_coin['LTC']['USD']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) USD price value-->
                    <?php echo $print_coin['DOGE']['USD']; ?>
                </td>
            </tr>
            <!--Chinese fiat currency (CNY)-->
            <tr>
                <td>CNY</td>
                <td>
                    <!--Bitcoin (BTC) CNY price value-->
                    <?php echo $print_coin['BTC']['CNY']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) CNY price value-->
                    <?php echo $print_coin['ETH']['CNY']; ?>
                </td>
                <td>
                    <!--Monero (XMR) CNY price value-->
                    <?php echo $print_coin['XMR']['CNY']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) CNY price value-->
                    <?php echo $print_coin['LTC']['CNY']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) CNY price value-->
                    <?php echo $print_coin['DOGE']['CNY']; ?>
                </td>
            </tr>
            <!--Australian dollar fiat currency (AUD)-->
            <tr>
                <td>AUD</td>
                <td>
                    <!--Bitcoin (BTC) AUD price value-->
                    <?php echo $print_coin['BTC']['AUD']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) AUD price value-->
                    <?php echo $print_coin['ETH']['AUD']; ?>
                </td>
                <td>
                    <!--Monero (XMR) AUD price value-->
                    <?php echo $print_coin['XMR']['AUD']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) AUD price value-->
                    <?php echo $print_coin['LTC']['AUD']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) AUD price value-->
                    <?php echo $print_coin['DOGE']['AUD']; ?>
                </td>
            </tr>
            <!--Romanian fiat currency (RON)-->
            <tr>
                <td>RON</td>
                <td>
                    <!--Bitcoin (BTC) RON price value-->
                    <?php echo $print_coin['BTC']['RON']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) RON price value-->
                    <?php echo $print_coin['ETH']['RON']; ?>
                </td>
                <td>
                    <!--Monero (XMR) RON price value-->
                    <?php echo $print_coin['XMR']['RON']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) RON price value-->
                    <?php echo $print_coin['LTC']['RON']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) RON price value-->
                    <?php echo $print_coin['DOGE']['RON']; ?>
                </td>
            </tr>
            <!--Swiss Franc fiat currency (CHF)-->
            <tr>
                <td>CHF</td>
                <td>
                    <!--Bitcoin (BTC) CHF price value-->
                    <?php echo $print_coin['BTC']['CHF']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) CHF price value-->
                    <?php echo $print_coin['ETH']['CHF']; ?>
                </td>
                <td>
                    <!--Monero (XMR) CHF price value-->
                    <?php echo $print_coin['XMR']['CHF']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) CHF price value-->
                    <?php echo $print_coin['LTC']['CHF']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) CHF price value-->
                    <?php echo $print_coin['DOGE']['CHF']; ?>
                </td>
            </tr>
            <!--Euro fiat currency (EUR)-->
            <tr>
                <td>EUR</td>
                <td>
                    <!--Bitcoin (BTC) EUR price value-->
                    <?php echo $print_coin['BTC']['EUR']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) EUR price value-->
                    <?php echo $print_coin['ETH']['EUR']; ?>
                </td>
                <td>
                    <!--Monero (XMR) EUR price value-->
                    <?php echo $print_coin['XMR']['EUR']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) EUR price value-->
                    <?php echo $print_coin['LTC']['EUR']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) EUR price value-->
                    <?php echo $print_coin['DOGE']['EUR']; ?>
                </td>
            </tr>
            <!--Jordanian dinar fiat currency (JOD)-->
            <tr>
                <td>JOD</td>
                <td>
                    <!--Bitcoin (BTC) JOD price value-->
                    <?php echo $print_coin['BTC']['JOD']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) JOD price value-->
                    <?php echo $print_coin['ETH']['JOD']; ?>
                </td>
                <td>
                    <!--Monero (XMR) JOD price value-->
                    <?php echo $print_coin['XMR']['JOD']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) JOD price value-->
                    <?php echo $print_coin['LTC']['JOD']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) JOD price value-->
                    <?php echo $print_coin['DOGE']['JOD']; ?>
                </td>
            </tr>
            <!--Omani rial fiat currency (OMR)-->
            <tr>
                <td>OMR</td>
                <td>
                    <!--Bitcoin (BTC) price value-->
                    <?php echo $print_coin['BTC']['OMR']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) price value-->
                    <?php echo $print_coin['ETH']['OMR']; ?>
                </td>
                <td>
                    <!--Monero (XMR) price value-->
                    <?php echo $print_coin['XMR']['OMR']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) price value-->
                    <?php echo $print_coin['LTC']['OMR']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) price value-->
                    <?php echo $print_coin['DOGE']['OMR']; ?>
                </td>
            </tr>
            <!--Kuwaiti dinar fiat currency (KWD)-->
            <tr>
                <td>KWD</td>
                <td>
                    <!--Bitcoin (BTC) price value-->
                    <?php echo $print_coin['BTC']['KWD']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) price value-->
                    <?php echo $print_coin['ETH']['KWD']; ?>
                </td>
                <td>
                    <!--Monero (XMR) price value-->
                    <?php echo $print_coin['XMR']['KWD']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) price value-->
                    <?php echo $print_coin['LTC']['KWD']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) price value-->
                    <?php echo $print_coin['DOGE']['KWD']; ?>
                </td>
            </tr>
            <!--Russian ruble fiat currency (RUB)-->
            <tr>
                <td>RUB</td>
                <td>
                    <!--Bitcoin (BTC) price value-->
                    <?php echo $print_coin['BTC']['RUB']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) price value-->
                    <?php echo $print_coin['ETH']['RUB']; ?>
                </td>
                <td>
                    <!--Monero (XMR) price value-->
                    <?php echo $print_coin['XMR']['RUB']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) price value-->
                    <?php echo $print_coin['LTC']['RUB']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) price value-->
                    <?php echo $print_coin['DOGE']['RUB']; ?>
                </td>
            </tr>
            <!--Indian rupee fiat currency (INR)-->
            <tr>
                <td>INR</td>
                <td>
                    <!--Bitcoin (BTC) price value-->
                    <?php echo $print_coin['BTC']['INR']; ?>
                </td>
                <td>
                    <!--Ethereum (ETH) price value-->
                    <?php echo $print_coin['ETH']['INR']; ?>
                </td>
                <td>
                    <!--Monero (XMR) price value-->
                    <?php echo $print_coin['XMR']['INR']; ?>
                </td>
                <td>
                    <!--Litecoin (LTC) price value-->
                    <?php echo $print_coin['LTC']['INR']; ?>
                </td>
                <td>
                    <!--Dogecoin (DOGE) price value-->
                    <?php echo $print_coin['DOGE']['INR']; ?>
                </td>
            </tr>
        </table>
        <p style="text-align: center; color: white;">(cryptologos, n.d)</p>
        <!--Home content-->
        <div class="home-container">
            <div class="home-card">
                <div class="home-content">
                    <p>We provide up to date and relevant information for the listed coins current marktet value for our international users the currency</p>
                    <p>information we provide and support is, Bitcoin <img src="img/coins/bitcoin-btc-logo.png" alt="Bitcoin image" class="crypto-coin-image">Ethereum <img src="img/coins/ethereum-eth-logo.png" alt="Ethereum image" class="crypto-coin-image">Monero <img src="img/coins/monero-xmr-logo.png" alt="Monero image" class="crypto-coin-image"> Litecoin <img src="img/coins/litecoin-ltc-logo.png" alt="Litecoin image" class="crypto-coin-image"> and Dogecoin <img src="img/coins/dogecoin-doge-logo.png" alt="Doge image" class="crypto-coin-image">You can</p>
                    <p>use this resource to stay up to date with the latest market trends on these five different crypto coins. It works by showing</p>
                    <p>the value of one crypto coin against its current fiat value. As shown with the current price value of Bitcoin (BTC) price value <img src="img/coins/bitcoin-btc-logo.png" alt="Bitcoin image" class="crypto-coin-image"></p>
                </div>
            </div>
            <p style="text-align: center; color: white;">(cryptologos, n.d)</p>
        </div>
        <!--References-->
        <div class="ref-container" style="text-align: left;">
            <div class="ref-card">
                <h2 style="text-align: center;">References</h2>
                <p>cryptocompare, (n.d). Crypto API. https://min-api.cryptocompare.com/data/pricemulti?fsyms=</p>
                <p>cryptologos, (n.d). Bitcoin (BTC) price value PNG and SVG Logo Download. https://cryptologos.cc/bitcoin</p>
                <p>cryptologos, (n.d). Ethereum (ETH) price value PNG and SVG Logo Download. https://cryptologos.cc/ethereum</p>
                <p>cryptologos, (n.d). Monero (XMR) price value PNG and SVG Logo Download. https://cryptologos.cc/monero</p>
                <p>cryptologos, (n.d). Litecoin (LTC) price value PNG and SVG Logo Download. https://cryptologos.cc/litecoin</p>
                <p>cryptologos, (n.d). Dogecoin (DOGE) price value PNG and SVG Logo Download. https://cryptologos.cc/dogecoin</p>
                <p>fontbolt, (n.d). New York Times Font. https://www.fontbolt.com/font/the-new-york-times-font</p>
                <p>w3schools, (n.d). How TO - Fixed Footer. https://www.w3schools.com/howto/howto_css_fixed_footer.asp</p>
            </div>
        </div>
    </main>
    <!--Footer-->
    <div class="footer-container">
        <div class="footer">
            <footer>
                <p>© 2023: <a href="/">Crypto Chads <img src="img/favicon.ico" alt="Crypto Chads footer logo" class="footer-image"></a>(fontbolt, n.d)</p>
            </footer>
        </div>
    </div>
</body>

</html>
