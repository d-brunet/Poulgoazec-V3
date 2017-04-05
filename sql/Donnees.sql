USE poulgoazec;

DELETE FROM POSTER;
DELETE FROM LOT;
DELETE FROM UTILISATEUR;
DELETE FROM TAILLE;
DELETE FROM BAC;
DELETE FROM QUALITE;
DELETE FROM PRESENTATION;
DELETE FROM ESPECE;
DELETE FROM PECHE;
DELETE FROM BATEAU;


 
 INSERT INTO QUALITE VALUES("A","glacÃ©"), 
 ("B","dÃ©classÃ©"), 
 ("E","extra");
 
 INSERT INTO PRESENTATION VALUES ("ET","EtÃªtÃ©"), 
 ("ENT","Entier"),
 ("VID","VidÃ©");

 INSERT INTO TAILLE VALUES (10,"Taille de 10"), 
 (15,"Taille de 15"), 
 (20,"Taille de 20"), 
 (25,"Taille de 25"), 
 (30,"Taille de 30"), 
 (35,"Taille de 35"), 
 (40,"Taille de 40"), 
 (45,"Taille de 45"), 
 (50,"Taille de 50"), 
 (55,"Taille de 55"), 
 (60,"Taille de 60"), 
 (65,"Taille de 65"), 
 (70,"Taille de 70"), 
 (75,"Taille de 75"), 
 (80,"Taille de 80"), 
 (85,"Taille de 85"), 
 (90,"Taille de 90"), 
 (95,"Taille de 95"); 

 INSERT INTO BAC VALUES ("B",2.50), 
 ("F",4 );

 INSERT INTO UTILISATEUR VALUES (1,"Treant_Marcel",MD5("Treant_Marcel%TM"),"Audierne MarÃ©e","treant.marcel@gmail.com","2 rue de la RÃ©publique","PLOUHINEC","29780","CP40001000","Acheteur", NULL), 
 (2,"Peren_Stephanie",MD5("Peren_Stephanie%PS"),"Rosatlantic","","10 rue de la RÃ©blique","PLOUHINEC","29780","CP30002222","Acheteur", NULL),
 (3,"Lapez_Johan",MD5("Lapez_Johan%LJ"),"Viviers d\'Audierne","","10 rue Schoch","AUDIERNE","29770","CP10001111","Acheteur", NULL), 
 (4,"Lamou_Gerard",MD5("Lamou_Gerard%LG"),"Conserverie d\'Audierne","","5 rue de la victoire","PLOUHINEC","29780","CP45003232","Acheteur", NULL), 
 (5,"Daniel_Jean",MD5("Daniel_Jean%DJ"),"La Criee Le Guilvinec","","2 rue principale","LE GUILVINEC","29730","CP45006786","Acheteur", NULL), 
 (6,"Louarn_Annie",MD5("Louarn_Annie%LA"),"Fumoir de la Pointe du Raz","","45 rue du marchÃ©","PLOGOFF","29770","CP44004343","Acheteur", NULL), 
 (7,"Claquin_Jean",MD5("Claquin_Jean%CJ"),"FURIC MAREE SA","","32 rue principale","LE GUILVINEC","29730","CP44003236","Acheteur", NULL), 
 (8,"Doare_Clet",MD5("Doare_Clet%DC"),"Halios MarÃ©e SA","","1 rue des poissons","SAINT GUENOLE","29760","CP45003333","Acheteur", NULL), 
 (9,"Lozach_Hery",MD5("Lozach_Hery%LH"),"Poissonnerie LEROY","","10 rue des bateaux","ESQUIBIEN","29770","CP45005656","Acheteur", NULL), 
 (10,"Quenet_Claude",MD5("Quenet_Claude%QC"),"Poissonnerie QUENET","","11 rue du port","DOUARNENEZ","29172","CP46007777","Acheteur", NULL), 
 (11,"Moan_Mickael",MD5("Moan_Mickael%MM"),"Aigue Marine","","5 rue du port","LOCTUDY","29750","CP45008787","Acheteur", NULL), 
 (12,"Gornes_Bernard",MD5("Gornes_Bernard%BG"),"Poissonnerie des Halles","","34 rue du port","AUDIERNE","29770","CP45006666","Acheteur", NULL),
 (13,"Crieur",MD5("Crieur%CR"),"La criÃ©e","","","POULGOAZEC","","","Crieur", NULL);





 INSERT INTO ESPECE VALUES (33760,"Baudroie","Lophius Piscatorus","BAUDR"), 
 (33090,"Bar de Chalut","Dicentrarchus Labrax","BARCH"), 
 (33091,"Bar de Ligne","Dicentrarchus Labrax","BARLI"), 
 (32130,"Lieu Jaune de Ligne","Pollachius pollachius","LJAUL"), 
 (42040,"AraignÃ©e de mer casier","Maja squinado","ARAIS"), 
 (42041,"AraignÃ©e de mer chalut","Maja squinado","ARAIL"), 
 (43010,"Homard","Hammarus gammorus","HOMAR"), 
 (43030,"Langouste rouge","Palinurus elephas","LANGR"), 
 (32140,"Lieu Noir","Lophius Virens","LNOI"), 
 (31020,"Turbot","Psetta maxima","TURBO"), 
 (33480,"Dorade rose","Pagellus bogaraveo","DORAD"), 
 (38150,"Raie douce","Raja Montagui","RAIE"), 
 (33020,"Congre commun","Conger conger","CONGR"), 
 (32020,"Merlu","Merluccius bilinearis","MERLU"), 
 (31030,"Barbue","Scophthalmus rhombus","BARBU"), 
 (31150,"Plie ou carrelet","Pleuronectes Platessa","PLIE"), 
 (32050,"Cabillaud","Gadus Morhua Morhue","CABIL"), 
 (32230,"Lingue franche","Molva Molva","LINGU"), 
 (33080,"Saint Pierre","Zeus Faber","STPIE"), 
 (33110,"MÃ©rou ou cernier","Polyprion Americanus","CERNI"), 
 (33120,"MÃ©rou noir","Epinephelus Guaza","MEROU"), 
 (33410,"Rouget Barbet","Mullus SPP","ROUGT"), 
 (33450,"Dorade royale chalut","Sparus Aurata","DORAC"), 
 (33451,"Dorade royale ligne","Sparus Aurata","DORAL"), 
 (33490,"Pageot Acarne","Pagellus Acarne","PAGEO"), 
 (33500,"Pageot Commun","Pagellus Arythrinus","PAGEC"), 
 (33580,"Vieille","LabrusBergylta","VIEIL"), 
 (33730,"Grondin gris","Eutrigla Gurnadus","GRONG"), 
 (33740,"Grondin rouge","Aspitrigla Cuculus","GRONR"), 
 (33761,"Baudroie Maigre","Lophius Piscicatorius","BAUDM"), 
 (33790,"Grondin Camard","Trigloporus Lastoviza","GRONC"), 
 (33800,"Grondin Perlon","Trigla Lucerna","GRONP"), 
 (34150,"Mulet","Mugil SPP","MULET"), 
 (35040,"Sardine atlantique","Sardina Pilchardus","SARDI"), 
 (37050,"Maquereau","Scomber Scombrus","MAQUE"), 
 (38160,"Raie Pastenague commune","Dasyatis Pastinaca","RAIEP"), 
 (42020,"Crabe tourteau de casier","Cancer Pagurus","CRABS"), 
 (42021,"Crabe tourteau de chalut","Cancer Pagurus","CRABL"), 
 (44010,"Langoustine","Nephrops norvegicus","LANGT"), 
 (57010,"Seiche","Sepia SPP","SEICH"), 
 (57020,"Calmar","Loligo SPP","CALAM"), 
 (57050,"Poulpe","Octopus SPP","POULP");

 INSERT INTO BATEAU VALUES (1,"Altair","Ad 895511"), 
 (2,"Macareux","Ad 584873"),
 (3,"Avel Ar Mor","Ad 584930"), 
 (4,"Plujadur","Ad 627846"),
 (5,"Gwaien","Ad 730414"),
 (6,"L Estran","Ad 815532"),
 (7,"Le Petit Corse","Ad 584826"),
 (8,"Le Vorlen","Ad 614221"),
 (9,"Les Copains d Abord","Ad 584846"), 
 (10,"Tu Pe Du","Ad 584871"),
 (11,"Korrigan","Ad 895472"),
 (12,"Ar Guevel","Ad 895479"),
 (13,"Broceliande","Ad 895519"),
 (14,"L Aventurier","Ad 584865"),
 (15,"L Oceanide","Ad 741312"),
 (16,"L Arche d alliance","Ad 584830"), 
 (17,"Sirocco","Ad 715792"),
 (18,"Ondine","Ad 584772"),
 (19,"Chimere","Ad 895516");


 INSERT INTO PECHE VALUES ("2008-07-18",1),  
 ("2008-07-18",4), 
 ("2008-07-18",9),  
 ("2008-07-18",11), 
 ("2008-07-20",11), 
 ("2008-07-21",11), 
 ("2008-07-23",11), 
 ("2008-07-24",1), 
 ("2008-07-24",11), 
 ("2008-07-25",1),  
 ("2008-07-25",3),  
 ("2008-07-25",7),  
 ("2008-07-25",11), 
 ("2008-07-30",1),  
 ("2008-07-30",3),  
 ("2008-07-30",7),  
 ("2008-07-30",11), 
 ("2008-08-12",5), 
 ("2008-08-12",9), 
 ("2008-08-25",3),  
 ("2008-08-25",11);


 INSERT INTO LOT VALUES ("2008-07-18", 11, 1, 32130, 40, "VID", "E", "B", 8.40, 7.50, "2008-07-18", "2008-07-18 10:15:00", 6.00, 6.00, "T", 4, NULL), 
 ("2008-07-18", 11, 2, 32130, 40, "VID", "E", "B", 9.10, 8.90, "2008-07-18", "2008-07-18 10:18:20", 6.00, 6.00, "T", 1, NULL), 
 ("2008-07-18", 11, 3, 32130, 40, "VID", "E", "B", 8.40, 8.50, "2008-07-18", "2008-07-18 10:21:20", 6.00, 6.00, "T",4, NULL), 
 ("2008-07-18", 11, 4, 32130, 20, "VID", "E", "F", 15.10, 10.00, "2008-07-18", "2008-07-18 10:25:20", 8.50, 8.50, "T", 2, NULL), 
 ("2008-07-18", 11, 5, 32130, 30, "VID", "E", "F", 10.40, 16.50, "2008-07-18", "2008-07-18 10:30:20", 14.30, 13.30, "L", NULL, NULL), 
 ("2008-07-20", 11, 1, 32130, 40, "VID", "E", "B", 8.40, 7.50, "2008-07-20", "2008-07-20 10:15:00", 6.00, 6.00, "T", 2, NULL), 
 ("2008-07-20", 11, 2, 32130, 40, "VID", "E", "B", 9.10, 8.90, "2008-07-20", "2008-07-20 10:18:20", 6.00, 6.00, "T", 3, NULL), 
 ("2008-07-20", 11, 3, 32130, 40, "VID", "E", "B", 8.40, 8.50, "2008-07-20", "2008-07-20 10:21:20", 6.00, 6.00, "T", NULL, NULL), 
 ("2008-07-20", 11, 4, 32130, 25, "VID", "A", "F", 15.10, 17.00, "2008-07-20", "2008-07-20 10:25:20", 16.50, 15.50, "T", NULL, NULL), 
 ("2008-07-20", 11, 5, 32130, 30, "VID", "E", "F", 10.40, 16.85, "2008-07-20", "2008-07-20 10:30:20", 16.30, 15.30, "T", NULL, NULL), 
 ("2008-07-21", 11, 1, 32130, 40, "VID", "E", "B", 8.40, 7.50, "2008-07-21", "2008-07-21 10:15:00", 6.00, 6.00, "T", 1, NULL), 
 ("2008-07-21", 11, 2, 32130, 40, "VID", "E", "B", 9.10, 8.90, "2008-07-21", "2008-07-21 10:18:20", 6.00, 6.00, "T", 3, NULL), 
 ("2008-07-21", 11, 3, 32130, 40, "VID", "E", "B", 8.40, 8.50, "2008-07-21", "2008-07-21 10:21:20", 6.00, 6.00, "T", 1, NULL), 
 ("2008-07-21", 11, 4, 32130, 20, "VID", "E", "F", 15.10, 17.30, "2008-07-21", "2008-07-21 10:25:20", 16.50, 15.50, "T", 2, NULL), 
 ("2008-07-21", 11, 5, 32130, 30, "VID", "E", "F", 10.40, 17.00, "2008-07-21", "2008-07-21 10:30:20", 14.30, 14.30, "T", 3, NULL), 
 ("2008-07-23", 11, 1, 32130, 20, "VID", "E", "F", 19.20, 9.20, "2008-07-23", "2008-07-23 10:25:20", 4.80, 4.50, "T", 4, NULL), 
 ("2008-07-23", 11, 2, 32130, 40, "VID", "E", "F", 19.20, 19.20, "2008-07-23","2008-07-23 10:28:20", 5.50, 5.00, "T", 1, NULL), 
 ("2008-07-24", 11, 1, 32130, 70, "VID", "E", "B", 13.00, 14.85, "2008-07-24","2008-07-24 10:08:20", 14.00, 12.00, "T", 2, NULL), 
 ("2008-07-24", 11, 2, 33091, 10, "ENT", "A", "F", 8.00, 15.00, "2008-07-24","2008-07-24 10:18:20", 14.00, 13.00, "T", 3, NULL), 
 ("2008-07-24", 11, 3, 33091, 30, "ENT", "E", "F", 21.00, 8.75, "2008-07-24","2008-07-24 10:38:20", 8.50, 8.30, "T", 4, NULL), 
 ("2008-07-24", 11, 4, 33091, 35, "ENT", "E", "B", 12.00, 8.00, "2008-07-24","2008-07-24 10:48:20", 7.50, 7.00, "T", 1, NULL), 
 ("2008-07-24",  1, 1, 32230, 25, "VID", "E", "B", 20.00, 9.15, "2008-07-24","2008-07-24 10:58:20", 8.50, 8.00, "T", 2, NULL), 
 ("2008-07-24",  1, 2, 32230, 30, "VID", "E", "B", 20.00, 14.65, "2008-07-24","2008-07-24 11:08:20", 14.00, 13.00, "T", 3, NULL), 
 ("2008-07-24",  1, 3, 32230, 40, "VID", "E", "F", 18.00, 8.35, "2008-07-24","2008-07-24 11:18:20", 8.00, 7.50, "T", 4, NULL), 
 ("2008-07-24",  1, 4, 33580, 25, "VID", "E", "F", 14.00, 17.10, "2008-07-24","2008-07-24 11:28:20", 16.50, 16.00, "T", 1, NULL), 
 ("2008-07-24", 11, 5, 33580, 20, "VID", "E", "B", 8.00, 14.80, "2008-07-24","2008-07-24 11:38:20", 14.00, 13.50, "T", 2, NULL), 
 ("2008-07-25",  7, 1, 32230, 25, "VID", "E", "F", 14.50, 16.70, "2008-07-25", "2008-07-25 17:55:00", 16.00, 15.00, "T", NULL, NULL), 
 ("2008-07-25",  7, 2, 32230, 35, "VID", "E", "F", 17.50, 16.50, "2008-07-25", "2008-07-25 18:00:00", 15.00, 14.00, "T", NULL, NULL), 
 ("2008-07-25", 11, 1, 33580, 40, "VID", "E", "F", 18.50, 8.65, "2008-07-25", "2008-07-25 11:24:04", 8.00, 7.00, "T", NULL, NULL), 
 ("2008-07-25",  1, 1, 33091, 10, "ENT", "A", "F", 10.80, 8.85, "2008-07-25", "2008-07-25 11:00:04", 7.00, 6.00, "T", NULL, NULL), 
 ("2008-07-25",  1, 2, 33580, 20, "VID", "E", "B", 9.60, 9.85, "2008-07-25", "2008-07-25 11:15:53", 9.00, 8.00, "T", NULL, NULL), 
 ("2008-07-25",  1, 3, 33091, 15, "ENT", "B", "B", 8.00, 15.25, "2008-07-25", "2008-07-25 11:18:53", 14.00, 13.00, "T", NULL, NULL), 
 ("2008-07-25",  3, 1, 33091, 30, "ENT", "B", "F", 19.00, 14.80, "2008-07-25", "2008-07-25 11:22:53", 14.00, 12.00, "T", NULL, NULL), 
 ("2008-07-25",  3, 2, 33091, 30, "ENT", "B", "F", 19.00, 14.80, "2008-07-25", "2008-07-25 11:32:53", 14.00, 12.00, "T", NULL, NULL), 
 ("2008-07-30",  7, 1, 33080, 25, "VID", "E", "F", 14.50, 17.50, "2008-07-30", "2008-07-30 17:55:00", 16.00, 15.00, "T", 4, NULL), 
 ("2008-07-30",  7, 2, 33080, 35, "VID", "E", "F", 17.50, 16.50, "2008-07-30", "2008-07-30 18:00:00", 15.00, 14.00, "T", 3, NULL), 
 ("2008-07-30", 11, 1, 33080, 40, "VID", "E", "F", 18.50, 8.70, "2008-07-30", "2008-07-30 11:24:04", 8.00, 7.00, "T", 2, NULL), 
 ("2008-07-30",  1, 1, 33091, 10, "ENT", "A", "F", 10.80, 7.20, "2008-07-30", "2008-07-30 11:00:04", 7.00, 6.00, "T", 2, NULL), 
 ("2008-07-30",  1, 2, 33080, 20, "VID", "E", "B", 9.60, 9.75, "2008-07-30", "2008-07-30 11:15:53", 9.00, 8.00, "T", 2, NULL), 
 ("2008-07-30",  1, 3, 33091, 15, "ENT", "B", "B", 8.00, 14.20, "2008-07-30", "2008-07-30 11:18:53", 14.00, 13.00, "T", 1, NULL), 
 ("2008-07-30",  3, 1, 33091, 30, "ENT", "B", "F", 19.00, 14.60, "2008-07-30", "2008-07-30 11:22:53", 14.00, 12.00, "T", 1, NULL),
 ("2008-07-30",  3, 2, 33110, 30, "ENT", "B", "F", 19.00, 14.15, "2008-07-30", "2008-07-30 11:32:53", 14.00, 12.00, "T", 1, NULL), 
 ("2008-07-30",  7, 3, 33080, 25, "VID", "E", "F", 14.50, 0.00, "2008-07-30", "2008-07-30 17:55:00", 16.00, 15.00, "E", NULL, NULL), 
 ("2008-07-30",  7, 4, 33080, 35, "VID", "E", "F", 17.50, 0.00, "2008-07-30", "2008-07-30 18:00:00", 15.00, 14.00, "E", NULL, NULL), 
 ("2008-07-30", 11, 2, 33080, 40, "VID", "E", "F", 18.50, 0.00, "2008-07-30", "2008-07-30 11:24:04", 8.00, 7.00, "E", NULL, NULL),
 ("2008-07-30",  1, 4, 33110, 10, "ENT", "A", "F", 10.80, 0.00, "2008-07-30", "2008-07-30 11:00:04", 7.00, 6.00, "E", NULL, NULL), 
 ("2008-07-30",  1, 5, 33080, 20, "VID", "E", "B", 9.60, 0.00, "2008-07-30", "2008-07-30 11:15:53", 9.00, 8.00, "E", NULL, NULL),
 ("2008-07-30",  1, 6, 33110, 15, "ENT", "B", "B", 8.00, 0.00, "2008-07-30", "2008-07-30 11:18:53", 14.00, 13.00, "E", NULL, NULL), 
 ("2008-07-30",  3, 3, 33110, 30, "ENT", "B", "F", 19.00, 0.00, "2008-07-30", "2008-07-30 11:22:53", 14.00, 12.00, "E", NULL, NULL),
 ("2008-07-30",  3, 4, 33451, 30, "ENT", "B", "F", 19.00, 0.00, "2008-07-30", "2008-07-30 11:32:53", 14.00, 12.00, "E", NULL, NULL),
 ("2008-07-30",  7, 5, 33080, 25, "VID", "E", "F", 14.50, 0.00, "2008-07-30", "2008-07-30 17:55:00", 16.00, 15.00, "E", NULL, NULL), 
 ("2008-07-30",  7, 6, 33080, 35, "VID", "E", "F", 17.50, 0.00, "2008-07-30", "2008-07-30 18:00:00", 15.00, 14.00, "E", NULL, NULL), 
 ("2008-07-30", 11, 3, 33080, 40, "VID", "E", "F", 18.50, 0.00, "2008-07-30", "2008-07-30 11:24:04", 8.00, 7.00, "E", NULL, NULL),
 ("2008-07-30",  1, 7, 33451, 10, "ENT", "A", "F", 10.80, 0.00, "2008-07-30", "2008-07-30 11:00:04", 7.00, 6.00, "E", NULL, NULL), 
 ("2008-07-30",  1, 8, 33080, 20, "VID", "E", "B", 9.60, 0.00, "2008-07-30", "2008-07-30 11:15:53", 9.00, 8.00, "E", NULL, NULL),
 ("2008-07-30",  1, 9, 33451, 15, "ENT", "B", "B", 8.00, 0.00, "2008-07-30", "2008-07-30 11:18:53", 14.00, 13.00, "E", NULL, NULL), 
 ("2008-07-30",  3, 5, 33451, 30, "ENT", "B", "F", 19.00, 0.00, "2008-07-30", "2008-07-30 11:22:53", 14.00, 12.00, "E", NULL, NULL), 
 ("2008-07-30",  3, 6, 33451, 30, "ENT", "B", "F", 19.00, 0.00, "2008-07-30", "2008-07-30 11:32:53", 14.00, 12.00, "E", NULL, NULL), 
 ("2008-08-12",  5, 1, 32050, 25, "VID", "E", "F", 12.00, 15.00, "2008-08-25", "2008-08-25 16:11:30", 3.00, 5.00, "C", 4, NULL),
 ("2008-08-12",  9, 1, 42040, 10, "ENT", "E", "F", 15.00, NULL, "2008-08-25", "2008-08-25 16:11:30", NULL, NULL, "C", NULL, NULL), 
 ("2008-08-12",  9, 2, 42040, 10, "ENT", "E", "F", 20.00, NULL, "2008-08-25", "2008-08-25 16:11:30", NULL, NULL, "C", NULL, NULL), 
 ("2008-08-25",  3, 1, 33090, 25, "ENT", "E", "B", 13.00, 4.00, "2008-08-25", "2008-08-25 16:23:25", 2.00, 2.00, "T", 4, NULL), 
 ("2008-08-25",  3, 2, 33090, 25, "ENT", "E", "B", 15.00, 7.00, "2008-08-25", "2008-08-25 16:27:25", 2.00, 2.00, "T", 4, NULL), 
 ("2008-08-25",  3, 3, 33090, 25, "ENT", "E", "B", 15.80, 8.00, "2008-08-25", "2008-08-25 16:35:25", 2.00, 2.00, "T", 4, NULL),
 ("2008-08-25",  3, 4, 33090, 25, "ENT", "E", "B", 15.80, NULL, "2008-08-25", "2008-08-25 16:11:30", NULL, NULL, "C", NULL, NULL), 
 ("2008-08-25",  3, 5, 33090, 25, "ENT", "E", "B", 13.80, NULL, "2008-08-25", "2008-08-25 16:11:30", NULL, NULL, "C", NULL, NULL), 
 ("2008-08-25",  3, 6, 33090, 25, "ENT", "E", "B", 11.80, NULL, "2008-08-25", "2008-08-25 16:11:30", NULL, NULL, "C", NULL, NULL), 
 ("2008-08-25", 11, 1, 33091, 25, "ENT", "E", "F", 14.60, NULL, "2008-08-25", "2008-08-25 16:39:25", 2.00, 2.00, "E", NULL, NULL), 
 ("2008-08-25", 11, 2, 33091, 25, "ENT", "E", "F", 15.60, NULL, "2008-08-25", "2008-08-25 16:43:25", 2.00, 2.00, "E", NULL, NULL), 
 ("2008-08-25",  3, 7, 33090, 25, "ENT", "E", "B", 15.80, NULL, "2008-08-25", "2008-08-25 16:47:25", 2.00, 2.00, "E", NULL, NULL);

 INSERT INTO POSTER VALUES ("2008-07-18", 11, 1, 1, 7.45, "2008-07-18 10:17:08"), 
 ("2008-07-18", 11, 1, 3, 6.55, "2008-07-18 10:15:18"), 
 ("2008-07-18", 11, 1, 4, 7.50, "2008-07-18 10:17:48"), 
 ("2008-07-18", 11, 2, 1, 7.55, "2008-07-18 10:18:37"), 
 ("2008-07-18", 11, 2, 2, 8.50, "2008-07-18 10:20:59"), 
 ("2008-07-18", 11, 2, 3, 8.35, "2008-07-18 10:20:48"), 
 ("2008-07-18", 11, 2, 4, 7.50, "2008-07-18 10:18:23"), 
 ("2008-07-18", 11, 3, 2, 7.70, "2008-07-18 10:21:48"), 
 ("2008-07-18", 11, 3, 4, 8.50, "2008-07-18 10:22:13"), 
 ("2008-07-18", 11, 4, 1, 9.50, "2008-07-18 10:22:13"), 
 ("2008-07-18", 11, 4, 2, 10.00, "2008-07-18 10:22:13"), 
 ("2008-07-18", 11, 5, 4, 8.50, "2008-07-18 10:22:13"), 
 ("2008-07-18", 11, 5, 2, 8.75, "2008-07-18 10:22:13"), 
 ("2008-07-20", 11, 1, 1, 7.45, "2008-07-20 10:17:08"), 
 ("2008-07-20", 11, 1, 2, 7.80, "2008-07-20 10:17:48"), 
 ("2008-07-20", 11, 1, 3, 6.55, "2008-07-20 10:15:18"), 
 ("2008-07-20", 11, 2, 1, 8.35, "2008-07-20 10:20:48"), 
 ("2008-07-20", 11, 2, 2, 8.50, "2008-07-20 10:20:59"), 
 ("2008-07-20", 11, 2, 3, 8.55, "2008-07-20 10:21:18"), 
 ("2008-07-20", 11, 2, 4, 7.50, "2008-07-20 10:18:23"), 
 ("2008-07-21", 11, 1, 1, 8.50, "2008-07-21 10:22:13"), 
 ("2008-07-21", 11, 1, 2, 7.70, "2008-07-21 10:21:48"), 
 ("2008-07-21", 11, 2, 2, 7.70, "2008-07-21 10:21:48"), 
 ("2008-07-21", 11, 2, 3, 8.95, "2008-07-21 10:22:13"), 
 ("2008-07-30",  7, 1, 4, 17.50, "2008-07-30 11:02:53"), 
 ("2008-07-30",  7, 2, 3, 16.50, "2008-07-30 11:06:53"), 
 ("2008-07-30", 11, 1, 2, 8.70, "2008-07-30 11:09:53"), 
 ("2008-07-30",  1, 1, 2, 7.20, "2008-07-30 11:12:53"), 
 ("2008-07-30",  1, 2, 2, 9.75, "2008-07-30 11:16:53"), 
 ("2008-07-30",  1, 3, 1, 14.20, "2008-07-30 11:20:53"), 
 ("2008-07-30",  3, 1, 1, 14.60, "2008-07-30 11:26:53"), 
 ("2008-07-30",  3, 2, 1, 15.50, "2008-07-30 11:30:53"), 
 ("2008-07-30",  7, 1, 1, 15.50, "2008-07-30 11:30:58"), 
 ("2008-07-30",  1, 8, 1, 12.50, "2008-07-30 11:30:54"), 
 ("2008-07-30",  3, 5, 1, 14.10, "2008-07-30 11:30:53"), 
 ("2008-08-25",  3, 1, 4, 4.00, "2008-08-25 15:12:26"), 
 ("2008-08-25",  3, 2, 3, 6.00, "2008-08-25 15:17:12"), 
 ("2008-08-25",  3, 2, 4, 7.00, "2008-08-25 15:18:53"), 
 ("2008-08-25",  3, 3, 3, 7.00, "2008-08-25 15:21:44"), 
 ("2008-08-25",  3, 3, 4, 8.00, "2008-08-25 15:22:13"), 
 ("2008-08-25", 11, 1, 4, 23.00, "2008-08-25 16:41:34"); 

