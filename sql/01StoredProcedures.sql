#-------------------------------------------------
#------------- connection et usagers -------------
#-------------------------------------------------


# procedure de création des usagers
delimiter //
create procedure creationUsager(_prenom varchar(255), _nom varchar(255), _adresseCourriel varchar(255), _motDePasse varchar(1000), _role integer)
begin
    if exists(select adresseCourriel from usagers where adresseCourriel = _adresseCourriel) then
        select 'il y a déja un compte avec cette adresse courriel' as message;
    #vérifie s'il y a un usager avec le courriel
    else
        insert into usagers(prenom, nom, adresseCourriel, motDePasse, role)
        VALUES (_prenom, _nom, _adresseCourriel, _motDePasse, _role);
    end if;
end //
delimiter ;
#drop procedure creationUsager;

#procédure de connection des usagers, elle retourne 1 si la personne est connecté
delimiter //
create procedure connection(_email varchar(255), _password varchar(1000))
begin
    #Vérifie se les informations d'entré sont correct (vérifie si l'adresse courriel ET le mot de passe est correct.
    if exists(select adresseCourriel from usagers where adresseCourriel = _email and motDePasse = _password) then
        select 1 as message;
    #vérifie s'il y a un usager avec le courriel
    elseif not exists(select adresseCourriel from usagers where adresseCourriel = _email) then
        select 0 as message;
    # si l'adresse courriel n'existe pas, c'est ceci.
    else
        select 0 as message;
    end if;
end //
delimiter ;
#drop procedure connection;


#------------------------------------
#------------- campagne -------------
#------------------------------------


#procédure de création de campagne
delimiter //
create procedure creationCampagne(_nom varchar(255))
begin
    #s'il y as une campagne qui exist et qui est active.
    if exists(select id from campagnes where actif = true) then
        select 'il y a déjà une campagne active' as message;
    #s'il y
    elseif exists(select nom from campagnes where nom = _nom) then
        select 'Il y a déjà une campagne avec ce nom' as message;
    else
        insert into campagnes(nom, actif)
            Values(_nom, true);
    end if;
end //
delimiter ;
#drop procedure creationCampagne;

#procédure de fin de campagne.
delimiter //
create procedure finCampagne()
begin
    update campagnes
        set actif = 0
    Where actif = 1;
end //
delimiter ;
#drop procedure finCampagne;

delimiter //
create procedure creationCampagneProduit(_nomProduit varchar(255))
begin
    if exists(select id from campagne_produits where nomProduit = _nomProduit and campagne_id =  (select id from campagnes where actif = 1)) then
        select 'Il y a déjà un produit avec ce nom' as message;
    elseif exists(select id from campagne_produits where nomProduit = _nomProduit) then
        update campagne_produits
        set campagne_id = (select id from campagnes where actif = 1)
        where nomProduit = _nomProduit;
    else
        insert into campagne_produits(campagne_id, nomProduit)
        Values((select id from campagnes where actif = true), _nomProduit);
    end if;
end //
delimiter ;
#drop procedure creationCampagneProduit;

delimiter //
create procedure SelectionCampagne()
begin
    Select * from campagnes where actif = 1;
end //
delimiter ;


#delimiter //
#create procedure creationProduit(_nomProduit varchar(255))
#begin
#    if exists(select id from produits where nomProduit = _nomProduit) then
#        select 'Il y a déjà un produit avec ce nom' as message;
#    else
#        insert into produits(nomProduit)
#        Values(_nomProduit);
#    end if;
#end //
#delimiter ;
#drop procedure creationProduit;

delimiter //
create procedure ajoutDetailCampagneProduit(_idProduit integer, _idDetail integer)
begin
    if not exists(select id from campagne_detail_produits where campagne_produit_id = _idProduit and detail_id = _idDetail) then
        insert into campagne_detail_produits(campagne_produit_id, detail_id)
        Values(_idProduit, _idDetail);
    else
        select 'Il y a déjà ce detail de ce produit dans la campagne' as message;
    end if;
end //
delimiter ;
#drop procedure ajoutDetailCampagneProduit;

delimiter //
create procedure creationDetail(_titre varchar(255), _detail varchar(255))
begin
    if not exists(select id from details where titre = _titre and detail = _detail) then
        insert into details(titre, detail)
        values(_titre, _detail);
    end if;
end //
delimiter ;
#drop procedure creationDetail;

delimiter //
create procedure selectionCouleurExistantProduit(_idProduit varchar(255))
begin
    select detail from details where id =
    any (select detail_id from campagne_detail_produits
    where campagne_produit_id = _idProduit) and titre = 'couleur';
