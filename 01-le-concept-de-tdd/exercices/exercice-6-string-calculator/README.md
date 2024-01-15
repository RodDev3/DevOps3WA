# String Calculator

Créez une calculatrice simple qui prend une chaîne de caractères et renvoie un nombre entier.

```php
Add(string numbers): int
```

### Exigences

1. La méthode peut prendre jusqu'à deux nombres, séparés par des virgules, et retournera leur somme comme résultat. Les entrées peuvent donc être : "", "1", "1,2". Pour une chaîne vide, la méthode renverra 0.

_Remarques :_

- Commencez par le cas le plus simple (chaîne vide) et étendez-le aux cas plus avancés ("1" et "1,2") étape par étape
- Gardez les trois étapes du cycle du TDD à l'esprit et écrivez toujours suffisamment de code
- N'oubliez pas de refactor votre code après chaque test réussi

2. Permettre à la méthode `Add` de gérer un nombre inconnu d'arguments
3. Permettre à la méthode add de traiter les nouvelles lignes comme séparateurs, au lieu des virgules
    - `"1,2\n3"` devrait retourner `"6"`
    - `"2,\n3"` n'est pas valide (on a deux séparateurs succéssifs)
4. Ajouter une validation pour ne pas autoriser un séparateur à la fin. (Utilisez les exceptions)
5. Permettre à la méthode add de gérer différents délimiteurs

Pour changer le délimiteur, le début de l'entrée contiendra une ligne séparée qui ressemblera à ceci :

`//[délimiteur]\n[nombres]` exemples:

- `"//;\n1;3"` devrait retourner "4"
- `"//|\n1|2|3"` renvoie "6"
- `"//sep\n2sep5"` renvoie à "7"
- `"//|\n1|2,3"` n'est pas valide et doit renvoyer une erreur (ou lancer une exception) avec le message `"'|' attendu mais ',' trouvé à la position 3"`.

6. L'appel à `add` avec des nombres négatifs renverra le message `"Negative number(s) not allowed : <negativeNumbers>"` 
    - `"1,-2"` n'est pas valide et doit renvoyer le message `"Negative number(s) not allowed : -2"`
    - `"2,-4,-9"` n'est pas valide et doit renvoyer le message `"Negative number(s) not allowed : -4, -9"`
7. L'appel à `add` avec plusieurs erreurs renverra tous les messages d'erreur séparés par des nouvelles lignes.
   - `"//|\n1|2,-3"` n'est pas valide et renvoie le message `"Negative number(s) not allowed : -3\n'|' attendu mais ',' trouvé en position 3"`.
8. Les nombres supérieurs à 1000 doivent être ignorés, donc l'addition de 2 + 1001 = 2
