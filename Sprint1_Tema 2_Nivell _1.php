<?PHP

/*
Exercici 1
Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.*/


$integer = 2;
$double = 2.5;
$string = "Hola em dic Oriol";
$boolean = true;

echo ("<p>$integer</p>");
echo ("<p>$double</p>");
echo ("<p>$string</p>");
echo ("<p>$boolean</p>");


define("NOM", "Oriol");
echo ('<h1>'. NOM .'</h1>');

/*
Exercici 2
Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat:

Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla l'string en ordre invers de caràcters.
Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.*/

$hello = "Hello, World!"; 
echo ("<p>$hello</p>");

$upperHello = strtoupper($hello);
echo ("<p>Majúscules: $upperHello</p>");

$longitud = strlen($hello);
echo ("<p>Longitud: $longitud</p>");

$revers = strrev($hello);
echo ("<p>Revers: $revers</p>");

$newString = "Aquest és el curs de PHP";
$concatenacio = $hello . " " . $newString;
echo ("<p>Concatenació: $concatenacio</p>");

/*
- Exercici 3
a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:

El valor de cada variable.
La suma.
La resta.
El producte.
El mòdul.
Per N i M realitzaràs el mateix.

Per a totes les variables (X, Y, N, M):

El doble de cada variable.
La suma de totes les variables.
El producte de totes les variables.
b) Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.*/


$X = 10;
$Y = 5;
$N = 3.5;
$M = 1.2;

echo ("<p>X = $X, Y = $Y</p>");
echo ("<p>Suma: " . ($X + $Y) . "</p>");
echo ("<p>Resta: " . ($X - $Y) . "</p>");
echo ("<p>Producte: " . ($X * $Y) . "</p>");
echo ("<p>Mòdul: " . ($X % $Y) . "</p>");

echo ("<p>N = $N, M = $M</p>");
echo ("<p>Suma: " . ($N + $M) . "</p>");
echo ("<p>Resta: " . ($N - $M) . "</p>");
echo ("<p>Producte: " . ($N * $M) . "</p>");

echo ("<p>Doble de X: " . ($X * 2) . "</p>");
echo ("<p>Doble de Y: " . ($Y * 2) . "</p>");
echo ("<p>Doble de N: " . ($N * 2) . "</p>");
echo ("<p>Doble de M: " . ($M * 2) . "</p>");
echo ("<p>Suma de totes: " . ($X + $Y + $N + $M) . "</p>");
echo ("<p>Producte de totes: " . ($X * $Y * $N * $M) . "</p>");

function Calculadora($a, $b, $operacio) {
    if ($operacio == "suma") {
        return $a + $b;
    } elseif ($operacio == "resta") {
        return $a - $b;
    } elseif ($operacio == "multiplicacio") {
        return $a * $b;
    } elseif ($operacio == "divisio" && $b != 0) {
        return $a / $b;
    } else {
        return "Operació no vàlida o divisió per zero.";
    }
}

echo ("<p>Suma: " . Calculadora(10, 5, 'suma') . "</p>");
echo ("<p>Resta: " . Calculadora(10, 5, 'resta') . "</p>");
echo ("<p>Multiplicació: " . Calculadora(10, 5, 'multiplicacio') . "</p>");
echo ("<p>Divisió: " . Calculadora(10, 5, 'divisio') . "</p>");

/*
- Exercici 4
Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas.*/


function comptar($limit = 10, $pas = 1) {
    for ($i = 0; $i <= $limit; $i += $pas) {
        echo $i . "\n";
    }
}

comptar(20, 3);
echo "\n";

/*
Exercici 5
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.*/

function verificarNota($nota) {
    if ($nota >= 60) {
        return "Primera Divisió";
    } elseif ($nota >= 45) {
        return "Segona Divisió";
    } elseif ($nota >= 33) {
        return "Tercera Divisió";
    } else {
        return "Reprovat";
    }
}

echo ("<p>Nota 75: " . verificarNota(75) . " </p>");
echo ("<p>Nota 50: " . verificarNota(50) . "</p>");
echo ("<p>Nota 40: " . verificarNota(40) . "</p>");
echo ("<p>Nota 30: " . verificarNota(30) . "</p>");

/*
Exercici 6
Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.

Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/

function isBitten() {
    return rand(0, 1) == 1;
}

echo "Charlie em mossegarà el dit? " . (isBitten() ? "Sí" : "No") . "\n";


?>




