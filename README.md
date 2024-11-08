
---

# php-badwords

## Descrizione

Il progetto **php-badwords** consiste nella creazione di un'applicazione PHP che permette all'utente di inviare un paragrafo di testo e una parola da censurare. La parola specificata verrà sostituita nel paragrafo con tre asterischi (***) e verranno visualizzati sia il paragrafo originale che quello censurato, insieme alla loro lunghezza.

### Funzionalità

1. **Form di input**:
   - L'utente inserisce un paragrafo e una parola da censurare tramite un form.
   - I dati vengono inviati tramite il metodo **POST** al server per l'elaborazione.

2. **Elaborazione dei dati**:
   - Il server riceve i dati inviati e calcola la lunghezza del paragrafo originale.
   - Sostituisce tutte le occorrenze della parola da censurare con tre asterischi (***) nel testo.
   - Visualizza il paragrafo originale con la sua lunghezza, seguito dal paragrafo censurato e dalla sua lunghezza.

### Struttura del progetto

- **index.php**: Il file che contiene il form per l'inserimento del paragrafo e della parola da censurare.
- **process.php**: Il file che riceve i dati inviati dal form, esegue le operazioni di censura e visualizza i risultati.

### Tecnologie utilizzate

- **PHP**: Linguaggio di scripting lato server.
- **HTML**: Struttura e contenuto del form.
- **CSS** (opzionale per il design): Puoi aggiungere un po' di stile per rendere l'app più gradevole visivamente.

### Obiettivo

- Gestire la sostituzione delle parole da censurare in modo semplice e dinamico, utilizzando PHP per l'elaborazione dei dati.
  
--- 
