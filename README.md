## App UML Diagram

[modifier le diagram sur plantUML](http://www.plantuml.com/plantuml/uml/RP2nJWCn38RtF4LqOwKRM9awiB0nb0Sm5nSCZdDoV0M4U7USg50YTKhovVEVsFjgeBPb3Wj3hV6neiQl46U1ZF4sLbEIPpzZ1kB_O7NzlMXozhjrgeNHoMij4hxFcGUeRptJo7W8JLWNfTMeY6F33-iG4fCqCO7XWJ8skYaqxqplnL1FmEr9ND7e-btlxixP6EQuewTI-E-R3qKIAbYvFe2buF582w6OOnBpmj1RctPJtCrpNoyXBe5YL6GmJ27qoKut5xNLklG29umPv7Cqnh31swEaBVCF) (Lien à mettre à jour à chaques modifications)

![App UML Diagram](http://www.plantuml.com/plantuml/png/RP2nJWCn38RtF4LqOwKRM9awiB0nb0Sm5nSCZdDoV0M4U7USg50YTKhovVEVsFjgeBPb3Wj3hV6neiQl46U1ZF4sLbEIPpzZ1kB_O7NzlMXozhjrgeNHoMij4hxFcGUeRptJo7W8JLWNfTMeY6F33-iG4fCqCO7XWJ8skYaqxqplnL1FmEr9ND7e-btlxixP6EQuewTI-E-R3qKIAbYvFe2buF582w6OOnBpmj1RctPJtCrpNoyXBe5YL6GmJ27qoKut5xNLklG29umPv7Cqnh31swEaBVCF "App UML Diagram")

## Navigation/routes


[Markdown Tables Generator](https://www.tablesgenerator.com/markdown_tables)
| name            | route             |
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
    1. Créer le controlleur et la vue principale (Todolist)
    2. Créer l'entité Task
    3. Formulaire de création de tâche
    4. Affichage des tâches dans la vue principale
    7. Navigation principale
    5. Suppression d'une tâche
    6. Modification d'une tâche
    7. Valider une tâche
2. Intégration d'un template
3. Pondérateurs
    1. Créer l'entité Ponderator
    2. Vue gestion des pondérateurs
    3. Ajouter un pondérateur
    4. Supprimer
    5. Modifier
    6. Ajouter/enlever des pondérateurs aux tâches
    7. Ordonner les tâches

### Version Beta 0.4+

4. Ajout des utilisateurs
    1. Création de l'entité User
    2. Formulaire d'inscription
    3. Login
    3. Logout
    4. Page Account
    5. Associez les autres entités aux Users
