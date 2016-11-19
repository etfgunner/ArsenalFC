a) Sva polja imaju JavaScript validaciju
-forma kontakt- validacija se nalazi u validationContact.js(ime,prezime mora ne smije sadržavati specijalne znakove, email mora biti u formatu x@y.z, dok svi moraju biti not null)
-forma registracija- validacija u Registration.js(ime,prezime,datum,username, svi imaju validaciju, password isto tako, dok repeat-password zavisi od passworda(mora biti match))
-forma login- validacija u validationLogin.js(username alfanumericki, password min 6 znakova, min jedan broj)
b) Uzeo sam carousel i localstorage
-carousel se nalazi na pocetnoj stranici, na desnoj strani(carousel.js)
-localstorage se nalazi u istim js fajlovima kao i gore navedeni za validaciju( forme login, registracija, kontakt)
c) Ajax se nalazi u Ajax.js
-prilikom ucitavanja stranica, ostavio sam u ostalim html-ovima  doctype, head, title, c-encoding da bi prošli validaciju
-svi pozivi funkcije ucitaj se nalaze u meniju index.html osim kod logina, poziv za ucitavanje logina se nalazi u div-u od registracije pa se jedino tako može pristupiti login-u

