CREATE DATABASE gestion_employe;

create table gestion_employe.EMP(
	noemp int(4) primary key not null,
	nom varchar(20),
	prenom varchar(20),
	emploi varchar(20),
	sup int(4),
	embauche date,
	sal float(9, 2),
	comm float(9, 2),
	noserv int(2) not null
);

create table gestion_employe.SERV(
	noserv int(2) primary key not null,
	service varchar(20),
	ville varchar(20)
);

alter table EMP
	add constraint foreign key (noserv) references SERV (noserv);

alter table EMP
	add constraint foreign 'fk_key' key (sup) references EMP (noemp);


insert into SERV values (1,'DIRECTION','PARIS');
insert into SERV values (2,'LOGISTIQUE','SECLIN');
insert into SERV values (3,'VENTES','ROUBAIX');
insert into SERV values (4,'FORMATION','VILLENEUVE D''ASCQ');
insert into SERV values (5,'INFORMATIQUE','LILLE');
insert into SERV values (6,'COMPTABILITE','LILLE');
insert into SERV values (7,'TECHNIQUE','ROUBAIX');
 

insert into EMP values (1000,'LEROY','PAUL','PRESIDENT',null,str_to_date('25/10/87','%d/%m/%y'),55005.5,null,1);
insert into EMP values (1100,'DELPIERRE','DOROTHEE','SECRETAIRE',1000,str_to_date('25/10/87','%d/%m/%y'),12351.24,null,1);
insert into EMP values (1101,'DUMONT','LOUIS','VENDEUR',1300,str_to_date('25/10/87','%d/%m/%y'),9047.9,0,1);
insert into EMP values (1102,'MINET','MARC','VENDEUR',1300,str_to_date('25/10/87','%d/%m/%y'),8085.81,17230,1);
insert into EMP values (1104,'NYS','ETIENNE','TECHNICIEN',1200,str_to_date('25/10/87','%d/%m/%y'),12342.23,null,1);
insert into EMP values (1105,'DENIMAL','JEROME','COMPTABLE',1600,str_to_date('25/10/87','%d/%m/%y'),15746.57,null,1);
insert into EMP values (1200,'LEMAIRE','GUY','DIRECTEUR',1000,str_to_date('11/03/87','%d/%m/%y'),36303.63,null,2);
insert into EMP values (1201,'MARTIN','JEAN','TECHNICIEN',1200,str_to_date('25/06/87','%d/%m/%y'),11235.12,null,2);
insert into EMP values (1202,'DUPONT','JACQUES','TECHNICIEN',1200,str_to_date('30/10/88','%d/%m/%y'),10313.03,null,2);
insert into EMP values (1300,'LENOIR','GERARD','DIRECTEUR',1000,str_to_date('02/04/87','%d/%m/%y'),31353.14,13071,3);
insert into EMP values (1301,'GERARD','ROBERT','VENDEUR',1300,str_to_date('16/04/99','%d/%m/%y'),7694.77,12430,3);
insert into EMP values (1303,'MASURE','EMILE','TECHNICIEN',1200,str_to_date('17/06/88','%d/%m/%y'),10451.05,null,3);
insert into EMP values (1500,'DUPONT','JEAN','DIRECTEUR',1000,str_to_date('23/10/87','%d/%m/%y'),28434.84,null,5);
insert into EMP values (1501,'DUPIRE','PIERRE','ANALYSTE',1500,str_to_date('24/10/84','%d/%m/%y'),23102.31,null,5);
insert into EMP values (1502,'DURAND','BERNARD','PROGRAMMEUR',1500,str_to_date('30/07/87','%d/%m/%y'),13201.32,null,5);
insert into EMP values (1503,'DELNATTE','LUC','PUPITREUR',1500,str_to_date('15/01/99','%d/%m/%y'),8801.01,null,5);
insert into EMP values (1600,'LAVARE','PAUL','DIRECTEUR',1000,str_to_date('13/12/91','%d/%m/%y'),31238.12,null,6);
insert into EMP values (1601,'CARON','ALAIN','COMPTABLE',1600,str_to_date('16/09/85','%d/%m/%y'),33003.3,null,6);
insert into EMP values (1602,'DUBOIS','JULES','VENDEUR',1300,str_to_date('20/12/90','%d/%m/%y'),9520.95,35535,6);
insert into EMP values (1603,'MOREL','ROBERT','COMPTABLE',1600,str_to_date('18/07/85','%d/%m/%y'),33003.3,null,6);
insert into EMP values (1604,'HAVET','ALAIN','VENDEUR',1300,str_to_date('01/01/91','%d/%m/%y'),9388.94,33415,6);
insert into EMP values (1605,'RICHARD','JULES','COMPTABLE',1600,str_to_date('22/10/85','%d/%m/%y'),33503.35,null,5);
insert into EMP values (1615,'DUPREZ','JEAN','BALAYEUR',1000,str_to_date('22/10/98','%d/%m/%y'),6000.6,null,5);



