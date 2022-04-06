# Passi da compiere - Progetto con front-end (vue) e back-end (laravel - bootstrap per pannello amministrativo) - simil WordPress.

## Installazione componenti
- Installare laravel/ui *composer require laravel/ui:^2.4*
- Scaffolding con **auth** per Vue *php artisan ui vue --aut*
- In package.json metto versione di bootstrap a 5
- lancio istallazione con *npm install*

## Gestione rotte sottoposte a middleware::auth
- Rimozione **HomeController** di Laravel -> voglio il mio controller sotto la cartella(namespace) Admin
- Creo cartella(namespace) Admin sotto controllers
- *php artisan make:controller Admin/HomeController* -> crea controller sotto la cartella/namespace Admin
- Imposto nel file web.php, le rotte affinché esse siano accessibili solo a chi si autentica(usando middleware('auth')) ->vedi file web.php
- Dopo il login Laravel rediretta alla rotta /home, noi vogliamo che dopo il login siamo redirettati ad /admin/, possiamo cambiare la cosa in **app/Providers/RouteServiceProvider.php*

## Gestione HomeController
- Prelevo i dati inseriti dall'utente e li passo alla vista admin.home (che creo in view sotto la cartella Admin), attraverso il model Auth -> Auth::user(), essendo un *facades* va inserito sul controller *use Illuminate\Support\Facades\Auth;*
- Creo la view home.blade.php sotto la cartella Admin, assieme ad una ulteriore sottocartella admin/layouts con il layout di base (che copio da quello già presente)
- Allo stesso modo copio home da quello già presente fuori Admin