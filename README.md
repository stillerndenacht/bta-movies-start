# bta-movies-start
# stillerndenacht Test
## Einrichtung eines Virtuellen Host namens: bta-movies-start.loc
#### Für Windows DNS in host Datei eintragen (C:\Window\System32\drivers\etc\hosts)
#### Für Mac OSX, Linux DNS in host Datei eintragen (/etc/hosts)
- 127.0.0.1	bta-movies-start.loc

#### Apache -> httpd-vhosts.conf
- Windows: C:\xampp\apache\conf\extra\httpd-vhosts.conf
- Mac OSX: /Applications/XAMPP/etc/extra/httpd-vhosts.conf
```
<VirtualHost *:80>
	ServerName bta-movies-start.loc
        DocumentRoot "FULL PATH TO ... /htdocs/bta-movies-start"
	CustomLog "logs/access_bta-movies-start.log" common
	ErrorLog "logs/error_bta-movies-start.log"
</VirtualHost>
```

#### Apache -> httpd.conf überprüfen
- Windows: C:\xampp\apache\conf\httpd.conf
- Mac OSX: /Applications/XAMPP/etc/httpd.conf

In der zentralen Konfigurations-Datei des Apache-Servers 'httpd.conf' bitte überprüfen,
ob dort die httpd-vhosts.conf inkludiert wird. Folgende Zeile muß dort eingetragen sein:
```
Include etc/extra/httpd-vhosts.conf
```
Falls diese Zeile dort existiert und ein Rautezeichen (Zeichen für Kommentar-Zeile) davor steht, 
dann entfernt es bitte. 
