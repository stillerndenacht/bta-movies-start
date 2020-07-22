# bta-movies-start
## Einrichtung eines Virtuellen Host namens: bta-movies-start.loc
#### Für Windows DNS in host Datei eintragen (C:\Window\System32\drivers\etc\hosts)
#### Für Mac OSX, Linux DNS in host Datei eintragen (/etc/hosts)
- 127.0.0.1	bta-movies-start.loc

#### Apache -> httpd-vhosts.conf
```
<VirtualHost *:80>
	ServerName bta-movies-start.loc
        DocumentRoot "FULL PATH TO ... /htdocs/bta-movies-start"
	CustomLog "logs/access_bta-movies-start.log" common
	ErrorLog "logs/error_bta-movies-start.log"
</VirtualHost>
```
