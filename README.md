# Istruzioni:

Oggi facciamo la nostra prima vera interazione con il database utilizzando l'ORM di Laravel.
Create un nuovo progetto Laravel 7 e tramite phpMyAdmin create un nuovo database.
Importate nel vostro database la tabella movies in allegato e inserite le vostre credenziali per il database nel file .env.
Create un model Movie e un controller che gestirà la rotta /.
All'interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view,
che quindi li visualizzerà a schermo, tramite delle card.
BONUS: Stilare il layout nei dettagli con Sass
