# Banking

> _Note:_ ici vous allez avoir besoin d'utiliser le concept de Mock

Créez une application bancaire simple avec des fonctions de dépôt, de retrait et d'impression de relevés de compte.

### Contraintes

1. Commencez par une classe ayant la structure suivante
    ```php
    interface Account 
    {
        public function deposit(int amount): void;
        public function withdraw(int amount): void;
        public function printStatement(): void;
    }
    ```
2. Vous n'êtes pas autorisé à ajouter d'autres méthodes publiques dans cette interface.
3. Utilisez des chaînes et des nombres entiers pour les dates et les montants (restez simple).
4. Ne vous préoccupez pas de l'espacement dans l'affichage du statement.

### Exigences

1. Dépôt sur un compte
2. Retrait d'un compte
3. Imprimer l'extrait de compte dans un fichier `extrait.txt`

| DATE  | MONTANT  | SOLDE  |
|---|---|---|
| 10/04/2014 | 500.00 | 1400.00 |
| 02/04/2014 | -100.00 | 900.00 |
| 01/04/2014 | 1000.00 | 1000.00 |
