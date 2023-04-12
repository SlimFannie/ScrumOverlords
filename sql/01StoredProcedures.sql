delimiter //
create procedure creationUsager(_prenom varchar(255), _nom varchar(255), _adresseCourriel varchar(255), _motDePasse varchar(1000), _role integer)
begin
    insert into usagers(prenom, nom, adresseCourriel, motDePasse, role)
        VALUES (_prenom, _nom, _adresseCourriel, _motDePasse, _role);
end //
delimiter ;

###drop procedure creationUsager;

delimiter //
create procedure connection(_email varchar(255), _password varchar(1000))
begin

    if not exists(select adresseCourriel from usagers where adresseCourriel = _email) then
        select 0 as message;
    elseif exists(select adresseCourriel from usagers where adresseCourriel = _email and motDePasse = _password) then
        select 1 as message;
    else
        select 0 as message;
    end if;
end //
delimiter ;

delimiter //
create procedure creationCampagneProduit(_idProduit integer)
begin
    insert into campagne_produits(produit_id)
        Values(_idProduit);
end //
delimiter ;

delimiter //
create procedure creationCampagne(_nom varchar(25))
begin
    if not exists(select nom from campagnes where nom = _nom) then
        insert into campagnes(nom, actif)
            values(_nom, true);
    elseif exists(select actif from campagnes where actif = true) then
        select 'Il y as deja une campagne actif' as message;
    else
        select 'Une campagne avec ce nom existe déjà' as message;
    end if;
end //
delimiter ;
#drop procedure creationCampagne;

delimiter //
create procedure creationFormulaire(_email varchar(25), _password varchar(255))
begin

end //
delimiter ;



#delimiter //
#create procedure creationUsager(_email varchar(25), _password varchar(255))
#begin

#end //
#delimiter ;