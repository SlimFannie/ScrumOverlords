call creationUsager('super', 'admin', 'SuperAdmin', 'CestPasSoleil01', 0);

call creationCampagne('campagneTest2');
call finCampagne();

call creationCampagneProduit('chandail');
call ajoutDetailCampagneProduit(2, 1);
call ajoutDetailCampagneProduit(2, 2);
call ajoutDetailCampagneProduit(2, 3);
call ajoutDetailCampagneProduit(2, 4);
call ajoutDetailCampagneProduit(2, 5);
call ajoutDetailCampagneProduit(2, 6);
call ajoutDetailCampagneProduit(2, 7);
call ajoutDetailCampagneProduit(2, 8);
call ajoutDetailCampagneProduit(2, 9);

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


call selectionProduitCampagne();


select nomProduit, d.detail from campagne_produits
JOIN campagne_detail_produits cdp on campagne_produits.id = cdp.campagne_produit_id
JOIN details d on cdp.detail_id = d.id;

select id from campagne_detail_produits where campagne_produit_id = 1 and detail_id = 1

call selectionNombreProduits();


insert into formulaires (usager_id, campagne_id)
        values (2, (select id from campagnes where actif = 1));


insert into formulaire_produits (formulaire_id, campagne_produit_id)
        values ((select last_insert_id() from formulaires where 1 = usager_id ), 5);

update usagers
set role = 1
where id = 3;
