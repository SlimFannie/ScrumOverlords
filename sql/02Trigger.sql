delimiter //
create trigger before_insert_campagne_produits
    before insert
    on campagne_produits
    for each row
begin
    set new.campagne_id = (select id from campagnes where actif = true);
end //
delimiter ;





