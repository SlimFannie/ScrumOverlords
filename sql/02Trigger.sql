delimiter //
create trigger before_insert_campagne_produits
    before insert
    on campagne_produits
    for each row
begin
    set new.campagne_id = (select id from campagnes where actif = true);
end //
delimiter ;

delimiter //
create trigger after_insert_campagne_detail_produits
    before insert
    on campagne_detail_produits
    for each row
begin
    #select nomProduit from campagne_produits where id = new.campagne_produit_id;
    #premier if sert a savoir s'il y a le produit qui exist déjà.
    # le deuxième if va être pour savois si la liaison précise existe,
    # donc un not exists avec le insert into dedans.

    if not exists(select id from produits where nomProduit LIKE (select nomProduit from campagne_produits where id = new.campagne_produit_id)) then
        insert into produits(nomProduit)
        VALUES ((select nomProduit from campagne_produits where id = new.campagne_produit_id));
    END IF;

    if not exists(select id from produit_details where new.detail_id = produit_details.detail_id) then
        insert into produit_details(produit_id, detail_id)
        values( 1 , new.detail_id);
    end if;

end //
delimiter ;



