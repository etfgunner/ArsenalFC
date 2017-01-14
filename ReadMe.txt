Spirala 4
a)Dodano je sljedece:
-baza pod nazivom spirala 4, nalazi se u projektu
-tabela registracija, koja sadrži username kao PK te ostale uobicajne atribute
-tabela poruka, koja sadrži id poruke PK, username kao FK na username(tabela registracija)
-tabela login, koja sadrži  username kao FK na tabelu registracija(username) te heširanu šifru
b)
Kad se admin loguje(admin, Prazina1), prebaci se na adminov home page. Klikom na click here to see login details ulazi u stranicu sa opcijama.
Tu se nalazi i dugme, koji prebacuje sve podatke iz xml-a u bazu. Prebacuju se podaci iz foldera users, registracija i ContactMessages.
Ovo prebacivanje nema neku svrhu, osim prvog puta kad se iskoristi(npr. svi podaci cuvani u xml-u pa je nakon prebacivanja na bazu došlo do potrebe
transfera podataka u bazu)
c)Prepravio(mjesta prepravke sadrže i originalni kod koji je zakomentarisan).
d)
Openshift link:
http://mz17053arsenal-milanzuza.44fs.preview.openshiftapps.com/
ovo gore je link od prošle spirale. Ispod se nalazi novi link kojeg sam povezao na drugi racun(sa deploymentom baze). U folderu POSTMAN se takoder nalaze i podaci za login na phpmyadmin.
$dbh= new PDO("mysql:dbname=sampledb;host=mysql:3306/", "userGPJ", "c0odgnr25dURIfBh"); //a evo ih i ovdje

http://wt-arsenalfc.44fs.preview.openshiftapps.com/

e)Ovo može samo admin(nigdje ne piše ko smije ovo uraditi pa sam stavio samo za admina).
Kad ude na link click here to see login details, ima link pod nazivom 'Klikni za kreiranje JSON-a' u kojem se nalazi text field i submit.
U textbox se ubaci neki string koji se kasnije pretražuje u svim korisnickim imenima i vraca u JSON-u. Da bi se vidjelo i u browseru koji je rezultat, nisam automatski vracao pocetnu stranicu te se klikom na submit ispisuju(echo) svi rezultati(ostavio sam zakomentarisan heades(Location...)
f) Pogledati folder POSTMANScreenshot. Testirao sam za par slucajeva: kad je string prazan, kad se unese tacno jedno korisnicko ime, kad se unese slovo, ili kad se unese neki slog.