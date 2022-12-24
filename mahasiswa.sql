create database fakultas;

create table jurusan; (
ID integer primary key auto_increment,
kode char(4) not null, 
nama varchar(50) not null,

);

create table mahasiswa (
ID integer primary key auto_increment,
id_jurusan integer not null,
nim char(8) not null,
nama varchar(50) not null,
jenis kelamin enum('laki-laki', 'perempuan') not null,
tempat_lahir varchar (50) not null,
tanggal_lahir date not null,
alamat varchar(255) not null,
foreign key (id_jurusan) references jurusan (id)
);

-- insert jurusan

insert into jurusan (kode, nama) values ("PTIF", "Perguruan Tinggi Informatika");

-- insert mahasiswa

insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir,tanggal_lahir, alamat)
values (1, "20220001", "Fulan", "laki-laki", "malang", "2000-12-25", "jl. soekarno hatta 9");

-- upadate mahasiswa
update mahasiswa set tempat_lahir = "jakarta";

-- delete mahasiswa
delete from mahasiswa where id = 1;