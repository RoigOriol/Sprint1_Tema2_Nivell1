<?PHP

/*
Exercici 1
Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.*/

$integer = 2;
$double = 2.5;
$string = "Hola em dic Oriol";
$boolean = true;

echo ("$integer<br>");
echo ("$double<br>");
echo ("$string<br>");
echo ("$boolean<br>");

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
echo ("$hello<br>");

$upperHello = strtoupper($hello);
echo ("Majúscules: $upperHello<br>");

$longitud = strlen($hello);
echo ("Longitud: $longitud<br>");

$revers = strrev($hello);
echo ("Revers: $revers<br>");

$newString = "Aquest és el curs de PHP";
$concatenacio = $hello . " " . $newString;
echo ("Concatenació: $concatenacio<br>");

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

echo ("X = $X, Y = $Y<br>");
echo ("Suma: " . ($X + $Y) . "<br>");
echo ("Resta: " . ($X - $Y) . "<br>");
echo ("Producte: " . ($X * $Y) . "<br>");
echo ("Mòdul: " . ($X % $Y) . "<br>");

echo ("N = $N, M = $M<br>");
echo ("Suma: " . ($N + $M) . "<br>");
echo ("Resta: " . ($N - $M) . "<br>");
echo ("Producte: " . ($N * $M) . "<br>");

echo ("Doble de X: " . ($X * 2) . "<br>");
echo ("Doble de Y: " . ($Y * 2) . "<br>");
echo ("Doble de N: " . ($N * 2) . "<br>");
echo ("Doble de M: " . ($M * 2) . "<br>");
echo ("Suma de totes: " . ($X + $Y + $N + $M) . "<br>");
echo ("Producte de totes: " . ($X * $Y * $N * $M) . "<br>");

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

echo ("Suma: " . Calculadora(10, 5, 'suma') . "<br>");
echo ("Resta: " . Calculadora(10, 5, 'resta') . "<br>");
echo ("Multiplicació: " . Calculadora(10, 5, 'multiplicacio') . "<br>");
echo ("Divisió: " . Calculadora(10, 5, 'divisio') . "<br>");

/*
- Exercici 4
Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas.*/

function comptar($limit = 10, $pas = 1) {
    for ($i = 0; $i <= $limit; $i += $pas) {
        echo $i . "<br>";
    }
}

comptar(20, 3);

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

echo ("Nota 75: " . verificarNota(75) . "<br>");
echo ("Nota 50: " . verificarNota(50) . "<br>");
echo ("Nota 40: " . verificarNota(40) . "<br>");
echo ("Nota 30: " . verificarNota(30) . "<br>");

/*
Exercici 6
Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.

Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/

function isBitten() {
    return rand(0, 1) == 1;
}

echo "Charlie em mossegarà el dit? " . (isBitten() ? "Sí" : "No") . "<br>";
?>
