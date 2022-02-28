use sbateliers;

-- Atelier
insert into Atelier values (1,"2022-10-20","2022-10-25 16:30","1:30",4,"création de savon bio",1);
insert into Atelier values (2,"2022-11-10","2022-11-30 15:00","1:00",10,"Création de parfum bio",2);
insert into Atelier values (3,"2022-08-10","2022-08-15 10:00","2:00",8,"Conférence sur les produits cosmétiques bio",4);
insert into Atelier values (4,"2022-11-15","2022-11-18 8:00","1:30",6,"Visite de l'enseigne Sanayabio",2);
insert into  Atelier values (5,"2022-11-30","2022-12-02 10:00","1:30",4,"Fabrication de parfum bio cosmétique",3);

-- Responsable Ateliers
insert into ResponsableAteliers values (1,"paulibio","azerty","Alain","Paul");
insert into ResponsableAteliers  values (2,"mariabio","azerty","Débé","Maria");
insert into ResponsableAteliers  values (3,"philbio","azerty","Boulin","Phil");
insert into ResponsableAteliers  values (4,"ravenbio","azerty","Raven","Victor");
insert into ResponsableAteliers  values (5,"monabio","azerty","Mira","Mona");


-- Client
insert into Client values (1,"Femme","Mermaid","Paola","1993-02-15","merpaola@laposte.net","azerty","104 rue de Ariel","78000","Oceano","0698752265");
insert into Client values (2,"Femme","Bernapé","Mona","1999-05-26","monab.pro@gmail.com","1234","12 allée Mona Lisa","92000","Louvre","0656124578");
insert into  Client values (3,"Homme","Champagne","Luc","2000-04-18","luchampagne@yahoo.com","champ","50 rue des Champetre","45120","Vignes","0614789562");
insert into  Client values (4,"Autres","Michelin","1997-12-31","elmichelin@laposte.net","mimi","2 avenue des Roux","129568","Rouxelles","0321569875");
insert into Client values (5,"Femme","Dora","1994-10-28","dora.pomin@gmail.com","babouche","23 allée de l'explo ","25698","Salvadorada","0123456784");

--Participation
insert into Participation values (1,1,"2022-11-12");
insert into Participation values (3,1,"2022-11-27");
insert into Participation  values (4,1,"2022-10-23");
insert into Participation values (5,1,"2022-11-14");
insert into Participation values (2,1,"2022-08-12");