# Password validation

Créez une fonction qui peut être utilisée comme validateur pour le champ mot de passe d'un formulaire d'enregistrement d'utilisateur. La fonction de validation prend une chaîne en entrée et renvoie un résultat de validation. Le résultat de la validation doit contenir un booléen indiquant si le mot de passe est valide ou non, ainsi qu'un champ contenant les erreurs de validation possibles.

### Exigences

1. Le mot de passe doit comporter au moins 8 caractères. Si cette condition n'est pas remplie, le message d'erreur suivant doit être renvoyé : `"Le mot de passe doit comporter au moins 8 caractères"`
2. Le mot de passe doit contenir au moins 2 chiffres. Si cette condition n'est pas remplie, le message d'erreur suivant doit être renvoyé : `"Le mot de passe doit contenir au moins 2 chiffres"`
3. La fonction de validation doit gérer plusieurs erreurs de validation.
   - Par exemple, "mdp" devrait renvoyer un message d'erreur : `"Le mot de passe doit comporter au moins 8 caractères. Le mot de passe doit contenir au moins 2 chiffres.`
4. Le mot de passe doit contenir au moins une lettre majuscule. Si cette condition n'est pas remplie, le message d'erreur suivant doit être renvoyé : `"Le mot de passe doit contenir au moins une lettre majuscule"`.
5. Le mot de passe doit contenir au moins un caractère spécial. Si cette condition n'est pas remplie, le message d'erreur suivant doit être renvoyé : `"le mot de passe doit contenir au moins un caractère spécial"`.
