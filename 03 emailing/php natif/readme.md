# Envoyer des mails en natif
Vous avez eu à paramétrer sur votre machine un moyen de simuler un serveur sendmail, en début d'année.  
Si vous avez besoin de vous raffraichir la mémoire à ce sujet, [C'est par ici](https://github.com/unsiteavous/sendmail).

À partir de là, soit vous avez maildev, et il suffit de lancer la commande `maildev` dans un invite de commande pour recevoir les mails, soit vous avez paramétré sendmail, et donc vous recevrez les mails directement dans votre boite mail perso.

Pour envoyer un mail, il suffit maintenant d'utiliser la fonction native de PHP : `mail()`.
[📜 Documentation](https://www.php.net/manual/fr/function.mail.php)