end //
delimiter ;
#drop procedure selectionCouleurExistantProduit;

delimiter //
create procedure selectionTailleExistantProduit(_idProduit varchar(255))
begin
    select detail from details where id = any
    (select detail_id from campagne_detail_produits
    where campagne_produit_id = _idProduit) and titre = 'taille';
end //
delimiter ;
#drop procedure selectionTailleExistantProduit;

delimiter //
create procedure selectionCouleurProduit()
begin
    select detail from details where titre = 'couleur';
end //
delimiter ;
#drop procedure selectionCouleurProduit;

delimiter //
create procedure selectionTailleProduit()
begin
    select detail from details where titre = 'taille';
end //
delimiter ;
#drop procedure selectionTailleProduit;

# sert a avoir le nom de tous les produits dans la campagne active.
delimiter //
create procedure selectionProduitCampagne()
begin
    Select nomProduit from campagne_produits
    where campagne_id = (Select id from campagnes where actif = true);
end //
delimiter ;
#drop procedure afficherProduitCampagne;

#permet de voir les detail pour un produit
delimiter //
create procedure selectionDetailProduitCampagne1(_idProduit int)
begin
    Select detail from details
    join campagne_detail_produits cdp on details.id = cdp.detail_id
    join campagne_produits cp on cdp.campagne_produit_id = cp.id
    where campagne_produit_id = _idProduit;
end //
delimiter ;
#drop procedure selectionDetailProduitCampagne1;

delimiter //
create procedure selectionDetailProduitCampagne()
begin
    Select detail from details
    join campagne_detail_produits cdp on details.id = cdp.detail_id
    join campagne_produits cp on cdp.campagne_produit_id = cp.id;
end //
delimiter ;
#drop procedure selectionDetailProduitCampagne;


delimiter //
create procedure selectionIdProduit(_nomProduit varchar(255))
begin
    Select id from campagne_produits where nomProduit = _nomProduit;
end //
delimiter ;


#--------------------------------------
#------------- formulaire -------------
#--------------------------------------


delimiter //
create procedure creationFormulaire(_idUsager int)
begin
    insert into formulaires (usager_id, campagne_id)
        values (_idUsager, (select id from campagnes where actif = 1));
end //
delimiter ;

delimiter //
create procedure ajoutFormulaire(_idUsager int, _idProduit int)
begin
    insert into formulaire_produits (formulaire_id, campagne_produit_id)
        values ((select id from formulaires where _idUsager = usager_id
        and campagne_id = (select id from campagnes where actif = 1)), _idProduit);
end //
delimiter ;

delimiter //
create procedure selectionNombreProduits()
begin
    select campagne_produit_id, count(id) as nbr from formulaire_produits group by campagne_produit_id;
end //
delimiter ;
#drop procedure selectionNombreProduits;

#delimiter //
#create procedure creationUsager(_email varchar(25), _password varchar(255))
#begin

#end //
#delimiter ;


#----------------------------------
#------------- panier -------------
#----------------------------------


delimiter //
create procedure ajoutProduitPanier(_idUsager int, _idProduit int, _quantite int)
begin
    insert into panier_produits (panier_id, campagne_produit_id, quantite, campagne_id)
    VALUES ((select id from paniers where usager_id = _idUsager), _idProduit, _quantite, (select id from campagnes where actif = 1));
end //
delimiter ;
#drop procedure ajoutProduitPanier;

#camapgne_id probleme
delimiter //
create procedure ajoutDetailProduitPanier(_idUsager int, _idProduit int, _idDetail int)
begin
    insert into panier_detail_produits (panier_produit_id, detail_id)
    VALUES ((select id from panier_produits where campagne_produit_id =
    _idProduit & panier_id = (select id from paniers where usager_id =
    _idUsager)), _idDetail);
end //
delimiter ;
#drop procedure ajoutDetailProduitPanier;

# procedure qui permet d'afficher tous les produits, et leur details,
delimiter //
create procedure SelectionPanierUsager(_idUsager int)
begin
    select panier_produits.id, nomProduit, quantite, titre, detail
    from panier_produits
    join campagne_produits cp on cp.id = panier_produits.campagne_produit_id
    Join panier_detail_produits pdp on panier_produits.id = pdp.panier_produit_id
    Join details d on pdp.detail_id = d.id
    where panier_id = (select id from paniers where usager_id = _idUsager)
    and panier_produits.campagne_id = (select id from campagnes where actif = 1);
end //
delimiter ;