📅 L'agenda

**Consigne** 
Créer un agenda en ligne sur lequel il vous sera possible de gérer vos RDVs. 
La gestion d'un RDV se traduit par des opérations de routine de type CRUD (créer, lister, modifier, supprimer des RDV).


**Les données**
Un RDV est défini par :

    id (int) : l'identifiant du RDV
    title (string) : l'intitulé du RDV
    details (string) : des détails sur le RDV (optionnel)
    date (datetime) : la date du RDV
    important (bool) : si le RDV est important ou non

Voici un exemple de RDV :

    id : 387
    title : Call avec Evan You
    details : Lien du call : https://whereby.com/thibaudarros à envoyer par mail 1h avant. Mail : evan.you@vuejs.org
    date : 2022-09-16 17:30:00
    important : true


**Pages / fonctionnalités**
Cette plateforme contiendra 4 pages :

    Accueil affichant la liste de tous les RDV (non ordonnée dans un premier temps)
    Détails d'un RDV
    Formulaire d'ajout de RDV
    Formulaire d'édition de RDV

Depuis les pages d'accueil et de détails d'un RDV, il devra être possible de supprimer un RDV.
Remarques :

    Utiliser le micro-framework construit en cours
    Utiliser Pico.css