Sistema di Autenticazione Full-Stack (PHP & MySQL)
Questo progetto implementa un sistema completo di gestione utenti, inclusa la registrazione, l'autenticazione sicura e la protezione delle aree riservate. È stato sviluppato per dimostrare competenze fondamentali nel backend con PHP e nella gestione di database relazionali con MySQL.


Funzionalità principali:

Registrazione Utente: Creazione di nuovi account con salvataggio sicuro dei dati nel database.

Sicurezza Avanzata: Utilizzo dell'algoritmo PASSWORD_DEFAULT per l'hashing delle password, evitando il salvataggio in chiaro.

Autenticazione: Sistema di login con verifica delle credenziali tramite password_verify.

Gestione Sessioni: Utilizzo di session_start() per mantenere l'utente collegato e proteggere le pagine private.

Area Riservata: Accesso limitato ai soli utenti autenticati con reindirizzamento automatico per gli utenti non loggati.

Logout: Distruzione sicura della sessione e reindirizzamento alla pagina di accesso.


Tech Stack

Backend: PHP.

Database: MySQL (tramite estensione MySQLi).

Frontend: HTML5 e CSS3.

AI Tools: Utilizzati per l'ottimizzazione del codice, il debugging e la stesura della documentazione tecnica.


Struttura del Progetto

config1.php: Gestisce la connessione centralizzata al database.

index.php: Form di registrazione utente.

register.php: Logica backend per l'inserimento sicuro dei nuovi utenti.

login.html: Interfaccia per l'accesso.

login.php: Gestione dell'autenticazione e inizializzazione della sessione.

area-privata.php: Pagina protetta accessibile solo post-login.

logout.php: Logica per la chiusura della sessione.


Installazione e Utilizzo

Clona il repository nella cartella del tuo server locale (es. htdocs per XAMPP).

Importa il file database fornito (es. tutorial_mysql.sql) tramite phpMyAdmin.

Assicurati che le credenziali in config1.php corrispondano alla tua configurazione locale.

Avvia il server e naviga su index.php per iniziare.


Licenza

Questo progetto è distribuito sotto licenza MIT.
