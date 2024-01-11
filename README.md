# PHP Iscrizione Newsletter

### Descrizione
Questo programma consente agli utenti di inserire un indirizzo email attraverso un form. L'app verifica se l'indirizzo email è ben formato e visualizza un messaggio di successo o errore utilizzando gli alert di Bootstrap.

### Struttura dei File
- `index.php`: La pagina principale che contiene il form per l'inserimento dell'indirizzo email e visualizza gli alert di Bootstrap con il risultato della validazione.
- `functions.php`: Contiene la logica di validazione dell'indirizzo email.

### Future features (Bonus)
- Invece di usare una classe statica per lo stile dell’alert, sarà modificata in base all’esito della funzione.
- Invece di visualizzare il messaggio di success nella index.php, in caso di esito positivo sarà effetuato un redirect ad una thankyou page dove verrà usata la session per mostrare anche l'indirizzo email con cui l'utente si è "registrato".