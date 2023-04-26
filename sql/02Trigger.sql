delimiter //
create trigger before_insert_campagne_produits
    before insert
    on campagne_produits
    for each row
begin
    set new.campagne_id = (select id from campagnes where actif = true);
    insert into produits VALUE(new.nomProduit);
end //
delimiter ;
drop trigger before_insert_campagne_produits

#select nomProduit from campagne_produits where id = new.campagne_produit_id;
#delimiter //
#create trigger after_insert_campagne_detail_produits
#    before insert
#    on campagne_detail_produits
#    for each row
#begin
#   if not exists(select id from produits where nomProduit LIKE
#                    (select nomProduit from campagne_produits where id = new.campagne_produit_id)) then
#        insert into produits(nomProduit)
#        VALUES ((select nomProduit from campagne_produits where id = new.campagne_produit_id));
#    END IF;
#
#    if not exists(select id from produit_details where new.detail_id =
#                    produit_details.detail_id and produit_details.produit_id =
#                   (select id from produits where nomProduit LIKE
#                    (select nomProduit from campagne_produits where id = new.campagne_produit_id))) then
#        insert into produit_details(produit_id, detail_id)
#        values( (select id from produits where nomProduit LIKE
#                (select nomProduit from campagne_produits where id =
#                new.campagne_produit_id)) , new.detail_id);
#    end if;
#end //
#delimiter ;
#drop trigger after_insert_campagne_detail_produits;

delimiter //
create trigger after_insert_usager
    after insert
    on usagers
    for each row
begin
    insert into paniers (usager_id)
        values (new.id);
end //
delimiter ;
