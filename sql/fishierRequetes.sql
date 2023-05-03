call creationUsager('super', 'admin', 'SuperAdmin', 'CestPasSoleil01', 0);

call creationCampagne('campagneTest2');
call finCampagne();

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

insert into usagers (prenom, nom, adresseCourriel, motDePasse) VALUES ('John', 'Doe', 'JohnDoe@courriel.com', 'UnMotDePasse');

call ajoutProduitPanier(4, 1, 3);
call ajoutDetailProduitPanier(4, 1, 2);
call ajoutDetailProduitPanier(4, 1, 17);

  select nomProduit, quantite, titre, detail
    from panier_produits
    join campagne_produits cp on cp.id = panier_produits.campagne_produit_id
    Join panier_detail_produits pdp on panier_produits.id = pdp.panier_produit_id
    Join details d on pdp.detail_id = d.id
    where panier_id = (select id from paniers where usager_id = 4);

    select nomProduit, quantite, titre, detail
    from panier_produits
    join campagne_produits cp on cp.id = panier_produits.campagne_produit_id
    Join panier_detail_produits pdp on panier_produits.id = pdp.panier_produit_id
    Join details d on pdp.detail_id = d.id
    where panier_id = (select id from paniers where usager_id = 4)
    and panier_produits.campagne_id = (select id from campagnes where actif = 1);