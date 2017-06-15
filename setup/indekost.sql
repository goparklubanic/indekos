DROP TABLE IF EXISTS gedung;
CREATE TABLE gedung(
kodeGedung varchar(4) not null unique primary key,
namaGedung varchar(40) not null,
alamat tinytext,
telp varchar(16),
jmKamar int(3)
);
-- dump table gedung
insert into gedung values
('RK-1','Pondok Duren', 'Jl. Duren No 9','021-1234567',8),
('RK-2','Pondok Salak', 'Jl. Salak No 8','021-1234577',12),
('RK-3','Pondok Jambu', 'Jl. Jambu No 7','021-1234587',14),
('RK-4','Pondok Nanas', 'Jl. Nanas No 6','021-1234597',20),
('RK-5','Pondok Kapas', 'Jl. Kapas No 5','021-1234607',6);

DROP TABLE IF EXISTS kamar;
CREATE TABLE kamar(
kodeKamar varchar(7) not null primary key,
kodeGedung varchar(4) not null,
nomorKamar int(3) unsigned default null,
dayaTampung int(2),
kelasTarif int(2),
occupancy int(2) default '0'
);

-- DUMP TABLE KAMAR
INSERT INTO kamar VALUES
('RK-1001','RK-1','001','2','1','0'),
('RK-1002','RK-1','002','2','1','0'),
('RK-1003','RK-1','003','2','1','0'),
('RK-1004','RK-1','004','2','1','0'),
('RK-1005','RK-1','005','2','1','0'),
('RK-1006','RK-1','006','2','1','0'),
('RK-1007','RK-1','007','2','1','0'),
('RK-1008','RK-1','008','2','1','0'),
('RK-2001','RK-2','001','2','1','0'),
('RK-2002','RK-2','002','2','1','0'),
('RK-2003','RK-2','003','2','1','0'),
('RK-2004','RK-2','004','2','1','0'),
('RK-2005','RK-2','005','2','1','0'),
('RK-2006','RK-2','006','2','1','0'),
('RK-2007','RK-2','007','2','1','0'),
('RK-2008','RK-2','008','2','1','0'),
('RK-2009','RK-2','009','2','1','0'),
('RK-2010','RK-2','010','2','1','0'),
('RK-2011','RK-2','011','2','1','0'),
('RK-2012','RK-2','012','2','1','0'),
('RK-3001','RK-3','001','2','1','0'),
('RK-3002','RK-3','002','2','1','0'),
('RK-3003','RK-3','003','2','1','0'),
('RK-3004','RK-3','004','2','1','0'),
('RK-3005','RK-3','005','2','1','0'),
('RK-3006','RK-3','006','2','1','0'),
('RK-3007','RK-3','007','2','1','0'),
('RK-3008','RK-3','008','2','1','0'),
('RK-3009','RK-3','009','2','1','0'),
('RK-3010','RK-3','010','2','1','0'),
('RK-3011','RK-3','011','2','1','0'),
('RK-3012','RK-3','012','2','1','0'),
('RK-3013','RK-3','013','2','1','0'),
('RK-3014','RK-3','014','2','1','0'),
('RK-4001','RK-4','001','2','1','0'),
('RK-4002','RK-4','002','2','1','0'),
('RK-4003','RK-4','003','2','1','0'),
('RK-4004','RK-4','004','2','1','0'),
('RK-4005','RK-4','005','2','1','0'),
('RK-4006','RK-4','006','2','1','0'),
('RK-4007','RK-4','007','2','1','0'),
('RK-4008','RK-4','008','2','1','0'),
('RK-4009','RK-4','009','2','1','0'),
('RK-4010','RK-4','010','2','1','0'),
('RK-4011','RK-4','011','2','1','0'),
('RK-4012','RK-4','012','2','1','0'),
('RK-4013','RK-4','013','2','1','0'),
('RK-4014','RK-4','014','2','1','0'),
('RK-4015','RK-4','015','2','1','0'),
('RK-4016','RK-4','016','2','1','0'),
('RK-4017','RK-4','017','2','1','0'),
('RK-4018','RK-4','018','2','1','0'),
('RK-4019','RK-4','019','2','1','0'),
('RK-4020','RK-4','020','2','1','0'),
('RK-5001','RK-5','001','1','1','0'),
('RK-5002','RK-5','002','1','1','0'),
('RK-5003','RK-5','003','1','1','0'),
('RK-5004','RK-5','004','1','1','0'),
('RK-5005','RK-5','005','1','1','0'),
('RK-5006','RK-5','006','1','1','0');


DROP TABLE IF EXISTS kelasTarif;
CREATE TABLE kelasTarif(
id int(2) unsigned auto_increment primary key,
namaKelas varchar(20),
tarif int(7) default 0
);

-- dump tabel kelasTarif --
INSERT INTO kelasTarif (namaKelas,tarif) VALUES
('Apel',500000),
('Pear',750000),
('Kiwi',1000000),
('Duku',1500000);

DROP TABLE IF EXISTS penghuni;
CREATE TABLE penghuni(
nomorKTP varchar(16) unique primary key,
namaPenghuni varchar(40),
jenisKelamin enum('Pria','Wanita') default 'Pria',
alamatAsal tinytext,
nomorHP varchar(16)
);

DROP TABLE IF EXISTS kontrak;
CREATE TABLE kontrak(
idKontrak int(5) unsigned auto_increment primary key,
tgKontrak date,
nomorKTP varchar(16) not null,
kodeKamar varchar(7),
periodFrom date,
periodTill date,
tarif int(7) default '0',
status enum('active','inactive') default 'active'
);

DROP TABLE IF EXISTS payment;
CREATE TABLE payment(
idPayment int(4) unsigned auto_increment primary key,
idKontrak int(5),
paymentDate date,
nominal int(7) default 0,
paymentPeriodFrom date,
paymentPeriodTill date
);


-- VIEWS 
CREATE OR REPLACE VIEW viewKamar AS 
SELECT kamar.kodeKamar,namaGedung,nomorKamar,namaKelas,tarif,dayaTampung 
FROM kamar,gedung,kelasTarif 
WHERE gedung.kodeGedung = kamar.kodeGedung && kelasTarif.id = kamar.kelasTarif;

CREATE OR REPLACE VIEW viewKontrak AS \
SELECT kontrak.*, penghuni.namaPenghuni, gedung.namaGedung, kamar.nomorKamar
FROM kontrak,penghuni,gedung,kamar 
WHERE penghuni.nomorKTP=kontrak.nomorKTP && 
kamar.kodeKamar = kontrak.kodeKamar && 
gedung.kodeGedung = kamar.kodeGedung;

