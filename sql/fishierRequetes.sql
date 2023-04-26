call creationUsager('super', 'admin', 'SuperAdmin', 'CestPasSoleil01', 0);

call creationCampagne('campagneTest2');
call finCampagne();

call creationCampagneProduit('kangorous');
call ajoutDetailCampagneProduit(6, 1);
call ajoutDetailCampagneProduit(6, 2);
call ajoutDetailCampagneProduit(6, 3);
call ajoutDetailCampagneProduit(6, 4);
call ajoutDetailCampagneProduit(6, 5);
call ajoutDetailCampagneProduit(6, 6);
call ajoutDetailCampagneProduit(6, 7);
call ajoutDetailCampagneProduit(6, 8);
call ajoutDetailCampagneProduit(6, 9);

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
