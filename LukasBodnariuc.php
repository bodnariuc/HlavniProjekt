<html>
    <head>
        <title>Tady nikdy web nebyl, a ani nebude</title>
        <link rel="stylesheet" type="text/css" href='CSS.html'>
    </head>
    <body>
        <h1>Zkouska nadpisu 1</h1>
        <h2 align="center">Zkouska webu</h2>
        <a href="https://www.seznam.cz">seznam</a>
        <p><i>Nejakej fakt nepodstatnej text</i></p>
        <a href="Teemo.png"><img src="Teemo.png"></a>
        <br>
        <table border="2">
            <tr>
                <td width="100"><b>1</b></td>
                <td width="100"><b>2</b></td>
                <td width="100"><b>3</b></td>
            </tr>
            <tr>
                <td width="100">10</td>
                <td width="100">20</td>
                <td width="100">30</td>
            </tr>
        </table>
        <br>
        <table border="3">
            <tr>
                <td width="200">A</td>
                <td width="200">B</td>
                <td width="200">C</td>
                <td width="200">D</td>
            </tr>     
        </table>
        <br>
        <span>Byl jsem tu a prijdu zas, s pozdravem, Fantomas ;)</span>
        <p>Prihlaseni na PornHub:</p>
        <dl>
            <dt>Jmeno:</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>Prijmeni:</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>Vek:</dt>
            <dd><input type="text"></dd>
        </dl>
        <dl>
            <dt>Klikni pokud te skola nebavi</dt>
            <dd><input type="button">Zde klikni!</dd>
        </dl>
        <dl>
            <dt>Tlacitko</dt>
            <dd><input type="radio">Zaskrtni mne</dd>
        </dl>
        <dl>
            <dt>Pohlavi</dt>
            <dd><input type="checkbox">Muz</dd>
            <dd><input type="checkbox">Zena</dd>
            <dd><input type="checkbox">Buzerant</dd>
        </dl>
        <br>
        <h3>Seznam moznosti:</h3>
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
        <br>
        <form action="index.html" method="POST">
            Vyberte nejoblibenejsi OS. <br>
            <select name="Seznam OS" size="1">
                <option value="Windows">Windows</option>
                <option value="Linux">Linux</option>
                <option value="Mac">Mac</option>
            </select>
            <br>
            <textarea rows="5" cols="15" name="Misto na psani">Duvod proc zrovna tento OS</textarea>
            <br>
            Jak moc tento OS doporucujete? <br>
            <input type="checkbox">1 <br>
            <input type="checkbox">2 <br>
            <input type="checkbox">3 <br>
            <input type="checkbox">4 <br>
            <input type="checkbox">5 <br>
            Dovedl vas k pouzivani tohoto OS nekdo?
            <input type="radio">ano
            <input type="radio">ne <br>
            <input type="button">Jen tak klikni! ;) <br>
            <input type="file"> <br>
            <input type="text">Kratky popis... <br>
            Zde zadejte sve prihlasovaci udaje: <br>
            Jmeno: <input type="text"> <br>
            Heslo: <input type="password"> <br>
            <input type=submit value="Odeslat formular">
        </form>

        <?PHP
        echo "lek";

        print_r("lek");

        var_dump("lek");

        echo "\$promena";
        echo 'a href=\"index.php\">Homepage</a>';

        $a = 2;
        $b = 3;
        $c = '8';

        var_dump($a == $b);
        var_dump($b === $c);
        var_dump($a === $b);
        var_dump($a + $b);
        var_dump($a - $b);
        var_dump($a * $b);
        var_dump($a / $b);
        var_dump($a++);
        var_dump($b--);
        var_dump($a += $b);
        var_dump($a -= $b);
        var_dump($a *= $b);
        var_dump($a /= $b);
        var_dump($a != $b);
        var_dump($a < $b);
        var_dump($a > $b);
        var_dump($a || $b);
        var_dump($a && $b);
        var_dump(!$a);
        ?>
        phpinfo();
    </body>
</html>
