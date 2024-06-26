<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->
<?php
    include __DIR__ . '/functions.php';

    // function generateRandomPass($length) {
    //     $password = '';
    //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=[]{}|;:,.<>?';
    //     $charactersLength = strlen($characters);

    //     for ($i = 0; $i < $length; $i++){
    //         $randomCharacter = $characters[rand(0, $charactersLength - 1)];
    //         $password .= $randomCharacter; 
    //     }

    //     return $password; 
    // }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>
                Strong password generator
            </h1>  
        </div>
    </header>
    <main>
        <div class="container">
            <div class="mb-3 row">
                <form action="" method="GET">
                    <label for="pswLength" class="col-sm-2 col-form-label">Lunghezza Password</label>
                    <div class="col-sm-10 d-flex">
                        <input type="text" class="form-control" id="pswLength" name="pswLength" required>
                        <button type="submit" class="btn btn-primary">Genera</button>

                        <?php if(isset($_GET['pswLength'])) {
                            $pswLength = $_GET['pswLength'];
                            $generatePsw = generateRandomPass($pswLength);
                            echo "<p>La tua password è: $generatePsw</p>";
                        }?>

                    </div>

                </form>
                
            </div>
        </div>
        
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>