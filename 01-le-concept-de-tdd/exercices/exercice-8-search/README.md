# Search feature

Implémenter une fonctionnalité de recherche de villes. La fonction prend une chaîne de caractères (texte de recherche) en entrée et renvoie les villes trouvées qui correspondent au texte de recherche.

### Conditions préalables
Créez une collection de chaînes de caractères qui servira de base de données pour les noms de villes.

Noms de ville : Paris, Budapest, Skopje, Rotterdam, Valence, Vancouver, Amsterdam, Vienne, Sydney, New York City, Londres, Bangkok, Hong Kong, Dubaï, Rome, Istanbul.

### Exigences

1. Si le texte de la recherche comporte moins de 2 caractères, aucun résultat ne doit être obtenu. (Il s'agit d'une fonction d'optimisation de la fonctionnalité de recherche).
2. Si le texte de recherche est égal ou supérieur à 2 caractères, la fonction doit renvoyer tous les noms de ville commençant par le texte de recherche exact.
   - Par exemple, pour le texte de recherche "Va", la fonction doit renvoyer Valence et Vancouver.
3. La fonctionnalité de recherche doit être insensible à la casse
4. La fonctionnalité de recherche doit également fonctionner lorsque le texte recherché n'est qu'une partie du nom d'une ville
    - Par exemple, "ape" devrait renvoyer la ville de "Budapest".
5. Si le texte de recherche est un "*" (astérisque), il doit renvoyer tous les noms de ville.
