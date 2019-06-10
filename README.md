## App UML Diagram

[modifier le diagram sur plantUML](http://www.plantuml.com/plantuml/uml/RP6nJWCn38RtF4NKiT8Dh4mTMDWOoWEOv2yrpJadnoqWnBlZYmf7fPlkykNpdzZPDIEryrX2AjHQV6xG-1NY83GYtiTcolBgQup4vJ-ON7-lcftz_ZhLMk3ahLK9tzVCFRLJppIsSXEQqPBoP5p5iU73EgHSME0aas7F8sPwLhfwCtqKWrwep4TYWl7wNk_kmTbjM3eYdP0TljHQ_YxwL2L3oUhw25B5uS298UQOnRmmzEOssqtS3aF_BY4kaI8g2Xbo27sscxj5dMjTEj85SIJvN8pLiCNRGRA_sGy0) (Lien à mettre à jour à chaques modification)

![App UML Diagram](http://www.plantuml.com/plantuml/png/RP6nJWCn38RtF4NKiT8Dh4mTMDWOoWEOv2yrpJadnoqWnBlZYmf7fPlkykNpdzZPDIEryrX2AjHQV6xG-1NY83GYtiTcolBgQup4vJ-ON7-lcftz_ZhLMk3ahLK9tzVCFRLJppIsSXEQqPBoP5p5iU73EgHSME0aas7F8sPwLhfwCtqKWrwep4TYWl7wNk_kmTbjM3eYdP0TljHQ_YxwL2L3oUhw25B5uS298UQOnRmmzEOssqtS3aF_BY4kaI8g2Xbo27sscxj5dMjTEj85SIJvN8pLiCNRGRA_sGy0 "App UML Diagram")

## Navigation/routes


[Markdown Tables Generator](https://www.tablesgenerator.com/markdown_tables)

| **name**        | **route**         |     |
|-----------------|-------------------|-----|
| homepage        | /                 | [X] |
| todolist        | /todolist         | [X] | 
| add_task        | /todolist/add     | [X] |
| edit_task       | /todolist/edit    | [X] |
| ponderators     | /ponderators      | [X] |
| ponderator      | /ponderators/{id} | [X] |
| add_ponderator  | /ponderators/add  | [X] |
| edit_ponderator | /ponderators/edit | [X] |
| login           | /login            | [X] |
| register        | /register         | [X] |
| account         | /account          | [ ] |

[10 juin 2019] php bin/console debug:router :
 -------------------------- -------- -------- ------ -----------------------------------
  Name                       Method   Scheme   Host   Path
 -------------------------- -------- -------- ------ -----------------------------------
  _twig_error_test           ANY      ANY      ANY    /_error/{code}.{_format}
  _wdt                       ANY      ANY      ANY    /_wdt/{token}
  _profiler_home             ANY      ANY      ANY    /_profiler/
  _profiler_search           ANY      ANY      ANY    /_profiler/search
  _profiler_search_bar       ANY      ANY      ANY    /_profiler/search_bar
  _profiler_phpinfo          ANY      ANY      ANY    /_profiler/phpinfo
  _profiler_search_results   ANY      ANY      ANY    /_profiler/{token}/search/results
  _profiler_open_file        ANY      ANY      ANY    /_profiler/open
  _profiler                  ANY      ANY      ANY    /_profiler/{token}
  _profiler_router           ANY      ANY      ANY    /_profiler/{token}/router
  _profiler_exception        ANY      ANY      ANY    /_profiler/{token}/exception
  _profiler_exception_css    ANY      ANY      ANY    /_profiler/{token}/exception.css
  pond_index                 ANY      ANY      ANY    /ponderators/
  pond_add                   ANY      ANY      ANY    /ponderators/add
  pond_edit                  ANY      ANY      ANY    /ponderators/edit/{id}
  pond_delete                ANY      ANY      ANY    /ponderators/delete/{id}
  app_register               ANY      ANY      ANY    /register
  app_login                  ANY      ANY      ANY    /login
  app_logout                 ANY      ANY      ANY    /logout
  todo_index                 ANY      ANY      ANY    /todolist/
  todo_add                   ANY      ANY      ANY    /todolist/add
  todo_edit                  ANY      ANY      ANY    /todolist/edit/{id}
  todo_delete                ANY      ANY      ANY    /todolist/delete/{id}
  todo_check                 ANY      ANY      ANY    /todolist/check/{id}
  todo_uncheck               ANY      ANY      ANY    /todolist/uncheck/{id}
  homepage                   ANY      ANY      ANY    /
 -------------------------- -------- -------- ------ -----------------------------------

## TODO

### Version Alpha 0.1+

1. Fonctionnalités de base
    - [X] Créer le controlleur et la vue principale (Todolist)
    - [X] Créer l'entité Task
    - [X] Formulaire de création de tâche
    - [X] Affichage des tâches dans la vue principale
    - [X] Navigation principale
    - [X] Suppression d'une tâche
    - [X] Modification d'une tâche
    - [X] Valider une tâche
    - [X] Afficher toutes les infos d'une tâche
    - [ ] Faire la route switch_check dans le TodoController
2. Intégration d'un template
    - [X] todo/index
    - [X] todo/todo_add
    - [X] todo/todo_edit
    - [ ] Navigation
    - [ ] Ajouter les messages d'alertes/info
    - [ ] Nettoyer les éléments inutiles
3. CRUD Pondérateurs
    - [X] Créer l'entité Ponderator
    - [ ] Vue gestion des pondérateurs
        - [ ] Popup de confirmation lors de la suppression d'un élément
        - [ ] Revoir icones
    - [X] Ajouter un pondérateur
    - [X] Afficher les pondérateur dans la vue todo_index
    - [X] Ajouter des pondérateurs dans le formulaire de création de tâches
    - [X] Supprimer
    - [X] Modifier
    - [X] Ajouter/enlever des pondérateurs aux tâches
    - [X] Ordonner les tâches

### Version Alpha 0.4+

4. Ajout des utilisateurs
    - [X] Création de l'entité User
    - [X] Formulaire d'inscription
    - [ ] Intégration Homepage
    - [X] Login
    - [ ] Logout
    - [ ] Page Account
    - [ ] Associez les autres entités aux Users
5. Création de projets
    - [ ] Création de l'entité Projects
6. Amélioration de l'interface
    - [ ] Ajouter formulaire de création de tâches dans la vue todo_index
    - [ ] Ajouter formulaire de création de pondérateur dans la vue pond_index
    - [ ] Nettoyer l'interface des éléments "démo" du template (alertes, etc)
    - [ ]
7. AJAX
    - [ ] Affichage du contenu des tâches au clic pour la vue todo_index 
    - [ ] Ajout de tâche sans chargement pour la vue todo_index
    - [ ] Ajout de pondérateur sans chargement pour la vue pond_index
8. Pondérateur spécial : deadline

### Version Bâta 0.9+

9. Créer un serveur API
10. Créer une interface en react
11. Système de scoring
12. Création de tâches partagées
    - [ ] Les tâches partagées remportent des points en mode "compétition"