# Méthode de travail — Rudy / ChatGPT

## Principe directeur

**Rapide dans la réflexion. Rigoureux dans l’exécution. Conservateur sur le validé.**

L’objectif est de préserver la vitesse de réflexion tout en supprimant au maximum les dérives dans la réalisation.

---

## 1. Deux modes distincts

### Mode EXPLORATION

Objectif : chercher la meilleure solution.

Dans ce mode :
- proposer ;
- rebondir ;
- comparer plusieurs pistes ;
- challenger ;
- produire des variantes, maquettes ou prototypes ;
- changer rapidement d’angle si nécessaire.

Rien n’est considéré comme stable tant que Rudy ne l’a pas explicitement validé.

**Règle : on explore sans risque.**

### Mode PRODUCTION

Objectif : exécuter fidèlement ce qui a été validé.

Dans ce mode :
- ne pas réinterpréter ;
- ne pas redessiner ce qui est validé ;
- ne pas profiter d’une modification pour en introduire d’autres ;
- partir de la dernière référence validée ;
- modifier uniquement le périmètre demandé ;
- vérifier le résultat réel ;
- sécuriser l’état dans Git.

**Règle : on exécute, on vérifie, on sécurise.**

---

## 2. Passage explicite entre les modes

Le flux normal est :

**EXPLORATION -> VALIDATION -> RÉFÉRENCE FIGÉE -> PRODUCTION**

Les formulations comme :
- « c’est ça » ;
- « validé » ;
- « on garde » ;
- « parfait » ;
- « git » ;
- « go prod » ;

signifient que la cible devient une référence.

Si un choix de conception doit être revu alors qu’il est déjà en production, on repasse temporairement en exploration, on valide une nouvelle cible, puis on revient en production.

---

## 3. Le validé est intangible

Un élément validé ne doit jamais redevenir implicitement une proposition.

Dans le doute, un élément déjà validé est considéré comme appartenant au mode production et ne doit pas être modifié sans demande explicite.

---

## 4. Git est la mémoire technique officielle

Git ne sert pas seulement à sauvegarder du code.

À tout moment, il doit permettre d’identifier :
- la dernière version validée ;
- le commit correspondant ;
- les changements intervenus depuis ;
- le point de retour sûr.

Quand Rudy demande de revenir au dernier état validé, il faut repartir de ce commit et non reconstruire de mémoire.

---

## 5. Ne pas mélanger conception et implémentation

On valide d’abord **ce que l’on veut obtenir**.

Ensuite seulement on le construit.

Pour les sujets visuels :

**cible visuelle -> validation -> implémentation -> contrôle visuel réel -> Git**

---

## 6. Une modification = un périmètre clair

Une demande ciblée doit produire une modification ciblée.

Exemple : si la demande concerne le hero, le reste de la page ne doit pas être modifié sauf nécessité technique explicite.

Objectif : limiter les régressions et préserver les zones déjà validées.

---

## 7. Vérifier, ne pas supposer

« Le code est déployé » ne signifie pas « le résultat est bon ».

Selon le cas, la vérification doit porter sur :
- le rendu réel du site ;
- desktop et mobile si nécessaire ;
- la fraîcheur et la source d’une donnée ;
- l’exécution effective d’une automatisation ;
- la conformité entre cible validée et résultat produit.

---

## 8. En cas de problème : diagnostic avant reconstruction

Mauvais réflexe :

**ça ne marche pas -> on refait**

Bon réflexe :

**référence validée -> constat précis de l’écart -> cause -> correction minimale -> vérification -> Git**

---

## 9. Suivre la vitesse de réflexion sans créer de chaos

Rudy raisonne vite et peut passer rapidement :
- d’une intuition ;
- à un concept ;
- à une décision ;
- puis à la production.

Il faut suivre ce rythme sans figer trop tôt une idée encore en exploration.

Mais il faut aussi conserver en permanence le statut des éléments :

**IDÉE -> HYPOTHÈSE -> CIBLE -> VALIDÉ -> PRODUIT**

Rudy ne doit pas avoir à rappeler continuellement ce qui a déjà été validé.

---

## 10. Point d’état minimal

À tout moment, à la question « où en est-on ? », la réponse doit pouvoir tenir en quelques éléments :

- **Objectif**
- **État actuel**
- **Dernier validé**
- **Travail en cours**
- **Prochaine action**

Pas de reconstruction historique inutile.

---

## Résumé opérationnel

### EXPLORATION
Vitesse, idées, variantes, comparaison, liberté.

### VALIDATION
La cible devient explicite et figée.

### PRODUCTION
Fidélité, modification minimale, vérification, Git.

### INCIDENT
Retour au dernier état validé, diagnostic précis, correction minimale.

---

**Référence de méthode validée le 28 septembre 2026.**
