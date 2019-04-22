## App UML Diagram

[modifier le diagram sur plantUML](http://www.plantuml.com/plantuml/uml/RP6nJWCn38RtF4NKiT8Dh4mTMDWOoWEOv2yrpJadnoqWnBlZYmf7fPlkykNpdzZPDIEryrX2AjHQV6xG-1NY83GYtiTcolBgQup4vJ-ON7-lcftz_ZhLMk3ahLK9tzVCFRLJppIsSXEQqPBoP5p5iU73EgHSME0aas7F8sPwLhfwCtqKWrwep4TYWl7wNk_kmTbjM3eYdP0TljHQ_YxwL2L3oUhw25B5uS298UQOnRmmzEOssqtS3aF_BY4kaI8g2Xbo27sscxj5dMjTEj85SIJvN8pLiCNRGRA_sGy0) (Lien à mettre à jour à chaques modification)

![App UML Diagram](http://www.plantuml.com/plantuml/png/RP6nJWCn38RtF4NKiT8Dh4mTMDWOoWEOv2yrpJadnoqWnBlZYmf7fPlkykNpdzZPDIEryrX2AjHQV6xG-1NY83GYtiTcolBgQup4vJ-ON7-lcftz_ZhLMk3ahLK9tzVCFRLJppIsSXEQqPBoP5p5iU73EgHSME0aas7F8sPwLhfwCtqKWrwep4TYWl7wNk_kmTbjM3eYdP0TljHQ_YxwL2L3oUhw25B5uS298UQOnRmmzEOssqtS3aF_BY4kaI8g2Xbo27sscxj5dMjTEj85SIJvN8pLiCNRGRA_sGy0 "App UML Diagram")

## Navigation/routes


[Markdown Tables Generator](https://www.tablesgenerator.com/markdown_tables)

| **name**            | **route**             |
|-----------------|-------------------|
| homepage        | /                 |
| todolist        | /todolist         |
| add_task        | /todolist/task    |
| edit_task       | /todolist/edit    |
| ponderators     | /ponderators      |
| add_ponderator  | /ponderators/add  |
| edit_ponderator | /ponderators/edit |
| login           | /login            |
| sign_in         | /sign-in          |
| account         | /account          |


## TODO

### Version Alpha 0.1+

1. Fonctionnalités de base
    1. [X] Créer le controlleur et la vue principale (Todolist)
    2. [X] Créer l'entité Task
    3. [X] Formulaire de création de tâche
    4. [X] Affichage des tâches dans la vue principale
    7. [X] Navigation principale
    5. [X] Suppression d'une tâche
    6. [X] Modification d'une tâche
    7. [X] Valider une tâche
    7. [X] Afficher toutes les infos d'une tâche
    8. [ ] Faire la route switch_check dans le TodoController
2. Intégration d'un template
    - [X] todo/index
    - [X] todo/todo_add
    - [X] todo/todo_edit
    - [ ] Navigation
    - [ ] Ajouter les messages d'alertes/info
    - [ ] Nettoyer les éléments inutiles
3. Pondérateurs
    1. [X] Créer l'entité Ponderator
    2. [ ] Vue gestion des pondérateurs
    3. [ ] Ajouter un pondérateur
    4. [ ] Supprimer
    5. [ ] Modifier
    6. [ ] Ajouter/enlever des pondérateurs aux tâches
    7. [ ] Ordonner les tâches

### Version Alpha 0.4+

4. Ajout des utilisateurs
    1. [ ] Création de l'entité User
    2. [ ] Formulaire d'inscription
    3. [ ] Intégration Homepage
    3. [ ] Login
    3. [ ] Logout
    4. [ ] Page Account
    5. [ ] Associez les autres entités aux Users
5. Création de projets
    1. [ ] Création de l'entité Projects