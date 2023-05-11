call creationCampagne('campagneTest');
call finCampagne();
call creationCampagne('campagneTest2');

call creationCampagneProduit('chandail');
call creationCampagneProduit('kangorou');

call creationDetail('couleur', 'antiq red cherry');
call creationDetail('couleur', 'black');
call creationDetail('couleur', 'dark heather');
call creationDetail('couleur', 'forest green');
call creationDetail('couleur', 'military green');
call creationDetail('couleur', 'navy');
call creationDetail('couleur', 'purple');
call creationDetail('couleur', 'red');
call creationDetail('couleur', 'royal');
call creationDetail('couleur', 'dark chocolate');
call creationDetail('couleur', 'antique saphir');

call creationDetail('taille', 'tres petit');
call creationDetail('taille', 'petit');
call creationDetail('taille', 'moyen');
call creationDetail('taille', 'grand');
call creationDetail('taille', 'tres grand');
call creationDetail('taille', 'tres tres grand');

call ajoutDetailCampagneProduit(2, 1);
call ajoutDetailCampagneProduit(2, 2);
call ajoutDetailCampagneProduit(2, 3);
call ajoutDetailCampagneProduit(2, 4);
call ajoutDetailCampagneProduit(2, 5);
call ajoutDetailCampagneProduit(2, 6);
call ajoutDetailCampagneProduit(2, 7);
call ajoutDetailCampagneProduit(2, 8);
call ajoutDetailCampagneProduit(2, 9);
call ajoutDetailCampagneProduit(1, 1);
call ajoutDetailCampagneProduit(1, 2);
call ajoutDetailCampagneProduit(1, 3);
call ajoutDetailCampagneProduit(1, 4);
call ajoutDetailCampagneProduit(1, 5);
call ajoutDetailCampagneProduit(1, 6);
call ajoutDetailCampagneProduit(1, 7);
call ajoutDetailCampagneProduit(1, 8);
call ajoutDetailCampagneProduit(1, 9);

call ajoutProduitPanier(4, 1, 3);
call ajoutDetailProduitPanier(4, 1, 2);
call ajoutDetailProduitPanier(4, 1, 17);
