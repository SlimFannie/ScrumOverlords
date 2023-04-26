delimiter //
create function fn_retourNombreProduits() returns int
begin
    return (select count(id) from formulaire_produits group by campagne_produit_id);
end //
delimiter ;
#drop function fn_retourNombreProduits;

select fn_retourNombreProduits();
select count(id), campagne_produit_id from formulaire_produits group by campagne_produit_id;