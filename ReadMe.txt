Spirala 3
---------------
1)
Za serijalizaciju sam koristio sljedece forme: login, registracija,kontakt.
Za svakog korisnika se kreira poseban xml file.
Registracija se vr�i klikom na link login/registracija te uno�enjem podataka. U
slucaju da korisnik vec postoji, mo�e se login-ovati ako klikne na login/registrati
link i na dnu klikne na link "Already registered? Click to login".
Adminovi podaci su: username-admin password-Prazina1
Nakon registracije dolazi do preusmjeravanje stranice na login, dok pri uspje�nom
loginu se vr�i preusmjeravanje na index.php.
Admin na naslovnoj stranici ima dodatne mogucnosti kreiranja .csv, .pdf fajla
kao i promjene korisnickog imena korisnika te brisanja korisnika.
Takoder, svaki korisnik se mo�e logout-ovati klikom na dugme na dnu naslovnice "Logou2
Nakon registracije, podaci se smje�taju u folder registrations sa detaljima o korisniku
i folderu users gdje se smje�ta korisnicko ime i �ifra koja je he�irana.
Svi podaci su validirani.
Za kodiranje odredenih karaktera sam koristio htmlEntities kao na vje�bama �to je radeno.
Kontakt informacije se smje�taju u folder ContactMessages pri cemu se svakoj poruci dodjeljuje jedinstveni broj.
2)
Nakon �to se admin loguje, preusmjerava se na index.php gdje mo�e klikom na
"klikni za detalje o korisnicima" vidjeti sve korisnike te skinuti podatke o njima
klikom na dugme klikni za kreiranje CSV-a. u CSV fajl se smje�ta korisnicko ime i �ifra
svakog od korisnika.
3)
Kao i u zadatku 2, odmah pored linka za kreiranje CSV-a se nalazi link za kreiranje PDF fajla
Ovaj pdf prikazuje redni broj korisnika(sortiran abecedno po korisnickom nazivu) i korisnicko ime.
4)
Na naslovnoj stranici se nalazi link "Search" koji otvara novu podstranicu.
Svi korisnici, logovani ili ne mogu pretra�iti cijelu bazu registrovanih.
Pretraga se vr�i po imenu, prezimenu ili oboje. Nije case sensitive.
Kod upisa izbacuje se do 10 slicnih korisnika, a u slucaju klika na submit dugme ispisuju
se svi slicni korisnici.
Nisam primjetio bug-ove u kodu.

Openshift link:
http://mz17053arsenal-milanzuza.44fs.preview.openshiftapps.com/