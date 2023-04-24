delimiter //
create function fn_retourNombreProduits(_idProduit int) returns int
begin
    return (select count(id) from formulaire_produits group by campagne_produit_id);
end //
delimiter ;

#drop function fn_retourNombreProduits;