call creationUsager('super', 'admin', 'SuperAdmin', 'CestPasSoleil01', 0);

call creationCampagne('campagneTest');
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

call selectionProduitCampagne();

select nomProduit, d.detail from campagne_produits
JOIN campagne_detail_produits cdp on campagne_produits.id = cdp.campagne_produit_id
JOIN details d on cdp.detail_id = d.id;

select id from campagne_detail_produits where campagne_produit_id = 1 and detail_id = 1
