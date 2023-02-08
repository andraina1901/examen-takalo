create database takalotakalo;

create table users (
    idUser int primary key auto_increment,
    nom varchar(20),
    email varchar(20) ,
    password varchar(20),
    datenaissance date ,
    isadmin boolean
);

create table category (
    idcategory int primary key auto_increment,
    nomcategory varchar(20)
);
insert into category value (-1 ,'neutre');

create table objectuser (
    idobjectuser int primary key auto_increment ,
    idUser int ,
    idcategory int ,
    nomobjet varchar(30),
    description varchar(2050),
    prixestimatif float ,
    datepublication date ,
    photo varchar(30),
    foreign key (idUser) references users(idUser),
    foreign key (idcategory) references category(idcategory)
);

create table photoobjectuser(
    idphoto int primary key auto_increment ,
    idobjectuser int,
    foreign key (idobjectuser) references objectuser(idobjectuser)
);
create table demande (
    iddemande int primary key auto_increment,
    idobjectpropose int ,
    idobjectdemande int ,
    etatdemande int , 
    datedemande date ,
    datereponse date ,
    foreign key (idobjectpropose) references objectuser(idobjectuser),
    foreign key (idobjectdemande) references objectuser(idobjectuser)
) ;
create table historiqueobjectuser  (
    idhistoriqueobjectuser int primary key auto_increment,
    idobjectuser int  ,
    idUser int ,
    idcategory int ,
    nomobjet varchar(30),
    description varchar(2050),
    prixestimatif float ,
    datepublication date ,
    foreign key (idobjectuser) references objectuser(idobjectuser),
    foreign key (idUser) references users(idUser),
    foreign key (idcategory) references category(idcategory)
);



insert into users values (null ,'Lala'  ,'lala@gmail.com' , '123' , '2000-12-12', false);
insert into users values (null ,'Soa'  ,'soa@gmail.com' , '123' , '2000-12-12', false);
insert into users values (null ,'Sefo'  ,'sefo@gmail.com' , '123' , '2000-12-12', false);
insert into users values (null ,'admin'  ,'admin@gmail.com' , '123' , '2000-12-12', true);

insert into category values (null ,'vetement');
insert into category values (null ,'chaussure');
insert into category values (null ,'livre');
insert into category values (null ,'telephone');
insert into category values (null ,'high-tech');
insert into category values (-1,'neutre');

insert into objectuser values (null , 1,2, 'nike2022' ,'Cette chaussure est merveilleuse , elle est tres rare car c est un modele unique' ,10000 , '2019-01-05',null);
insert into objectuser values (null , 1,1, 'chemise bleue' ,'C est une chemise de la marque kintana' ,200 ,'2019-01-06',null);
insert into objectuser values (null , 2,2, 'scoobydoo' ,'Sandale inspiree des sandales d aigle d or , elle est fait par moi (XD)' ,50 ,'2019-01-07',null);
insert into objectuser values (null , 2,3, 'iphone22' ,'Pas besoin de commentaires , c est une iphone ToT' ,2500 ,'2019-01-08',null);
insert into objectuser values (null , 3,2, 'Jordan' ,'La nouvelle collection Jordan x Paris Saint-Germain s inspire de l éclat de Paris sur la scène internationale.' ,500 ,'2019-01-09',null);
insert into objectuser values (null , 3,3, 'Samsung s22' ,'Présentation des Galaxy S22 5G et S22+ 5G avec appareil photo Nightography, stockage pour conserver toutes vos photos de nuit et loin au-delà de la batterie' ,1000 ,'2019-01-10',null);
insert into objectuser values (null , 3,-1, 'Salon' ,'Présentation des Galaxy S22 5G et S22+ 5G avec appareil photo Nightography, stockage pour conserver toutes vos photos de nuit et loin au-delà de la batterie' ,1000 ,'2019-01-10',null);
insert into objectuser values (null , 3,-1, 'Cle usb' ,'Présentation des Galaxy S22 5G et S22+ 5G avec appareil photo Nightography, stockage pour conserver toutes vos photos de nuit et loin au-delà de la batterie' ,1000 ,'2019-01-10',null);
 insert into objectuser values (null , 1,3, 'pull' ,'cachemir tres doux',340 ,'2019-01-06',null);
insert into objectuser values (null , 2,2, 'air force' ,'tennis seulement portes 1 fois' ,50 ,'2019-01-07',null);
insert into objectuser values (null , 1,1, 'polo' ,'couleur bleu avec tissu coton',200 ,'2019-01-06',null);
insert into objectuser values (null , 1,3, 'pull' ,'cachemir tres doux',340 ,'2019-01-06',null);
insert into objectuser values (null , 2,5, 'acer' ,'asus neuf', 3000,'2019-01-06',null);
insert into objectuser values (null , 1,5, 'tuff' ,'asus neuf', 3000,'2019-01-06',null);
 update objectuser set nomobjet='polaroid' where nomobjet='Salon';

insert into demande values( null , 1 ,2 ,0 , '2022-01-01' , null);
insert into demande values( null , 5 ,7 ,0 , '2022-01-01' , null);
insert into demande values( null , 9 ,11,-10 , '2022-01-01' , '2022-01-02');
insert into demande values( null , 10 ,12 ,10 , '2022-01-01' , '2022-01-02');
insert into demande values( null , 3 , 4,0 , '2022-01-01' , '2022-01-02');
insert into demande values( null , 1 ,5 ,0 , '2022-01-01' , '2022-01-02');

 insert into historiqueobjectuser values(1,4,1,2,'nike2022',null,10000,'2019-01-08');
  insert into historiqueobjectuser values(2,8,2,3,'iphone',null,10000,'2019-01-08');
  insert into historiqueobjectuser values(3,3,1,3,'iphone',null,10000,'2019-02-07');




