# Colorambo Evoluzione

## Descrizione

*Colorambo Evoluzione* è una piattaforma online per gestire le proprie palette di colori preferiti. 

L'utente anonimo (non registrato), collegandosi, può visualizzare i colori pubblici presenti in piattaforma e, nel momento in cui crea un account, può visualizzarli tutti e decidere di inserire quelli di maggior gradimento nella sua lista dei "Preferiti". 

L'utente che si censisce come "Creatore" è in grado di aggiungere colori alla piattaforma, oltre ad avere tutte le funzionalità dell'utente "Basic". 

Esiste poi uno (o più) utente "Admin" in grado di amministrare la piattaforma.

## Requisiti Funzionali

Di seguito la lista dei requisiti **minimi** che sono richiesti al progetto per definirsi concluso. 

* Lista colori pubblici accessibile a tutti i visitatori del sito (anche non registrati)
* Possibilità di loggarsi inserendo le credenziali (email & password)
* L'utente sarà identificato da una mail univoca
* L'utente dovrà poter cambiare la propria password
* L'utente potrà registrarsi al sito inserendo i proprio dati anagrafici (nome, cognome, data di nascita, residenza e descrizione di sè) e credenziali (email e password, con ripezione della password). Non serve conferma via mail, una volta completato (e validato) il form l'utente è registrato
* L'utente in fase di registrazione deve poter scegliere il tipo di account (basic o creatore)
* Al momento della creazione della piattaforma deve essere presente un utente admin
* L'utente basic deve poter scorrere la lista di tutti i colori presenti sul sito
* Deve essere presente una schermata di dettaglio di ogni colore, con informazioni riguardanti il colore, il suo creatore e gli utente che hanno messo quel colore nei "Preferiti"
* Ogni utente dovrà avere una pagina di Area Riservata in cui vedere la lista dei propri colori (se utente "Creatore")
* Ogni utente dovrà avere una pagina di Area Riservata in cui vedere la lista dei colori "Preferiti" (qualsiasi utente). 
* Ogni utente dovrà avere una pagina di Area Riservata in cui sarà possibile modificare i propri dati, cambiare il proprio tipo di utente e cancellarsi dalla piattaforma.
* Gli utente "Creatori" nella home page del sito avranno un pulsante "Aggiungi Colore" in grado di portarli alla schermata di aggiunta colore
* Ogni colore avrà un nome, un codice esadecimale e un creatore. Il nome del colore deve essere univoco all'interno della piattaforma, deve avere almeno 5 lettere.
* L'utente deve poter fare Logout
* L'utente ("Creatore" e "Basic") deve poter aggiungere un colore alla lista dei suoi preferiti sia dalla pagina di dettaglio colore che dalla lista principale
* L'utente "Creatore" deve poter accedere alla pagina di modifica del colore sia dalla pagina di dettaglio che dalla lista, solo nel caso in cui egli sia il creatore di quel colore
* Nella lista dei colori devono essere chiaramente indicati i colori che appartengono all'utente loggato (se "Creatore")
* Nella lista dei colori devono essere chiaramente indicati i colori "Preferiti" dell'utente ("Basic" e "Creatore")
* L'utente "Admin" deve poter accedere all'Area Riservata
* L'utente "Admin", dall'Area Riservata, potrà modificare i propri dati
* L'utente "Admin", dall'Area Riservata, potrà vedere la lista degli utenti divisa per tipo di utente
* L'utente "Admin", dall'Area Riservata, potrà cancellare utenti
* L'utente "Admin", dall'Area Riservata, potrà impostare una nuova password per gli utenti
* L'utente "Admin", dall'Area Riservata, potrà cancellare colori
* L'utente "Admin", dall'Area Riservata, potrà aggiungere utenti di tutti i tipi ("Admin", "Creatori" e "Basic")
* L'utente Admin dovrà avere una zona dell'Area Riservata per vedere le statistiche del sito: numero totale utenti (per ruolo), numero colori, classifica colori "Preferiti", classifica utenti per numero di colori inseriti, numero di accessi per giorno, numero di pagine visualizzate per giorno.
* Tutta la piattaforma dovrà seguire le stesse linee guida grafiche e dovrà mostrare consistenza nella presentazione e nell'utilizzo

## Requisiti Tecnici

Di seguito i requisiti tecnici da utilizzare **obbligatoriamente** per portare a termine il progetto. 

Si vedano come delle richieste imprescindibili che il cliente pone come vincoli e che dipendono da scelte che, come *solution provider* quali siamo, dobbiamo "subire". 

La controparte (ovvero il cliente) sarà rappresentato dal docente, che direzionerà lo sviluppo del progetto stesso sulla base delle proprie insindacabili esigenze e tempistiche (chi paga decide).

* Il backend deve essere realizzato usando solamente PHP7, MySQLi su piattaforma XAMPP. 
* Le pagine devono essere servite con logiche di *Server Side Rendering*, ovvero l'HTML viene generato dal server e spedito al client con tutti gli asset inerenti alla pagina
* Per tutte le esigenze di interattività, è possibile utilizzare jQuery.
* E' necessario strutturare le cartelle seguendo lo schema MVC (model, view, controller) relativamente alle pagine da servire (tutte le entità - controllers, views, models - devono risiedere nella cartella corrispondente)
* Per la parte di FrontEnd è necessario procedere prima con un mockup, da validare con la controparte, e quindi solamente con HTML, CSS e Javascript (jQuery).
* Non è possibile utilizzare un framework CSS (Bootstrap o simili)
* Per il layout degli elementi grafici, è necessario usare FlexBox
* Prima di procedere alla parte di programmazione, è necessario presentare uno schema a grandi linee della struttura delle cartelle e, soprattutto, delle tabelle e relazioni del database
* Per tutte le operazioni di gestione del database si può utilizzare indifferentemente PHPMyAdmin oppure query SQL da codice
* Deve essere creato un database con il nome del progetto (`colorambo_evoluzione`) e un utente, sempre con lo stesso nome, che abbia tutti i permessi sul suddetto database
* Dovrà essere presentata alla controparte una proposta grafica completa di font, logo e palette di colori

## Istruzioni & Regole

* Il progetto dovrà essere svolto in gruppi di 2 massimo 3 persone, con almeno 1 BackEnd e 1 FrontEnd
* Prima di procedere con le varie operazioni è necessario richiedere l'approvazione del cliente
* Cercate su Internet la risposta ai vostri questiti, fatevi un'idea di quella che potrebbe essere la soluzione o la strategia risolutiva e solamente in extremis chiedete aiuto al docente, che comunicherà con voi in un'ottica di discussione della soluzione e non di "fornitura" della stessa
* E' possibile (e consigliato) lavorare in maniera coordinata con altri team, scambiandosi informazioni, proposte e dando feedback sul lavoro svolto.
* Ogni progetto dovrà comunque mostrare segni distintivi, principalmente a livello di grafica, ma anche nelle scelte tecniche di progettazione e programmazione
* Documentate il più possibile, all'interno del file README, le scelte effettuate, l'architettura complessiva e i dettagli tecnici del progetto.
* Per procedere allo svilluppo, forkare il seguente repository Github su uno degli account e quindi aggiungere gli altri sviluppatori come collaboratori. 
* Una volta settato il progetto, comunicate al docente il link e le istruzioni (da rendere disponibili sul README) per testare in locale il progetto

