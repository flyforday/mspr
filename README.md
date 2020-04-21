# mspr
projet mspr adam louis leo WIS B2

Wsh les relous jvous explique tout :

|--| SRC/SECRET.PHP
Secret.php c'est votre fichier avec votre base de donnée propre à vous que vous devrez ajouter dans src.
Ca permet que personne ait les codes des autres.

|--| .GITIGNORE
Le fichier .gitignore à la racine de site permet que votre fichier secret.php ne soit jamais mis sur le git comme ca chacun ses codes

|--| SRC/CONNEXION.PHP
Du coup lui c'est le fichier pour vous connexter à votre base de donnée. C'est lui que vous appelerai et lui appelle le fichier src/secret.php.